<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->match(['GET','POST'],'login','Auth::login');
$routes->match(['GET','POST'],'loginadm','Auth::loginadm');
$routes->match(['GET','POST'],'register','Auth::register');
$routes->match(['GET','POST'],'login/lupa-password','Auth::LupaPassword');
$routes->match(['GET','POST'],'reset-password/(:any)','Auth::ResetPassword/$1');
$routes->get('logout', 'Auth::Logout');
$routes->get('chat', 'Auth::chat');

//Back end user
$routes->group('dashboard', ['filter' => 'authRole'], function ($routes) {
    //Profile
    $routes->match(['GET', 'POST'], 'profile/(:any)', 'Dashboard::profile/$1');
    //Anggota
    $routes->group('anggota-keluarga', function($routes) {
      $routes->match(['GET', 'POST'], '/', 'Dashboard::anggota');
      $routes->match(['GET', 'POST'], 'update/(:num)', 'Dashboard::perbaruiAnggota/$1');
      $routes->get('delete/(:num)', 'Dashboard::hapusAnggota/$1');
    });

    //Main
    $routes->get('/', 'Dashboard::index');
    //tabel user
    $routes->match(['GET', 'POST'], 'users', 'Dashboard::users');
    $routes->match(['GET', 'POST'], 'users/update/(:num)', 'Dashboard::usersUpdate/$1');
    $routes->get('users/delete/(:num)', 'Dashboard::usersDelete/$1');
    $routes->get('users/data', 'Dashboard::usersData');


     //tabel kehilangan
     $routes->group('kehilangan', function ($routes) {
        //Main
        $routes->match(['GET', 'POST'],'/', 'Kehilangan::index');
        $routes->match(['GET', 'POST'],'addadm', 'Kehilangan::addadm');
        $routes->match(['GET', 'POST'],'addstatic', 'Kehilangan::addstatic');
        $routes->match(['GET', 'POST'], 'update/(:num)', 'Kehilangan::editKehilangan/$1');
        $routes->get('delete/(:num)', 'Kehilangan::hapusKehilangan/$1');
        $routes->get('data', 'Kehilangan::dataKehilangan');
        $routes->get('riwayatkehilangan', 'Kehilangan::datakehilanganriwayat');
        $routes->match(['GET', 'POST'], 'download/(:num)', 'Kehilangan::download/$1');
        $routes->match(['GET', 'POST'], 'upload/(:num)', 'Kehilangan::upload/$1');
        $routes->get('ajukan', 'Kehilangan::ajukan');
    });

      //tabel SKTM
      $routes->group('SKTM', function ($routes) {
        //Main
        $routes->match(['GET', 'POST'],'/', 'SKTM::index');
        $routes->match(['GET', 'POST'],'addadm', 'SKTM::addadm');
        $routes->match(['GET', 'POST'],'addstatic', 'SKTM::addstatic');
        $routes->match(['GET', 'POST'], 'update/(:num)', 'SKTM::editSKTM/$1');
        $routes->get('delete/(:num)', 'SKTM::hapusSKTM/$1');
        $routes->get('data', 'SKTM::dataSKTM');
        $routes->get('riwayatsktm', 'SKTM::datasktmriwayat');
        $routes->match(['GET', 'POST'], 'download/(:num)', 'SKTM::download/$1');
        $routes->match(['GET', 'POST'], 'upload/(:num)', 'SKTM::upload/$1');
        $routes->get('ajukan', 'SKTM::ajukan');
        
    });

     //tabel SPU
     $routes->group('SPU', function ($routes) {
        //Main
        $routes->match(['GET', 'POST'],'/', 'SPU::index');
        $routes->match(['GET', 'POST'],'addadm', 'SPU::addadm');
        $routes->match(['GET', 'POST'],'addstatic', 'SPU::addstatic');
        $routes->match(['GET', 'POST'], 'update/(:num)', 'SPU::editSPU/$1');
        $routes->get('delete/(:num)', 'SPU::hapusSPU/$1');
        $routes->get('data', 'SPU::dataSPU');
        $routes->get('riwayatspu', 'SPU::dataspuriwayat');
        $routes->match(['GET', 'POST'], 'download/(:num)', 'SPU::download/$1');
        $routes->match(['GET', 'POST'], 'upload/(:num)', 'SPU::upload/$1');
        $routes->get('ajukan', 'SPU::ajukan');
    });

     

      //tabel KTP
      $routes->group('KTP', function ($routes) {
        //Main
        $routes->match(['GET', 'POST'],'/', 'KTP::index');
        $routes->match(['GET', 'POST'],'addadm', 'KTP::addadm');
        $routes->match(['GET', 'POST'],'addstatic', 'KTP::addstatic');
        $routes->match(['GET', 'POST'], 'update/(:num)', 'KTP::editKTP/$1');
        $routes->get('delete/(:num)', 'KTP::hapusKTP/$1');
        $routes->get('data', 'KTP::dataKTP');
        $routes->get('riwayatktp', 'KTP::dataKTPriwayat');
        $routes->match(['GET', 'POST'], 'download/(:num)', 'KTP::download/$1');
        $routes->match(['GET', 'POST'], 'upload/(:num)', 'KTP::upload/$1');
        $routes->match(['GET', 'POST'], 'lihat/(:num)', 'KTP::lihat/$1');
        $routes->get('ajukan', 'KTP::ajukan');
    });

    //tabel APBD
    $routes->group('apbd', function ($routes) {
      //Main
      $routes->match(['GET', 'POST'],'/', 'apbd::index');
      $routes->match(['GET', 'POST'], 'update/(:num)', 'apbd::editapbd/$1');
      $routes->get('delete/(:num)', 'apbd::hapusapbd/$1');
      $routes->get('data', 'apbd::dataapbd');
  });

  //tabel rab
  $routes->group('rab', function ($routes) {
    //Main
    $routes->match(['GET', 'POST'],'/', 'rab::index');
    $routes->match(['GET', 'POST'], 'update/(:num)', 'rab::editrab/$1');
    $routes->get('delete/(:num)', 'rab::hapusrab/$1');
    $routes->get('data', 'rab::datarab');
});

  //tabel rab
  $routes->group('spp', function ($routes) {
    //Main
    $routes->match(['GET', 'POST'],'/', 'spp::index');
    $routes->match(['GET', 'POST'], 'update/(:num)', 'spp::editspp/$1');
    $routes->get('delete/(:num)', 'spp::hapusspp/$1');
    $routes->get('data', 'spp::dataspp');
  });

   //tabel Warga
   $routes->group('warga', function ($routes) {
    //Main
    $routes->match(['GET', 'POST'],'surat', 'warga::surat');
    $routes->match(['GET', 'POST'],'riwayat', 'warga::riwayat');
    $routes->match(['GET', 'POST'], 'update/(:num)', 'warga::editwarga/$1');
    $routes->get('delete/(:num)', 'warga::hapuswarga/$1');
    $routes->get('data', 'warga::datawarga');
   
});

  //tabel Gaji
  $routes->group('gaji', function ($routes) {
    //Main
    $routes->match(['GET', 'POST'],'/', 'gaji::index');
    $routes->match(['GET', 'POST'],'addadm', 'gaji::addadm');
    $routes->match(['GET', 'POST'],'addstatic', 'gaji::addstatic');
    $routes->match(['GET', 'POST'], 'update/(:num)', 'gaji::editgaji/$1');
    $routes->get('delete/(:num)', 'gaji::hapusgaji/$1');
    $routes->get('data', 'gaji::datagaji');
    $routes->get('riwayatgaji', 'gaji::datagajiriwayat');
    $routes->match(['GET', 'POST'], 'download/(:num)', 'gaji::download/$1');
    $routes->match(['GET', 'POST'], 'upload/(:num)', 'gaji::upload/$1');
    $routes->get('ajukan', 'gaji::ajukan');
  });

   //tabel riwayat
   $routes->group('skck', function ($routes) {
    //Main
    $routes->match(['GET', 'POST'],'/', 'skck::index');
    $routes->match(['GET', 'POST'],'addadm', 'skck::addadm');
    $routes->match(['GET', 'POST'],'addstatic', 'skck::addstatic');
    $routes->match(['GET', 'POST'], 'update/(:num)', 'skck::editskck/$1');
    $routes->get('delete/(:num)', 'skck::hapusskck/$1');
    $routes->get('data', 'skck::dataskck');
    $routes->get('riwayatskck', 'skck::dataskckriwayat');
    $routes->match(['GET', 'POST'], 'download/(:num)', 'skck::download/$1');
    $routes->match(['GET', 'POST'], 'upload/(:num)', 'skck::upload/$1');
    $routes->get('ajukan', 'skck::ajukan');
    
  });

  //tabel riwayat
  $routes->group('riwayat', function ($routes) {
    //Main
    $routes->match(['GET', 'POST'],'rsktm', 'riwayat::riwayatsktm');
    $routes->match(['GET', 'POST'],'rspu', 'riwayat::riwayatspu');
    $routes->match(['GET', 'POST'],'rgaji', 'riwayat::riwayatgaji');
    $routes->match(['GET', 'POST'],'rktp', 'riwayat::riwayatktp');
    $routes->match(['GET', 'POST'],'rkk', 'riwayat::riwayatkk');
    $routes->match(['GET', 'POST'],'rkehilangan', 'riwayat::riwayatkehilangan');
    $routes->match(['GET', 'POST'],'rskck', 'riwayat::riwayatskck');
  });

  $routes->group('pdf', function ($routes) {
    $routes->get('/', 'PdfController::index');
    $routes->get('pdfktp/(:num)', 'KTP::cetak/$1');
    $routes->get('pdfAPBD', 'PdfController::generateAPBD');
    $routes->get('pdfSPU/(:num)', 'SPU::cetak/$1');
    $routes->get('pdfSKTM/(:num)', 'SKTM::cetak/$1');
    $routes->get('pdfskck/(:num)', 'skck::cetak/$1');
    $routes->get('pdfgaji/(:num)', 'gaji::cetak/$1');
    $routes->get('pdfKehilangan/(:num)', 'Kehilangan::cetak/$1');
    $routes->get('pdfspp/(:num)', 'PdfController::cetak/$1');
    
  });

});

//Back end Pengantar




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
