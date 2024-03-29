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

<!-- Testimonial Data -->
<?php
  require 'data.php';
?>

<!-- Form Proccess -->
<?php
  $conn = mysqli_connect('127.0.0.1','root', '','ecashier');

  if(!$conn)
  {
    die(mysqli_error());
  }

  if(isset($_POST['submit']))
  {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $descriptions = trim($_POST['descriptions']);
    
    $sql = "insert into vendor_contact (fullname, email, phone, descriptions) values ('".$fullname."', '".$email."', '".$phone."', '".$descriptions."')";
    $rs = mysqli_query($conn, $sql);
    $affectedRows = mysqli_affected_rows($conn);
    
    if($affectedRows == 1)
    {
      $successMsg = "Data Saved!";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Web Icon -->
    <link rel="icon" type="assets/icons/favicon.ico" href="assets/icons/favicon.ico">

    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- Google Font -->    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&family=Work+Sans&family=Inter&family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
                <!-- <li class="nav-item"><a href="#feature" class="nav-link"><b>Features</b></a>
                </li> -->
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
      <div class="container py-5 fill">      
        <div class="row justify-content-center mt-5">
          <h4 class="about-heading">Ragam Fitur</h4>
        </div>
        <div class="row justify-content-between p-5">
          <div class="col-lg-4 col-sm-12 about-container">
            <div class="about-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/Online%20offline.webp" alt="">
            </div>
            <h6 class="about-title">Efesiensi Operasional</h6>
            <p class="about-description">Catat dan kelola semua transaksi dari satu aplikasi</p>
          </div>
          <div class="col-lg-4 col-sm-12 about-container">
            <div class="about-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/Easy%20to%20use.png" alt="">
            </div>
            <h6 class="about-title">Kelola Bisnis</h6>
            <p class="about-description">Pantau bisnis dan kelola karyawan dari mana saja</p>
          </div>
          <div class="col-lg-4 col-sm-12 about-container">
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
        <div class="row justify-content-between align-items-center p-5">
          <div class="col-lg-6 col-md-12">
            <div class="feature-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/IllustrationESO-ID.webp" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
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
        <div class="row justify-content-between align-items-center p-5">
          <div class="col-lg-6 col-md-12">
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
          <div class="col-lg-6 col-md-12">
            <div class="feature-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/IllustrationESO-ID.webp" alt="">
            </div>
          </div>
        </div>
        <div class="row justify-content-between align-items-center p-5">
          <div class="col-lg-6 col-md-12">
            <div class="feature-image">
              <img src="https://www.esb.id/product/esbposlite/images/ilustrator/IllustrationESO-ID.webp" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="feature-icon py-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pc-display-horizontal"
                viewBox="0 0 16 16">
                <path
                  d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z" />
              </svg>
            </div>
            <h6 class="feature-title">Inventory Management</h6>
            <p class="feature-description">
              Lacak total stok secara waktu nyata
              <ul>                
                <li>Kirim pesanan ke pemasok dan lacak tanda terima stok</li>
                <li>Transfer stok antar toko Anda</li>
                <li>Cetak label kode batang</li>
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
        <div class="row justify-content-center pt-5">
          <div class="col-md-7 text-center">
            <h2 class="mb-4">Our Best Pricing</h2>
          </div>
        </div>

        <div class="row mt-5">
          <div class="pricing-card-container my-2 shadow-lg  col-lg-4 col-md-6">
            <div class="pricing-card-top p-3 rounded-top">
              <h4>Basic</h4>
              <h3>Rp299.000</h3>
              <h5>Per outlet/bulan</h5>
            </div>          
            <div class="pricing-card-bottom p-3">
              <h4>Paket yang mendukung operasi bisnis dasar <br><br> </h4>
              <button type="button" class="btn btn-outline-primary rounded-pill">Jadwalkan Demo</button>
            </div>
          </div>
          <div class="pricing-card-container my-2 shadow-lg  col-lg-4 col-md-6">
            <div class="pricing-card-top-premium p-3 rounded-top">
              <h4>Pro</h4>
              <h3>Rp499.000</h3>
              <h5>Per outlet/bulan</h5>
            </div>          
            <div class="pricing-card-bottom p-3">
              <h4>Paket dengan fitur lengkap yang mendukung efisiensi bisnis Anda</h4>
              <button type="button" class="btn btn-outline-primary rounded-pill">Jadwalkan Demo</button>
            </div>
          </div>
          <div class="pricing-card-container my-2 shadow-lg  col-lg-4 col-md-6">
            <div class="pricing-card-top p-3 rounded-top">
              <h4>Enterprise</h4>
              <h3>Rp799.000</h3>
              <h5>Per outlet/bulan</h5>
            </div>          
            <div class="pricing-card-bottom p-3">
              <h4>Paket terdepan yang mendukung bisnis Anda ke level yang lebih tinggi</h4>
              <button type="button" class="btn btn-outline-primary rounded-pill">Jadwalkan Demo</button>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <!-- PRICING END -->

    <!-- TESTIMONIAL START -->
    <section id="testimonial">
      <div class="container-fluid p-5 fill bg-blue">
        <div class="row ">
          <div id="testimonial-carousel" class="carousel slide" >
            <div class="carousel-inner">
            <?php
              foreach ($list_testimonial as $testimonial){
            ?>
              <div class="carousel-item <?php if ($testimonial['title'] == 'Ibu Sri') echo 'active'; ?>">
                <div class="row p-5 align-items-center">                    
                  <div class="col-lg-6 col-md-12">
                    <div class="testimonial-image">
                      <img src="<?php echo $testimonial['image'] ?>" alt="">               
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12 py-5">
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
    <section id="our-client">
      <div class="container ">
        <div class="section-header">
          <h3>Our Clients</h3>          
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp"
          style="visibility: visible; animation-name: fadeInUp">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="client-logo">
              <img src="https://akarapi.b-cdn.net/wp-content/uploads/2021/01/Logo-Holland-Bakery-Brand-Milk-PT-Mustika-Citra-Rasa-1200x564.jpg" class="img-fluid" alt="" />
            </div>
            <div class="client-text">
              <p><b>Holland Bakery</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="client-logo">
              <img
                src="https://www.harvestcakes.com/static/img/TH-LOGO.png"
                class="img-fluid" alt="" />
            </div>
            <div class="client-text">
              <p><b>The Harvest</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="client-logo">
              <img src="https://download.logo.wine/logo/Indofood/Indofood-Logo.wine.png"
                class="img-fluid" alt="" />
            </div>
            <div class="client-text">
              <p><b>Indofood</b></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="client-logo">
              <img src="https://www.matahari.com/media/wysiwyg/LOGO_NEVADA_2.jpg"
                class="img-fluid" alt="" />
            </div>
            <div class="client-text">
              <p><b>Nevada</b></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- OUR-CLIENT END -->

    <!-- OUR-TEAM START -->
    <section id="our-team">
      <div class="container py-5 fill">
        <div class="row justify-content-center mt-5">
          <h4 class="our-team-heading">Our Team</h4>
          <h5 class="our-team-subheading">We work in teams, with various expertise, and with passion. Smart, agile teams that can do and deliver anything. And take your business anywhere.</h5>
        </div>
        <div class="row justify-content-center mt-5 ">
          <div class="col-lg-4 col-sm-6 our-team-container ">
            <div class="our-team-image mb-3 ">
               <img src="assets/images/brook.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Beni Rahmat Jaya Nazara</h6>
            <p class="our-team-job">Quality Assurance</p>
          </div>          
          <div class="col-lg-4 col-sm-6 our-team-container">
            <div class="our-team-image mb-3">
               <img src="assets/images/zoro.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Rizki Fadilla</h6>
            <p class="our-team-job">Fullstack Developer</p>
          </div>                                    
          <div class="col-lg-4 col-sm-6 our-team-container">
            <div class="our-team-image mb-3">
               <img src="assets/images/chooper.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Attoric Hikmal Fajar</h6>
            <p class="our-team-job">Network Administrator</p>
          </div>                            
          <div class="col-lg-4 col-sm-6 our-team-container">
            <div class="our-team-image mb-3">
               <img src="assets/images/luffy.jpeg" alt="">               
            </div>
            <h6 class="our-team-name">Samuel Bernard Jeffersen</h6>
            <p class="our-team-job">Android Engineer</p>
          </div>
          <div class="col-lg-4 col-sm-6 our-team-container">
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

    <!-- MAPS START -->
    <section id="maps" class="cs-gradient_bg_1">
      <div class="cs-height_40 cs-height_lg_70"></div>
        <div class="cs-seciton_heading cs-style1">
          <div class="cs-height_10 cs-height_lg_10"></div>
          <h3 class="cs-section_title2 text-center">Our Location!</h3>
          <div class="cs-height_10 cs-height_lg_10"></div>
        </div>
        
      <div id="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.282336434867!2d106.82965127515274!3d-6.357489093632487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec3c53dfed75%3A0xad5f6ba586fc5d5e!2sCampus%20D2%20Of%20BSI%20Margonda%20Depok!5e0!3m2!1sen!2sid!4v1686304151140!5m2!1sen!2sid"
          width="250%" height="350" style="border:0;" allowfullscreen loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <!-- MAPS END -->

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
            <form class="cs-contact_form" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
              <h2 class="cs-contact_form_title">Please fill up the form</h2>
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="cs-form_field" placeholder="Name" name="fullname" id="fullname">
                  <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-6">
                  <input type="email" class="cs-form_field" placeholder="Email address" name="email" id="email">
                  <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                  <input type="number" class="cs-form_field" placeholder="Phone number" name="phone" id="phone">
                  <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                  <textarea cols="30" rows="5" class="cs-form_field" placeholder="Write your message" name="descriptions" id="descriptions"></textarea>
                  <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                  <?php 
                    if(isset($successMsg))
                    {
                      echo "<div class='cs-btn-success cs-size_md' style='padding:2%'>";
                      print_r($successMsg);
                      echo "</div>";
                    }
                  ?>
                  <input class="cs-btn cs-size_md" style="float:right;padding:2%" type="submit" name="submit" id="submit" value="Send Message" onclick="window.history.back();">
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="cs-height_95 cs-height_lg_70"></div>
    </section>
    <!-- CONTACT-US END -->
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
              <li><a href="#about">Product</a></li>              
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#our-client">Client</a></li>
              <li><a href="#our-team">Team</a></li>
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
  <script src="assets/scripts/script.js"></script>    

</body>
</html>