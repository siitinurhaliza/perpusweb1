<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <main id="main">
          <!-- ======= Contact Section ======= -->
          <section id="login" class="login">
            <div class="container">
              <style>
                * {
                  box-sizing: border-box;
                }

                #myInput {
                  background-image: url();
                  background-position: 10px 10px;
                  background-repeat: no-repeat;
                  width: 100%;
                  font-size: 16px;
                  padding: 12px 20px 12px 40px;
                  border: 1px solid #ddd;
                  margin-bottom: 12px;
                }
              </style>

              <h2>My Books</h2>

              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for titles.." title="Type in a title">

              <div class="container mt-5">
                <div class="row">
                  <?php foreach ($data['buku'] as $buku) : ?>
                    <div class="col-md-3 mb-3">
                      <div class="card">
                        <img src="<?= BASEURL; ?>/public/assets/frontsite/img/foto_profile/<?= $buku['foto']; ?>" class="card-img-top" alt="Cover Buku">
                        <div class="card-body">
                          <h5 class="card-title"><?= $buku['judul']; ?></h5>
                          <p class="card-text">Pengarang: <?= $buku['pengarang']; ?></p>
                          <p class="card-text">Tahun Terbit: <?= $buku['tahunterbit']; ?></p>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
  </div>
</section>

<script>
  function myFunction() {
    // Declare variables
    var input, filter, cards, card, title, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    cards = document.getElementsByClassName("card");

    // Loop through all cards, and hide those that don't match the search query
    for (i = 0; i < cards.length; i++) {
      card = cards[i];
      title = card.getElementsByClassName("card-title")[0];
      if (title) {
        txtValue = title.textContent || title.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          card.style.display = "";
        } else {
          card.style.display = "none";
        }
      }
    }
  }
</script>
