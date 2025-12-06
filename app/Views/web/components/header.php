<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A-one Car Polish [Pabitra]</title>

  <!-- Bootstrap (optional, for your global site styles) -->
  <link href="<?= base_url() ?>public/assets/web/css/bootstrap-bundle-min.css" rel="stylesheet">

  <!-- ✅ Make sure Bootstrap JS  -->
  <script src="<?= base_url() ?>public/assets/web/script/bootstrap-bundle-min.js"></script>


  <!-- Swiper CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>public/assets/web/css/swiper-bundle.min.css" />

  <!-- SwiperJS JS -->
  <script src="<?= base_url() ?>public/assets/web/script/swiper-bundle-min.js"></script>

  <!-- Font Awesome Icons -->
  <link href="<?= base_url() ?>public/assets/web/css/font-awesome-min.css" rel="stylesheet">

  <link href="<?= base_url() ?>public/assets/web/css/bootstrap-icons.css" rel="stylesheet">


  <link
    href="<?= base_url() ?>public/assets/web/css/googleapis.css"
    rel="stylesheet" />


  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


  <link rel="stylesheet" href="<?= base_url() ?>public/assets/web/css/style.css" />
  <!-- <script src="script.js"></script> -->



</head>

<body>


  <!--==============================
     Preloader
    ==============================-->


  <!-- ===================== HEADER ===================== -->
  <header class="main-header">
    <div class="header-container">
      <!-- Brand Logo -->
      <!-- Brand Logo (Mobile) -->
      <a href="<?= base_url() ?>/" class="logo logo--mobile">
        <img src="<?= base_url('public/assets/web/img/logo.png') ?>" alt="AONE Car Polish Mobile" />
      </a>

      <!-- Brand Logo (Desktop) -->
      <a href="<?= base_url() ?>/" class="logo logo--desktop">
        <img src="<?= base_url('public/assets/web/img/aone-car-polish-logo.png') ?>" alt="AONE Car Polish Desktop" />
      </a>

      <!-- Profile Icon -->
      <button class="header-icon" id="profileBtn">
        <i class="fas fa-user"></i>
      </button>
    </div>

    <!-- Desktop Navigation -->
    <nav class="desktop-nav">
      <a href="<?= base_url() ?>" class="nav-link active">Home</a>
      <a href="<?= base_url() ?>/services" class="nav-link">Services</a>
      <a href="<?= base_url('before_after') ?>" class="nav-link">Before/After</a>
      <a href="<?= base_url('/contact_us') ?>" class="nav-link">Contact</a>
      <a href="<?= base_url('blogs') ?>" class="nav-link">Blogs</a>

    </nav>
  </header>