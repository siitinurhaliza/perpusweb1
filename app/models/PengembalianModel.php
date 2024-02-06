<?php
class PengembalianModel
{
    private $table = 'pengembalian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function countPengembalian()
    {
        $this->db->query('SELECT COUNT(*) as total_rows FROM ' . $this->table);
        return $this->db->single();
    }


    public function getAllPengembalian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPengembalianById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPengembalian($data)
    {
        $query = "INSERT INTO pengembalian (nama, judul, tanggalpinjam, tanggalkembali, kembali, jumlah, status, kelas) VALUES (:nama, :judul, :tanggalpinjam, :tanggalkembali, :kembali, :jumlah, :status, :kelas)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']);
        $this->db->bind('kembali', $data['kembali']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('kelas', $data['kelas']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cetakPengembalian()
    {
        $query = "SELECT nama, judul, tanggalpinjam, tanggalkembali, kembali, jumlah, status, kelas FROM pengembalian";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function cetakLaporanByMonthAndYear($month, $year)
    {
        // Sesuaikan kondisi sesuai kebutuhan
        $query = "SELECT * FROM pengembalian
                  WHERE MONTH(tanggalpinjam) = :bulan AND YEAR(tanggalpinjam) = :tahun";

        // Bind parameter ke dalam query
        $this->db->query($query);
        $this->db->bind(':bulan', $month);
        $this->db->bind(':tahun', $year);

        return $this->db->resultSet();
    }
    public function cetakLaporanByDateRange($startYear, $startMonth, $startDay, $endYear, $endMonth, $endDay)
    {
        // Sesuaikan kondisi sesuai kebutuhan
        $query = "SELECT * FROM pengembalian 
                  WHERE (tanggalpinjam BETWEEN :start_date AND :end_date)
                  OR (tanggalkembali BETWEEN :start_date AND :end_date)";

        // Bind parameter ke dalam query
        $this->db->query($query);
        $this->db->bind(':start_date', "$startYear-$startMonth-$startDay");
        $this->db->bind(':end_date', "$endYear-$endMonth-$endDay");

        return $this->db->resultSet();
    }



    public function updatePengembalian($data)
    {
        $query = "UPDATE pengembalian SET nama=:nama, judul=:judul, tanggalpinjam=:tanggalpinjam, tanggalkembali=:tanggalkembali, kembali=:kembali, status=:status, jumlah=:jumlah, kelas=:kelas WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tanggalpinjam', $data['tanggalpinjam']);
        $this->db->bind('tanggalkembali', $data['tanggalkembali']);
        $this->db->bind('kembali', $data['kembali']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function deletePengembalian($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariPengembalian()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
