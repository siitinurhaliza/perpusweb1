-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 11:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `foto`, `nisn`, `nama`, `kelas`, `jk`, `alamat`) VALUES
(42, '657c19bd6c043.jpg', '2201094020', 'SITI NURHALIZA', '9Ab', 'perempuan', 'Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654'),
(43, '657c19f00bcce.jpeg', '2201094020', 'SITI NURHALIZA', '9c', 'perempuan', 'Jl. Lintas Sumatra No.KM 58, Mekar Jaya, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `rak` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `tlp` int(11) NOT NULL,
  `penerbit` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `foto`, `judul`, `stok`, `kategori`, `rak`, `inventaris`, `tanggal`, `pengarang`, `isbn`, `klasifikasi`, `kelas`, `keterangan`, `kota`, `alamat`, `tahunterbit`, `tlp`, `penerbit`) VALUES
(13, '657c1be366404.jpg', 'Manajemen Bisnis', 24, 'akademik', 'akademik1', '12a', '15 desember 2023', 'Siti nurhaliza', 'isbn30bisnis', '12abisnis', '12a', 'pelajaran bisnis', 'surabaya', 'jalan sudirman no 30', 2020, 8989786, 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `klasifikasi` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `keterangan`, `kelas`, `klasifikasi`) VALUES
(15, 'Resto & Cafe Solitaire', 'photo', '9Av', '123');

-- --------------------------------------------------------

--
-- Table structure for table `laporankembali`
--

CREATE TABLE `laporankembali` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(220) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` date NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'admin@pgri.com', 'adminpgri');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama`, `judul`, `tanggalpinjam`, `tanggalkembali`, `jumlah`, `kelas`) VALUES
(3, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2023-11-01', '2023-12-03', '13', '7'),
(6, 'siti', 'Algoritma & Pemograman', '2023-11-02', '2023-11-05', '1', '8'),
(14, 'budi', 'abc', '2023-12-14', '2023-12-16', '2', '12');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `alamat` varchar(220) NOT NULL,
  `tlp` int(11) NOT NULL,
  `kota` varchar(220) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `keterangan`, `alamat`, `tlp`, `kota`, `tahunterbit`, `judul`, `penerbit`, `pengarang`) VALUES
(7, 'Tanpa Keterangan', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, 'futdf', 2004, 'yyguyfu', 'giyfi', 'chg'),
(8, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 0, '', 0, '', '', ''),
(14, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(15, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(16, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(18, '', '', 0, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE `pengadaan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `asal` varchar(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`id`, `tanggal`, `judul`, `asal`, `jumlah`, `keterangan`) VALUES
(1, '12-01-20023', 'Jurnal Of Computer', 'Bandung', '13', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `kembali` text NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `kelas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `nama`, `judul`, `tanggalpinjam`, `tanggalkembali`, `kembali`, `jumlah`, `status`, `kelas`) VALUES
(2, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2023-11-26', '2023-12-01', '2023-11-30', '1', 'Dikembalikan', ''),
(3, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2023-11-28', '2023-12-02', '2023-12-17', '1', 'admin', ''),
(13, 'testing 1', 'sejarah dunia yang disembunyikan', '2023-12-03', '2023-12-16', '2023-12-13', '1', 'dikembalikan', '10'),
(14, '', '', '0000-00-00', '0000-00-00', '2023-12-15', '', 'dikembalikan', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL,
  `tlp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `foto`, `nama`, `email`, `status`, `level`, `tlp`) VALUES
(9, '657c152878d9b.jpeg', 'budi', 'budi@gmail.com', 'aktif', 'murid', 234666456),
(10, '657b0046931b0.png', 'dina', 'dina@gmail.com', 'aktif', 'guru', 435111345),
(13, '657c1e95456f9.jpeg', 'SITI NURHALIZA', 'sn613819@gmail.com', 'aktif', 'guru', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna1`
--

CREATE TABLE `pengguna1` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(220) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tlp` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna1`
--

INSERT INTO `pengguna1` (`id`, `nama`, `foto`, `email`, `tlp`, `status`, `level`) VALUES
(1, 'SITI', '12.jpg', 'sn301620@gmail.com', 2147483647, 'aktif', 'admin'),
(2, 'SITI NURHALIZA', 'aku.jpeg', 'sn613819@gmail.com', 2147483647, 'aktif', 'admin'),
(3, 'SITI NURHALIZA', 'image.jpg', 'sn613819@gmail.com', 2147483647, 'aktif', '0');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id`, `nomor`, `nama`, `keterangan`) VALUES
(1, 'rak11', 'novel', 'photo'),
(2, 'novelkuuu12', 'siti', 'photo'),
(4, 'novelkuuu', 'Resto & Cafe Solitaire', 'photok');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporankembali`
--
ALTER TABLE `laporankembali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna1`
--
ALTER TABLE `pengguna1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `laporankembali`
--
ALTER TABLE `laporankembali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengguna1`
--
ALTER TABLE `pengguna1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
