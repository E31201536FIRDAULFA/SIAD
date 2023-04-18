  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0">
        <span class="ms-1 font-weight-bold text-white">Hi!, <?= session()->get('nama') ?></span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a id="menu-item-1" class="nav-link text-white " href="<?= base_url('dashboard/warga') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <?php if(session()->get('role') === 'masterdata'): ?>
  
        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/users') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Data User</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Data Surat-Menyurat</h6>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/pengantar') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan SKCK</span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/kehilangan') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Surat Kehilangan</span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/SKTM') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Surat SKTM </span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/SPU') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Surat Usaha</span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/gaji') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Ket Gaji</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Data Kependudukan</h6>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/KK') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Kartu Keluarga</span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/KTP') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">KTP</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">KEUANGAN DESA</h6>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/apbd') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">APBDesa</span>
          </a>
        </li>

        

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li id="menu-item-3" class="nav-item">
          <a class="nav-link text-white " href="<?= base_url('') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
    <?php elseif(session()->get('role') === 'pelayanan'): ?>
  
        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/users') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Data User</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Data Surat-Menyurat</h6>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/skck') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan SKCK</span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/kehilangan') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Surat Kehilangan</span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/SKTM') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Surat SKTM </span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/SPU') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Surat Usaha</span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/gaji') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Ket Gaji</span>
          </a>
        </li>

        
        <?php elseif(session()->get('role') === 'pemerintahan'): ?>
    
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Data Kependudukan</h6>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/KK') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Kartu Keluarga</span>
          </a>
        </li>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/KTP') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">KTP</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">KEUANGAN DESA</h6>
        </li>
        <?php elseif(session()->get('role') === 'keuangan'): ?>
  
        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/apbd') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">APBDesa</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
       
        <?php elseif(session()->get('role') === 'warga'): ?>

        <li class="nav-item">
          <a id="menu-item-2" class="nav-link text-white " href="<?= base_url('dashboard/warga/riwayat') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Pengajuan Saya</span>
          </a>
        </li>
    <?php endif ?>

       
        <li class="nav-item">
          <a class="nav-link text-white" href="javascript:void(0);" onclick="signOut()">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>