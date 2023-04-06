<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UD. Tiga Saudara</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url("beranda/assets") ?>//img/favicon.png" rel="icon">
  <link href="<?= base_url("beranda/assets") ?>//img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url("beranda/assets") ?>//vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url("beranda/assets") ?>//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url("beranda/assets") ?>//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url("beranda/assets") ?>//vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url("beranda/assets") ?>//vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url("beranda/assets") ?>//css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NewBiz
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <h1><a href="index.html">Home Page</a></h1>
        <!-- <a href="index.html"><img src="<?= base_url("beranda/assets") ?>//img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Features</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Sign In</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
              <li><a class="nav-link scrollto" href="/admin/login">Login</a></li>
              <li><a class="nav-link scrollto" href="#contact">Register</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url("beranda/assets") ?>//img/website/login.png" alt="" class="img-fluid">
      </div>
      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>Welcome to<br><span>UD. Tiga Saudara</span><br>Website</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Learn More</a>
          <a href="#services" class="btn-services scrollto">Features</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p> UD. Tiga Saudara is a trading business owned by individuals who have an independent management
            information system and no direct intervention or interference from other parties.
          </p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
            <h3>SYSTEM DESIGN</h3>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Monitoring</a></h4>
              <p class="description">Build a website application for monitoring stock warehousing.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Accessible</a></h4>
              <p class="description">Build a website that can be accessed to all platforms.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Reminder Notification</a></h4>
              <p class="description">Build an automatically whatsapp message notifications using Chatbot.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="<?= base_url("beranda/assets") ?>//img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="<?= base_url("beranda/assets") ?>//img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
            <h4>RESEARCH BACKGROUND</h4>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <div class="icon"><i class="bi bi-card-checklist"></i></div> -->
              <!-- <h4 class="title fs-6"><a href="">Eiusmod Tempor</a></h4> -->
              <!-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p> -->
              <!-- </div> -->

              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <!-- <div class="icon"><i class="bi bi-brightness-high"></i></div> -->
                <!-- <h4 class="title fs-6"><a href="">Magni Dolores</a></h4> -->
                <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> -->
              </div>

              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <!-- <div class="icon"><i class="bi bi-calendar4-week"></i></div> -->
                <!-- <h4 class="title fs-6"><a href="">Dolor Sitema</a></h4> -->
                <p class="description">During the process of monitoring items at UD. Tiga Saudara is still
                  done manually, namely by writing notes about how many items
                  are coming in and going out.
                </p>
                <p class="description">Warehouse is one of the most important parts and has a function as a place to store goods, whether items are sold.
                  Therefore UD. Tiga Saudara needs a good system for monitoring and controlling inventory to make it easier for employees
                  to control and monitor the existing inventory.
                </p>
              </div>
            </div>
          </div>

          <div class="row about-extra">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
              <img src="<?= base_url("beranda/assets") ?>//img/about-extra-2.svg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
              <h4>DISADVANTAGES IN THE PROCEDURE THAT HAS BEEN PERFORMED</h4>
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <!-- <div class="icon"><i class="bi bi-card-checklist"></i></div> -->
                <!-- <h4 class="title fs-6"><a href="">Eiusmod Tempor</a></h4> -->
                <!-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p> -->
              </div>

              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <!-- <div class="icon"><i class="bi bi-brightness-high"></i></div> -->
                <!-- <h4 class="title fs-6"><a href="">Magni Dolores</a></h4> -->
                <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> -->
              </div>

              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <!-- <div class="icon"><i class="bi bi-calendar4-week"></i></div> -->
                <!-- <h4 class="title fs-6"><a href="">Dolor Sitema</a></h4> -->
                <p class="description">So far, the process of managing stock and
                  prices of items is done by writing on notes.
                  So that sometimes there is ineffectiveness
                  in managing how many stocks are owned
                  or are being ordered.
                </p>
                <p class="description">So far, the process of managing stock and
                  prices of items is done by writing on notes.
                  So that sometimes there is ineffectiveness
                  in managing how many stocks are owned
                  or are being ordered.
                </p>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Features Section ======= -->
    <section id="services" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Features</h3>
          <p>Here's some features on the warehouse management system</p>
        </header>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-eye" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Monitoring The Items</a></h4>
              <p class="description">Easiest way to monitor data items using only website and compatible to all device.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-clipboard-data" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Managing Items</a></h4>
              <p class="description">Manage the stock items available realtime using Codeigniter as a Framework and Php for database.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-envelope-fill" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Reminder Notification</a></h4>
              <p class="description">Reminder feature that minimizes errors in receiving information.</p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="clearfix">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Gallery</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Gambar UD. Tiga Saudara</a></h4>
                <p>App</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar1.jpeg" data-gallery="portfolioGallery" title="Gambar UD. Tiga Saudara" class="portfolio-lightbox link-preview"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Gambar UD. Tiga Saudara</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar2.jpeg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Gambar UD. Tiga Saudara"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Gambar UD. Tiga Saudara</a></h4>
                <p>App</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar3.jpeg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Gambar UD. Tiga Saudara"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Gambar UD. Tiga Saudara</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar4.jpeg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Gambar UD. Tiga Saudara"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar5.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Gambar UD. Tiga Saudara</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar5.jpeg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Gambar UD. Tiga Saudara"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar6.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Gambar UD. Tiga Saudara</a></h4>
                <p>App</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar6.jpeg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Gambar UD. Tiga Saudara"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/website/portofolio/gambar1.jpeg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/portfolio/card3.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url("beranda/assets") ?>//img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?= base_url("beranda/assets") ?>//img/portfolio/web1.jpg" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div> -->

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Team</h3>
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
            <div class="member">
              <img src="<?= base_url("beranda/assets") ?>//img/website/team/pakAkhwan.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Akuwan Saleh, S.ST, MT</h4>
                  <span>Advisor I</span>
                  <div class="social">
                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="member">
              <img src="<?= base_url("beranda/assets") ?>//img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Haryadi Amran Darwito, S.ST, MT</h4>
                  <span>Advisor II</span>
                  <div class="social">
                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
            <div class="member">
              <img src="<?= base_url("beranda/assets") ?>//img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Advisor III</span>
                  <div class="social">
                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
            <div class="member">
              <img src="<?= base_url("beranda/assets") ?>//img/website/team/farel2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Farel Hafiz Mustafa</h4>
                  <span>Student</span>
                  <div class="social">
                    <!-- <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Tools</h3>
          <p>Here's the tools to build this website system</p>
        </div>

        <div class="row g-0 clients-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= base_url("beranda/assets") ?>//img/website/tools/bootstrap.jpeg" class="img-fluid" alt="" style="width:120%">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= base_url("beranda/assets") ?>//img/website/tools/ci.jpeg" class="img-fluid" alt="" style="width:50%">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= base_url("beranda/assets") ?>//img/website/tools/css.jpeg" class="img-fluid" alt="" style="width:60%">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= base_url("beranda/assets") ?>//img/website/tools/html.jpeg" class="img-fluid" alt="" style="width:60%">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= base_url("beranda/assets") ?>//img/website/tools/js.jpeg" class="img-fluid" alt="" style="width:90%">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= base_url("beranda/assets") ?>//img/website/tools/php.jpeg" class="img-fluid" alt="" >
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= base_url("beranda/assets") ?>//img/website/tools/mysql.jpeg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= base_url("beranda/assets") ?>//img/website/tools/vscode.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-6 footer-info">
              <h3>UD. TIGA SAUDARA</h3>
              <p>UD Tiga Saudara was founded in September 1991 which is located at Jalan Kalijudan 184A
                Kelurahan Kalijudan, Kecamatan Mulyorejo, Kota Surabaya.
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Located</h4>
              <p>
                Jalan Raya Kalijudan No. 184A<br>
                Kelurahan Kalijudan, <br>
                Kecamatan Mulyorejo, <br>
                Kota Surabaya <br>

              </p>

              <!-- <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div> -->

            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter">
              <h4>Contact Us</h4>
              <strong>Phone:</strong> 082140692933<br>
              <strong>Email:</strong> farelhafiz.fhm@gmail.com<br>

              <br>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              </div>
              <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Farel UD. TIGA SAUDARA 2023</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url("beranda/assets") ?>//vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url("beranda/assets") ?>//vendor/aos/aos.js"></script>
    <script src="<?= base_url("beranda/assets") ?>//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url("beranda/assets") ?>//vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url("beranda/assets") ?>//vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url("beranda/assets") ?>//vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url("beranda/assets") ?>//vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url("beranda/assets") ?>//js/main.js"></script>

</body>

</html>