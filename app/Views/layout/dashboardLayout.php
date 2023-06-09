<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
  <title>
    Layanan Siad
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <link id="pagestyle" href="<?= base_url('assets/css/material-dashboard.css?v=3.0.4') ?>" rel="stylesheet" />
<style>
  .chatbot-container {
  width: 300px;
  margin: 0 auto;
  border: 1px solid #ccc;
  padding: 20px;
}

.chatbot-header h1 {
  margin: 0;
  font-size: 18px;
  text-align: center;
}

.chatbot-options {
  text-align: center;
  margin-bottom: 20px;
}

.option-btn {
  padding: 10px 20px;
  background-color: #f4f4f4;
  border: none;
  margin-bottom: 10px;
  cursor: pointer;
}

.option-btn:hover {
  background-color: #ccc;
}

.chatbot-footer p {
  margin: 0;
  font-size: 14px;
  text-align: center;
}

  .circle-container {
  display: flex;
}

.circle {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #000000;
  margin-right: 10px;
}
</style>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <?= $this->include('layout/partials/dashboardSideBar') ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?= $this->include('layout/partials/dashboardHeader') ?>
    <div class="container-fluid py-4">
      <?= $this->renderSection('content') ?>
      <?= $this->include('layout/partials/dashboardFooter') ?>
    </div>
  </main>
  <?= $this->include('layout/partials/dashboardPlugin') ?>
 
  <!--   Core JS Files   -->
  <script src="<?= base_url('js/Modules.js') ?>"></script>
  <?= $this->renderSection('scripts') ?>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    $(document).ready(function() {
        var currentUrl = window.location.href;
        $("a").each(function() {
            if ($(this).attr("href") === currentUrl) {
                $(this).addClass("active bg-gradient-info");
            } else {
                $(this).removeClass("active bg-gradient-info");
            }
        });
    });

  $(document).ready(function() {
    $('#select').select2();
  });
    
  </script>
  <!-- Github buttons -->
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/js/material-dashboard.min.js?v=3.0.4') ?>"></script>
</body>

</html>