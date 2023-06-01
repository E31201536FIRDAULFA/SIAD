<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIAD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets_fe/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets_fe/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendors CSS Files -->
  <link href="<?= base_url('assets_fe/vendors/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendors/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendors/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendors/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendors/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_fe/vendors/aos/aos.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets_fe/css/main.css') ?>" rel="stylesheet">
  <style>
.chatbot-container {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 300px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  transition: height 0.3s ease;
  font-family: Arial, sans-serif;
}

.collapsed {
  height: 0;
}

.chatbot-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 20px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.chatbot-header h1 {
  margin: 0;
  font-size: 20px;
  color: #333;
}

.toggle-btn {
  width: 24px;
  height: 24px;
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  background-image: url('https://image.flaticon.com/icons/svg/130/130884.svg');
  background-repeat: no-repeat;
  background-size: cover;
}

.chatbot-options {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

.option-btn {
  padding: 10px 20px;
  background-color: #f9f9f9;
  border: none;
  border-radius: 30px;
  margin-bottom: 10px;
  cursor: pointer;
  font-size: 14px;
  color: #333;
  transition: background-color 0.3s ease;
}

.option-btn:hover {
  background-color: #f1f1f1;
}

.option-1 {
  background-color: #ffca28;
  color: #fff;
}

.option-2 {
  background-color: #26c6da;
  color: #fff;
}

.option-3 {
  background-color: #ab47bc;
  color: #fff;
}

.information-container {
  display: none;
  padding: 20px;
  background-color: #f1f1f1;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

.chatbot-footer {
  padding: 10px 20px;
  background-color: #f1f1f1;
  text-align: center;
}

.information-container h2 {
  margin: 0;
  font-size: 18px;
  text-align: center;
  color: #333;
}

.information-container p {
  margin: 10px 0 0;
  font-size: 14px;
  color: #666;
}
</style>
</head>

<body>
  <?= $this->include('layout/partials/homeHeader') ?>
  <?= $this->include('layout/partials/homeHero') ?>
  <?= $this->include('page/partials/chatbot') ?>
  <main id="main">
    <?= $this->renderSection('content') ?>
  </main><!-- End #main -->
  <?= $this->include('layout/partials/homeFooter') ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendors JS Files -->
  <?= $this->renderSection('scripts') ?>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('assets_fe/vendors/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendors/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendors/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendors/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendors/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets_fe/vendors/php-email-form/validate.js') ?>') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets_fe/js/main.js') ?>"></script>
  <script>
   // Get all the option buttons
const optionButtons = document.querySelectorAll('.option-btn');

// Get the information container and its child elements
const informationContainer = document.getElementById('information-container');
const informationTitle = document.getElementById('information-title');
const informationText = document.getElementById('information-text');

// Add click event listeners to each option button
optionButtons.forEach((button) => {
  button.addEventListener('click', handleOptionSelection);
});

// Add click event listener to the document
document.addEventListener('click', handleOutsideClick);

// Handle option selection
function handleOptionSelection(e) {
  const selectedOption = e.target.getAttribute('data-option');

  // Set the content based on the selected option
  if (selectedOption === '1') {
    informationTitle.textContent = 'Apa itu siad?';
    informationText.textContent = 'Siad adalah aplikasi pelayanan administrasi digital berbasis website yang memudahkan warga dalam mendapatkan pelayanan secara digital tanpa harus mengantri ke balai desa';
  } else if (selectedOption === '2') {
    informationTitle.textContent = 'Bagaimana cara membuat akun?';
    informationText.textContent = 'Diwajibkan melakukan registrasi secara offline ke balai desa panduman untuk mendapatkan akun resmi berdasarkan nik perorangan.';
  } else if (selectedOption === '3') {
    informationTitle.textContent = 'Bagaimana cara mengajukan surat?';
    informationText.textContent = 'Setelah mendapatkan akun, anda dapat login kedalam aplikasi dengan mengklik button "Ajukan Layanan" maka secara otomatis akan mendapatkan dashboard layanan pengajuan.';
  } else if (selectedOption === '4') {
    informationTitle.textContent = 'Data apa yang diperlukan untuk mengajukan surat?';
    informationText.textContent = 'Data yang diperlukan untuk mengajukan permohonan surat adalah data diri seperti Nik, Nama, TTL, Alamat, Jenis Kelamin, dan lain sebagainya.';
  } else if (selectedOption === '5') {
    informationTitle.textContent = 'Berapa lama surat akan diproses?';
    informationText.textContent = 'Surat masuk akan diproses sekitar satu sampai dua jam saja, karna akan melalui beberapa tahap seperti pembuatan surat, dan permintaan ttd kepada kepala desa. ';
  }else if (selectedOption === '6') {
    informationTitle.textContent = 'Apa saja jenis layanan surat yang tersedia?';
    informationText.textContent = 'Terdapat 7 jenis layanan surat yang dapat diajukan melalui aplikasi ini, seperti surap pengantar pengajuan KTP, KK, Surat Kehilangan, Surat Pengajuan Usaha, Surat Tidak Mampu, Surat pengantar SKCK, Surat Ket Penghasilan';
  }else if (selectedOption === '7') {
    informationTitle.textContent = 'Kurang puas? Silahkan hubungi admin melalui email berikut!';
    informationText.textContent = 'pandumandesa1@gmail.com';
  }


  // Display the information container
  informationContainer.style.display = 'block';

  // Stop the click event propagation to prevent it from being considered an outside click
  e.stopPropagation();
}

// Handle outside click
function handleOutsideClick(e) {
  // Check if the click target is outside the information container
  if (!informationContainer.contains(e.target)) {
    // Hide the information container
    informationContainer.style.display = 'none';
  }
}

const chatbotContainer = document.getElementById('chatbot-container');
const toggleBtn = document.getElementById('toggle-btn');

toggleBtn.addEventListener('click', toggleChatbot);

function toggleChatbot() {
  chatbotContainer.classList.toggle('collapsed');
}
    </script>

</body>

</html>