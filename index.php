<!-- 
  Kelompok 4
  Anggota : 
  - Samuel Bernard Jeffersen - 19220735
  - Rizki Fadilla - 19220736
  - Attoric Hikmal Fajar - 19220158
  - Beni Rahmat jaya nazara -19220009
  - Kemas Rafli - 19220199

  Structure
  - Navbar
  - Header
  - About Product
  - Feature
  - Pricing
  - Testiomnial
  - Our Client
  - Our Team
  - Maps
  - Contact Us
  - Footer
-->
<?php
  require 'data.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- Google Font -->    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&family=Work+Sans&family=Inter&family=Poppins&display=swap" rel="stylesheet">

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>    
  
    <!-- CSS -->
    <link rel="stylesheet" href="assets/styles/style.css">    
        
    <title>ECASHIER</title>    
</head>

<body>
  <!-- HEADER START -->
  <header class="header">
    <!-- NAVBAR START -->
      <nav class="navbar navbar-expand-lg fixed-top py-3">
          <div class="container">
            <!-- Logo -->
            <a href="#" class="navbar-brand text-uppercase font-weight-bold">ECASHIER</a>
            <!-- Expand Button -->
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler navbar-toggler-right">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Link -->
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#"
                        class="nav-link"><b>Home</b></a></li>
                <li class="nav-item"><a href="#about" class="nav-link"><b>Product</b></a>
                </li>
                <li class="nav-item"><a href="#feature" class="nav-link"><b>Features</b></a>
                </li>
                <li class="nav-item"><a href="#pricing" class="nav-link"><b>Pricing</b></a>
                </li>
                <li class="nav-item"><a href="#our-client" class="nav-link"><b>Client</b></a>
                </li>
                <li class="nav-item"><a href="#our-team" class="nav-link"><b>Team</b></a>
                </li>
                <li class="nav-item"><a href="#contact-us" class="nav-link"><b>Contact Us</b></a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
      <!-- NAVBAR END -->
  
    <!-- Banner -->
    <div class="banner text-white">
      <div class="container">
        <div class="text-banner">
          <p style="font-weight: bold; font-size: 3rem;">Transaksi Lebih Mudah<br>
            Pengarsipan Tersusun Rapih<br>Bisnis Makin Lancar</p>
          <p>Memperkenalkan Ecashier Ultra & Ultra+.<br>
            Perangkat kasir paling mutakhir untuk kenyamanan<br>dan kemudahan operasi bisnis.</p>
          <button type="button" class="btn btn-outline-light">Coba Gratis</button>
        </div>
      </div>
    </div>


    <!-- UNUSED -->
    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="asset/banner-home-765.jpg" class="d-block w-100 h-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-banner-carousel container">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="asset/banner-home-765.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="asset/banner-home-765.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button> 
      </div>
    <div> -->
  </header>
  <!-- HEADER END -->


  <!-- NEW SECTION TEMPLATE -->
  <!-- <section id="title">
    <div class="container py-5 fill bg-danger">
      <div class="row justify-content-center">
        <div class="col">
          <p>title</p>
        </div>
      </div>
    </div>
  </section> -->
  <!-- NEW SECTION TEMPLATE -->

  <main>
    <!-- ABOUT START -->
    <section id="about">
      <div class="container py-5 fill ">
        <div class="row justify-content-center mt-5">
          <h4 class="about-heading">Bagaimana ECashier bisa bantu usahamu?</h4>
        </div>
        <div class="row justify-content-between mt-5  ">
          <div class="col-lg-4 col-md-12 about-container">
            <div class="about-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/Online%20offline.webp" alt="">
            </div>
            <h6 class="about-title">Efesiensi Operasional</h6>
            <p class="about-description">Catat dan kelola semua transaksi dari satu aplikasi</p>
          </div>
          <div class="col-lg-4 col-md-12 about-container">
            <div class="about-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/Easy%20to%20use.png" alt="">
            </div>
            <h6 class="about-title">Kelola Bisnis</h6>
            <p class="about-description">Pantau bisnis dan kelola karyawan dari mana saja</p>
          </div>
          <div class="col-lg-4 col-md-12 about-container">
            <div class="about-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/Terintegrasi.webp" alt="">
            </div>
            <h6 class="about-title">Laporan Sales</h6>
            <p class="about-description">Buat keputusan bisnis dengan cepat dengan dashboard penjualan informatif</p>
          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT END -->

    <!-- FEATURE START -->
    <section id="feature">
      <div class="container-fluid p-5 fill bg-blue">
        <!-- <div class="row justify-content-center mt-5">
          <h4 class="feature-heading">Feature List</h4>
        </div> -->
        <div class="row justify-content-between d-flex align-items-center p-5">
          <div class="col-6">
            <div class="feature-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/IllustrationESO-ID.webp" alt="">
            </div>
          </div>
          <div class="col-6">
            <div class="feature-icon py-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pc-display-horizontal"
                viewBox="0 0 16 16">
                <path
                  d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z" />
              </svg>
            </div>
            <h6 class="feature-title">Point of Sale</h6>
            <p class="feature-description">
              Ubah smartphone atau tablet Anda menjadi point-of-sale yang mudah digunakan
              <ul>
                <li>Menerbitkan kuitansi cetak atau elektronik</li>
                <li>
                  Terapkan diskon dan keluarkan pengembalian uang</li>
                <li>Tetap mencatat penjualan bahkan saat offline</li>
                <li>Hubungkan printer resi, pemindai kode batang, dan laci kas</li>
              </ul>
            </p>
          </div>
        </div>
        <div class="row justify-content-between d-flex align-items-center p-5">
          <div class="col-6">
            <div class="feature-icon py-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                <path
                  d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
              </svg>
            </div>
            <h6 class="feature-title">Payments</h6>
            <p class="feature-description">
              Menerima metode pembayaran apa pun yang diinginkan pelanggan Anda dengan lancar
              <ul>
                <li>
                  Pilih salah satu penyedia pembayaran terintegrasi kami yang tersedia di 30+ negara. Pembayaran
                  terintegrasi menghemat waktu, memastikan akurasi yang lebih baik, dan meminimalkan kesalahan.</li>
                <li>Gunakan penyedia layanan pedagang pilihan Anda untuk pembayaran yang tidak terintegrasi</li>
              </ul>
            </p>
          </div>
          <div class="col-6">
            <div class="feature-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/IllustrationESO-ID.webp" alt="">
            </div>
          </div>
        </div>
        <div class="row justify-content-between d-flex align-items-center p-5">
          <div class="col-6">
            <div class="feature-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/IllustrationESO-ID.webp" alt="">
            </div>
          </div>
          <div class="col-6">
            <div class="feature-icon py-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pc-display-horizontal"
                viewBox="0 0 16 16">
                <path
                  d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z" />
              </svg>
            </div>
            <h6 class="feature-title">Inventory management</h6>
            <p class="feature-description">
              Tidak pernah kehabisan stok
              <ul>
                <li>Track stock levels in real time</li>
                <li>Send orders to suppliers and track stock receipts</li>
                <li>Transfer stock between your stores</li>
                <li>Print barcode labels</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- FEATURE END -->

    <!-- PRICING START -->
    <section id="pricing">      
      <div class="container py-5 fill ">                
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center">
            <h2 class="mb-4">Our Best Pricing</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-lg-3 col-md-6">
            <div class="block-7">
              <div class="text-center">
                <h2 class="heading">Free</h2>
                <span class="price"><sup>$</sup> <span class="number">0<small class="per">/mo</small></span>
                  <span class="excerpt d-block">100% free. Forever</span>
                  <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                  <ul class="pricing-text mb-4">
                    <li><strong>150 GB</strong> Bandwidth</li>
                    <li><strong>100 GB</strong> Storage</li>
                    <li><strong>$1.00 / GB</strong> Overages</li>
                    <li>All features</li>
                  </ul>
                  <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="block-7">
              <div class="text-center">
                <h2 class="heading">Startup</h2>
                <span class="price"><sup>$</sup> <span class="number">19<small class="per">/mo</small></span></span>
                <span class="excerpt d-block">All features are included</span>
                <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                <ul class="pricing-text mb-4">
                  <li><strong>450 GB</strong> Bandwidth</li>
                  <li><strong>400 GB</strong> Storage</li>
                  <li><strong>$2.00 / GB</strong> Overages</li>
                  <li>All features</li>
                </ul>
                <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="block-7">
              <div class="text-center">
                <h2 class="heading">Premium</h2>
                <span class="price"><sup>$</sup> <span class="number">49<small class="per">/mo</small></span></span>
                <span class="excerpt d-block">All features are included</span>
                <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                <ul class="pricing-text mb-4">
                  <li><strong>250 GB</strong> Bandwidth</li>
                  <li><strong>200 GB</strong> Storage</li>
                  <li><strong>$5.00 / GB</strong> Overages</li>
                  <li>All features</li>
                </ul>
                <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="block-7">
              <div class="text-center">
                <h2 class="heading">Pro</h2>
                <span class="price"><sup>$</sup> <span class="number">99<small class="per">/mo</small></span></span>
                <span class="excerpt d-block">All features are included</span>
                <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                <ul class="pricing-text mb-4">
                  <li><strong>450 GB</strong> Bandwidth</li>
                  <li><strong>400 GB</strong> Storage</li>
                  <li><strong>$20.00 / GB</strong> Overages</li>
                  <li>All features</li>
                </ul>
                <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- PRICING END -->


    <!-- TESTIMONIAL START -->
    <section id="testimonial">
      <div class="container-fluid p-5 fill bg-blue">
        <div class="row justify-content-center">
          <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php
              foreach ($testimonials as $testimonial){
              ?>
              <div class="carousel-item <?php if ($testimonial['title'] == 'Ibu Sri') echo 'active'; ?>">
                <div class="row justify-content-between d-flex p-5">                    
                  <div class="col-6">
                    <div class="testimonial-image">
                      <img src="<?php echo $testimonial['image'] ?>" alt="">               
                   </div>
                  </div>
                  <div class="col-5" style="top: 10rem">
                    <h6 class="testimonial-title"><?php echo $testimonial['title'] ?></h6>
                    <h6 class="testimonial-subtitle"><?php echo $testimonial['subtitle'] ?></h6>
                    <p class="testimonial-content">
                    <?php echo $testimonial['content'] ?>
                    </p>                    
                  </div>   
                  <div class="col-1"></div>                 
                </div>
              </div>    
              <?php
              }
              ?>               
            </div>
            <button class="carousel-control-prev" type="button" data-target="#testimonial-carousel" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#testimonial-carousel" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button> 
          </div>
        <div>
        </div>
      </div>
    </section>
    
    <!-- TESTIMONIAL END -->

    <!-- OUR-CLIENT START -->
    <section id="our-client" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Our CLients</h3>
          <p>Kelompok 4 Web Progamming</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp"
          style="visibility: visible; animation-name: fadeInUp">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" class="img-fluid" alt="" />
            </div>
            <div class="client-text">
              <p><b>Bootstrap</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img
                src="data:image/png;base64,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"
                class="img-fluid" alt="" />
            </div>
            <div class="client-text">
              <p><b>W3Shcools</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="http://bpma.bsi.ac.id/wp-content/uploads/2019/08/cropped-Logo-UBSI-360x360.png"
                class="img-fluid" alt="" />
            </div>
            <div class="client-text">
              <p><b>Universitas BSI</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/CSS3_logo.svg/800px-CSS3_logo.svg.png"
                class="img-fluid" alt="" />
            </div>
            <div class="client-text">
              <p><b>CSS</b></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- OUR-CLIENT END -->

    <!-- OUR-TEAM START -->
    <section id="our-team">
      <div class="container py-5 fill ">
        <div class="row justify-content-center mt-5">
          <h4 class="our-team-heading">Our Team</h4>
          <h5 class="our-team-subheading">We work in teams, with various expertise, and with passion. Smart, agile teams that can do and deliver anything. And take your business anywhere.</h5>
        </div>
        <div class="row justify-content-center mt-5 ">
          <div class="col-4 our-team-container">
            <div class="our-team-image mb-3">
               <img src="assets/images/brook.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Beni Rahmat Jaya Nazara</h6>
            <p class="our-team-job">Quality Assurance</p>
          </div>
          
          <div class="col-4 our-team-container">
            <div class="our-team-image mb-3">
               <img src="assets/images/zoro.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Rizki Fadilla</h6>
            <p class="our-team-job">Fullstack Developer</p>
          </div>                                    
          <div class="col-4 our-team-container">
            <div class="our-team-image mb-3">
               <img src="assets/images/chooper.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Attoric Hikmal Fajar</h6>
            <p class="our-team-job">Network Administrator</p>
          </div>                            
          <div class="col-4 our-team-container">
            <div class="our-team-image mb-3">
               <img src="assets/images/luffy.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Samuel Bernard Jeffersen</h6>
            <p class="our-team-job">Android Engineer</p>
          </div>
          <div class="col-4 our-team-container">
            <div class="our-team-image mb-3">
               <img src="assets/images/usop.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Kemas Rafli</h6>
            <p class="our-team-job">Data Scientist</p>
          </div>
        </div>
      </div>
    </section>
    <!-- OUR-TEAM END -->

    <!-- CONTACT-US START -->
    <section id="contact-us" class="cs-gradient_bg_1">
      <div class="cs-height_95 cs-height_lg_70"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-8">
            <div class="cs-seciton_heading cs-style1">
              <div class="cs-height_10 cs-height_lg_10"></div>
              <h3 class="cs-section_title" style="color:#38A2F7">Contact Us Now!</h3>
            </div>
            <p style="margin-bottom:10px;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias numquam eius totam! Saepe, libero. Quae
              consequuntur dignissimos dolorem sint velit error saepe laborum, non tempore.
            </p>
            <div class="cs-height_15 cs-height_lg_15"></div>
            <div class="cs-iconbox cs-style3">
              <div class="cs-iconbox_icon">
                <i class="fa fa-map"></i>
              </div>
              <div class="cs-iconbox_right">
                <h2 class="cs-iconbox_title">Address</h2>
                <div class="cs-iconbox_subtitle">Jl. Margonda No.8, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat
                  16424</div>
              </div>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
            <div class="cs-iconbox cs-style3">
              <div class="cs-iconbox_icon">
                <i class="fa fa-address-book"></i>
              </div>
              <div class="cs-iconbox_right">
                <h2 class="cs-iconbox_title">Contract Number</h2>
                <div class="cs-iconbox_subtitle">+62 888-8888-8888</div>
              </div>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
            <div class="cs-iconbox cs-style3">
              <div class="cs-iconbox_icon">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="cs-iconbox_right">
                <h2 class="cs-iconbox_title">Email Address</h2>
                <div class="cs-iconbox_subtitle">sales@email.com</div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 offset-xl-1">
            <div class="cs-height_40 cs-height_lg_40"></div>
            <form class="cs-contact_form">
              <h2 class="cs-contact_form_title">Please fill up the form</h2>
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="cs-form_field" placeholder="Name">
                  <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-6">
                  <input type="text" class="cs-form_field" placeholder="Email address">
                  <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                  <input type="text" class="cs-form_field" placeholder="Phone number">
                  <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                  <textarea cols="30" rows="5" class="cs-form_field" placeholder="Write your massage"></textarea>
                  <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                  <button class="cs-btn cs-size_md" style="float:right;"><span>Send Message</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="cs-height_95 cs-height_lg_70"></div>
    </section>
    <!-- CONTACT-US END -->

    <!-- MAPS START -->
    <section id="maps">
      <div id="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.282336434867!2d106.82965127515274!3d-6.357489093632487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec3c53dfed75%3A0xad5f6ba586fc5d5e!2sCampus%20D2%20Of%20BSI%20Margonda%20Depok!5e0!3m2!1sen!2sid!4v1686304151140!5m2!1sen!2sid"
          width="100%" height="350" style="border:0;" allowfullscreen loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <!-- MAPS END -->
  </main>

  <!-- FOOTER START -->  
  <footer id="footer" class="cs-footer">    
    <div class="cs-height_75 cs-height_lg_70"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="cs-footer_item">
            <div class="cs-footer_widget_text">
              <a href="#" class="footer-logo text-uppercase font-weight-bold">ECASHIER</a>
              <p class="mt-3" style="margin-bottom:15px;">
                Memperkenalkan Ecashier Ultra & Ultra+. Perangkat kasir paling <br>
                mutakhir untuk kenyamanan dan <br>
                kemudahan operasi bisnis.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="cs-footer_item widget_nav_menu">
            <h2 class="cs-widget_title">Navigation</h2>
            <ul class="menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="#product">Product</a></li>
              <li><a href="#features">Features</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#client">Client</a></li>
              <li><a href="#team">Team</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6"></div>
        <div class="col-lg-3 col-md-6">
          <div class="cs-footer_item widget_nav_menu">
            <h2 class="cs-widget_title">Subscribe us</h2>
            <form class="cs-newsletter">
              <div class="cs-newsletter_text">Get Business news, tip and solutions to your problems from our experts.
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
              <input type="text" class="cs-form_field" placeholder="Enter your email">
              <div class="cs-height_10 cs-height_lg_10"></div>
              <button class="cs-btn cs-size_md w-100"><span>Subscribe</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="cs-height_40 cs-height_lg_30"></div>
    <div class="cs-copyright text-center">
      <div class="container"><b>Copyright &copy; 2023 </b> Compiled by <b>MySQL Team.</b></div>
    </div>
  </footer>
  <!-- FOOTER END -->
  
  <!-- JavaScript -->    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/scripts/script.js"></script>    
</body>

</html>