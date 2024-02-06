


 <main id="main">

    <!-- <link rel="stylesheet" href="<?= BASEURL; ?>/assets/frontsite/css/chart-org.css"> -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title row justify-content-center">
                <div class="col-lg-8">
                    <tr>
                        <td colspan="7" class="text-center">
                            <img src="<?= BASEURL; ?>/assets/frontsite/img/pgri12.png" style="width: 140px; height: auto;">
                            <img src="<?= BASEURL; ?>/assets/frontsite/img/logosmppgri.png" style="width: 90px; height: auto;">
                            <h5>PERPUSTAKAAN SEKOLAH MENENGAH PERTAMA PGRI</h5>
                            <p class="fst-italic">Jl. Datuk Engku Raja Lela Putra, Pangkalan Kerinci Timur, Kec. Pangkalan Kerinci, Kab. Pelalawan Prov. Riau </p>
                        </td>
                    </tr>
                </div>
            </div>


            <div class="section-title">
                <div class="col-lg-8 pt-4 pt-lg-0 content mx-auto text-center border border-4 border-dark">
                    <p class="fst-italic">
                        Selamat datang di Sistem Informasi Perpustakaan SMP PGRI Pangkalan Kerinci, tempat di mana teknologi bertemu dengan pengetahuan dan inspirasi. Kami memandang perpustakaan sebagai pusat pembelajaran.
                    </p>
                    <div class="row justify-content-between d-flex align-items-center">
                        <div class="col-lg-6">
                            <ul class="text-start">
                                <li><i class="bi bi-rounded-right"></i> <strong>NPSN :</strong> 69808316</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Status :</strong> Swasta</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Bentuk Pendidikan :</strong> SMP</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Status Kepemilikan :</strong> Yayasan</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="text-start">
                                <li><i class="bi bi-rounded-right"></i> <strong>SK Pendirian Sekolah :</strong> 421/Disdik/2009/061.1</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Tanggal SK Pendirian :</strong> 2013-10-28</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>SK Izin Operasional :</strong> 420/Disdik/2013/207</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Tanggal SK Izin Operasional :</strong> 2013-11-29</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <section class="page-section bg-light" id="team">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="section-heading text-uppercase">STRUKTUR ORGANISASI PERPUSTAKAAN</h2>
                        <h3 class="section-subheading text-muted">SMPS PGRI KAB.PELALAWAN</h3>
                    </div>
                    <div class="row">
                        <div id="chart_org"></div>
                    </div>
                    <div class="row">
                        
                    </div>
                </div>
            </section>

            <style>
                .i_org .left {
                    border: 4px solid #000;
                    border-right: 0;
                }

                .i_org .left img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    display: block;
                    padding: .3rem;
                }

                .i_org .right .box {
                    height: 100%;
                    display: grid;
                    grid-template-rows: 1fr 1fr;
                    font-weight: 600;
                    font-size: 1rem;
                    line-height: 110%;
                    color: #000;
                }

                .i_org .right .box .top {
                    background-color: #BDD7EE;
                    border: 4px solid #000;
                    border-bottom: 0;
                }

                .i_org .right .box .bottom {
                    border: 4px solid #000;
                    border-top: 0;
                }

                .google-visualization-orgchart-node {
                    background: #fff;
                    padding: 0;
                    border: none;
                }
            </style>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', {
                    packages: ["orgchart"]
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    const data = new google.visualization.DataTable();
                    data.addColumn('string', 'Name');
                    data.addColumn('string', 'Manager');
                    data.addColumn('string', 'ToolTip');

                    // For each orgchart box, provide the name, manager, and tooltip to show.
                    data.addRows([
                        // baris 1 v=kunci, f=elemen tag html
                        [{
                                'v': 'penanggung_jawab',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>Penanggung Jawab</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                                <span> Kepala SMP PGRI KAB.PELALAWAN</span>
                                                <span>Siti Nurhaliza</span>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            '', 'Kepala Sekolah'
                        ],
                        // baris 2
                        [{
                                'v': 'kepala',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>Kepala Perpustakaan</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                                <span>Siti Nurhaliza</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            'penanggung_jawab', 'Kepala Perpustakaan'
                        ],
                        // baris 3
                        [{
                                'v': 'layanan_membaca',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>layanan membaca</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                                <span>Siti Nurhaliza</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            'kepala', 'Layanan Membaca'
                        ],
                        [{
                                'v': 'layanan_teknis',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>layanan teknis</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                               
                                                <span>Siti Nurhaliza</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            'kepala', 'Layanan Teknis'
                        ],
                        [{
                                'v': 'layanan_tik',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>layanan tik</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                                <span>Siti Nurhaliza</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            'kepala', 'Layanan Tik'
                        ],
                        // baris 4
                        [{
                                'v': 'layanan_membaca2',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>layanan membaca</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                               
                                                <span>Siti Nurhaliza</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            'layanan_membaca', 'Layanan Membaca'
                        ],
                        // baris 5
                        [{
                                'v': 'layanan_teknis2',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>layanan teknis</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                                <span>Siti Nurhaliza</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            'layanan_teknis', 'Layanan Teknis'
                        ],
                        //baris 6
                        [{
                                'v': 'layanan_tik2',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>layanan tik</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                                <span>Siti Nurhaliza</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            'layanan_tik', 'Layanan Tik'
                        ],
                         [{
                                'v': 'layanan_membaca2',
                                'f': `
                                    <div class="row p-0 i_org">
                                        <div class="col-3 p-0 left">
                                            <img src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/657c0db8b169b.jpeg" alt="">
                                        </div>
                                        <div class="col-9 p-0 text-uppercase right">
                                            <div class="box p-0">
                                                <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                    <span>layanan membaca</span>
                                                </div>
                                                <div class="d-flex justify-content-center align-item-center flex-column bottom">
                                               
                                                <span>Siti Nurhaliza</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    `
                            },
                            'layanan_membaca', 'Layanan Membaca'
                        ], 
                        
                    ]);
                    

                    // Create the chart.
                    const chart = new google.visualization.OrgChart(document.getElementById('chart_org'));
                    google.visualization.events.addListener(chart, 'ready', customStyle);

                    chart.draw(data, {
                        'allowHtml': true,
                        'size': 'large'
                    });

                }

                function customStyle() {
                    document.querySelector('#chart_org table').style.width = "100%";
                };
            </script>
        </div>
    </section>