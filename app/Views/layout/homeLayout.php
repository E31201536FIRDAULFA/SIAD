<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets_fe/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets_fe/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets_fe/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendor/aos/aos.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets_fe/css/main.css') ?>" rel="stylesheet">
</head>

<body>
  <?= $this->include('layout/partials/homeHeader') ?>
  <?= $this->include('layout/partials/homeHero') ?>
  <main id="main">
    <?= $this->renderSection('content') ?>
  </main><!-- End #main -->
  <?= $this->include('layout/partials/homeFooter') ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <?= $this->renderSection('scripts') ?>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('assets_fe/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendor/php-email-form/validate.js') ?>') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets_fe/js/main.js') ?>"></script>

</body>

</html>