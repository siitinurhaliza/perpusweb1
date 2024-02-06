<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <div class="address">
                <i class="bi bi-geo-alt"> <p>Jl. Datuk Engku Raja Lela Putra, Pangkalan Kerinci Timur, Kec. Pangkalan Kerinci, Kab. Pelalawan Prov. Riau</p> </i>
              </div>
        </div>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css
 integrity="sha512-MV7K8+y+gLIBoVD591QIYicR65iaqukzvf/nwasF0nqhPay5w/91JmvM2hMDcnK1OnMGCdVK+iQrJ71zPJQd1w==" 
 crossorigin="anonymous" referrerpolicy="no-referrer" />
 <div class="container-fluid px-4">
  
 <style>
        #map {
            height: 30vh;
        }
        </style>
                        <h1 class="mt-4">Lokasi Smp Pgri - Pangkalan Kerinci</h1>
                        
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>

            getLocation(); 
             function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition); 
                }
             }
            function showPosition(position) {
                    let lat = 0.4122109137369217; 
                    let long = 101.86586600961421;

            var map = L.map('map', {
                center: [lat, long],
                zoom: 13
            });
            L.marker([lat, long]).addTo(map);

let data = <?php echo json_encode($data); ?>;

data.map(function (d) {
L.marker([0.4122109137369217,  101.86586600961421], {
icon:myIcon
}).addTo(map).bindPopup(`
 <p> 
 <i class="fa-duotone fa-school"></i> 
 <b></b>:<img src="<?= BASEURL; ?>/assets/frontsite/img/LOGO SMP PGRI.png"  alt="Welcome Image" width="300" height="100">
</p>
<p> 
<i class="fa-duotone fa-school"></i> 
<b>Cafe And Resto</b>: SMP PGRI </p>
<p> 
<i class="fa-sharp fa-solid fa-map-location-dot"></i> 
<b>Alamat</b>: Jl. Datuk Engku Raja Lela Putra, Pangkalan Kerinci Timur, Kec. Pangkalan Kerinci, Kab. Pelalawan Prov. Riau </p>
<p>`);


})

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {foo: 'bar', attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(map) }
</script>



<div class="container">
    <div class="row">
        <div class="center-container">
            <div class="col-lg-4">
                <div class="info">
                    <div class="contact-item email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="contact-item phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




          </div>

         

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->