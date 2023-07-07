<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .chatbot-container {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 320px;
      max-height: 80vh;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      overflow-y: auto;
      z-index: 9999;
    }

    .chatbot-container.active {
      display: block;
    }

    .chatbot-header {
      background-color: #0000ff;
      padding: 10px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .chatbot-header h1 {
      color: #ffffff;
      font-size: 16px;
      margin: 0;
    }

    .toggle-btn {
      width: 20px;
      height: 20px;
      background-color: transparent;
      border: none;
      outline: none;
      cursor: pointer;
      position: absolute;
      top: 10px;
      right: 10px;
    }

    .toggle-btn::before,
    .toggle-btn::after {
      content: "";
      position: absolute;
      background-color: #ffffff;
      width: 100%;
      height: 2px;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
    }

    .toggle-btn::before {
      transform: translateY(-50%) rotate(45deg);
    }

    .toggle-btn::after {
      transform: translateY(-50%) rotate(-45deg);
    }

    .chatbot-options {
      padding: 10px;
    }

    .chatbot-options button {
      display: block;
      width: 100%;
      background-color: #ffffff;
      color: #333333;
      border: none;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 10px;
      font-size: 14px;
      text-align: left;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .chatbot-options button:hover {
      background-color: #f1f1f1;
    }

    .expanded-option {
      display: none;
      padding: 10px;
      background-color: #f1f1f1;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .expanded-option p {
      margin: 0;
    }

    .expanded-option.expanded {
      display: block;
    }

    .information-container {
      padding: 10px;
      background-color: #ffffff;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .information-container h2 {
      color: #333333;
      font-size: 16px;
      margin: 0;
      margin-bottom: 5px;
    }

    .information-container p {
      color: #777777;
      font-size: 14px;
      margin: 0;
    }

    .chatbot-toggle-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 9999;
    }

    .chatbot-toggle-btn {
      width: 60px;
      height: 60px;
      background-color: 	 #ffffff;
      border-radius: 50%;
      border: none;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .chatbot-toggle-btn img {
      width: 40px;
      height: 40px;
    }

    .chatbot-toggle-btn:hover {
      background-color: #ff8f8f;
    }
  </style>
</head>
<body>
  <div class="chatbot-toggle-container">
    <button class="chatbot-toggle-btn" onclick="showChatbot()">
      <img src="<?= base_url('assets/img/chatbot.png') ?>" alt="ChatBot Icon">
    </button>
  </div>

  <div class="chatbot-container" id="chatbot-container">
    <div class="chatbot-header">
      <h1>Welcome to Pesan Informasi!</h1>
      <button class="toggle-btn" onclick="toggleChatbot()"></button>
    </div>
    <div class="chatbot-options">
    <button class="option-btn option-1" onclick="expandOption(1)">Apa itu SIAD??</button>
      <div class="expanded-option" id="option-1">
        <p>Siad adalah aplikasi pelayanan administrasi digital berbasis website yang memudahkan warga dalam mendapatkan pelayanan secara digital tanpa harus mengantri ke balai desa.</p>
       
      </div>
      <button class="option-btn option-7" onclick="expandOption(7)">Bagaimana cara membuat akun?</button>
      <div class="expanded-option" id="option-7">
        <p>Diwajibkan melakukan registrasi secara offline ke balai desa panduman untuk mendapatkan akun resmi berdasarkan nik perorangan.</p>
        
      </div>
      <button class="option-btn option-2" onclick="expandOption(2)">Apa saja jenis layanan surat yang tersedia?</button>
      <div class="expanded-option" id="option-2">
        <p>Terdapat 7 jenis layanan surat yang dapat diajukan melalui aplikasi ini, seperti berikut :</p>
        <ul>
          <li>Surat Pengantar Pengajuan KTP</li>
          <li>Surat Pengantar Pengajuan KK</li>
          <li>Surat Pengajuan Usaha</li>
          <li>Surat Kehilangan</li>
          <li>Surat Keterangan Tidak Mampu</li>
          <li>Surat Pengantar SKCK</li>
          <li>Surat Pengajuan Usaha</li>
          <li>Surat Ket Penghasilan</li>

        </ul>
      </div>
      <button class="option-btn option-3" onclick="expandOption(3)">Bagaimana cara mengajukan surat?</button>
      <div class="expanded-option" id="option-3">
        <p>Setelah mendapatkan akun, anda dapat login kedalam aplikasi dengan mengklik button "Ajukan Layanan" maka secara otomatis akan mendapatkan dashboard layanan pengajuan.</p>
        
      </div>
      <button class="option-btn option-4" onclick="expandOption(4)">Data apa yang diperlukan untuk mengajukan surat?</button>
      <div class="expanded-option" id="option-4">
        <p>Data yang diperlukan untuk mengajukan permohonan surat adalah data diri seperti Nik, Nama, TTL, Alamat, Jenis Kelamin, dan lain sebagainya.</p>
        
      </div>
      <button class="option-btn option-5" onclick="expandOption(5)">Berapa lama surat akan diproses?</button>
      <div class="expanded-option" id="option-5">
        <p>Surat masuk akan diproses sekitar satu sampai dua jam saja, karna akan melalui beberapa tahap seperti pembuatan surat, dan permintaan ttd kepada kepala desa.</p>
      </div>
      <button class="option-btn option-6" onclick="expandOption(6)">Kurang puas? Silahkan hubungi admin melalui email berikut!</button>
      <div class="expanded-option" id="option-6">
      <a href="pandumandesa1@gmail.com">Email</a>
      </div>
    </div>
    <div class="information-container" id="information-container">
      <h2 id="information-title"></h2>
      <p id="information-text"></p>
    </div>
  </div>

  <script>
    function expandOption(optionNumber) {
      const option = document.getElementById(`option-${optionNumber}`);
      option.classList.toggle("expanded");

      const expandedOptions = document.getElementsByClassName("expanded-option");
      for (let i = 0; i < expandedOptions.length; i++) {
        if (expandedOptions[i].id !== `option-${optionNumber}`) {
          expandedOptions[i].classList.remove("expanded");
        }
      }
    }

    function showChatbot() {
      const chatbotContainer = document.getElementById("chatbot-container");
      chatbotContainer.classList.toggle("active");
    }
  </script>
</body>
</html>