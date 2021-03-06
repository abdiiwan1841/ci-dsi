<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/masuk', 'Auth::index');
$routes->get('/daftar', 'Auth::register');
$routes->get('/keluar', 'Auth::logout');
$routes->post('/proses_masuk', 'Auth::process_login');
$routes->post('/proses_regis', 'Auth::process_regist');

// ================================================================================================

$routes->add('/beranda_op', 'Operator::index', ['filter' => 'ceklogin_operator']);

$routes->add('/brgmaster_op', 'Product::index' , ['filter' => 'ceklogin_operator']);
$routes->add('/tambah_brgmaster_op', 'Product::add', ['filter' => 'ceklogin_operator']);
$routes->add('/edit_brgmaster_op/(:any)', 'Product::add/$1/$2', ['filter' => 'ceklogin_operator']);
$routes->add('/hapus_brgmaster_op/(:any)', 'Product::delete/$1', ['filter' => 'ceklogin_operator']);

$routes->add('/brgmasuk_op', 'ProductIn::index', ['filter' => 'ceklogin_operator']);
$routes->add('/tambah_brgmasuk_op', 'ProductIn::add', ['filter' => 'ceklogin_operator']);
$routes->add('/edit_brgmasuk_op/(:any)', 'ProductIn::add/$1', ['filter' => 'ceklogin_operator']);
$routes->add('/hapus_brgmasuk_op/(:any)', 'ProductIn::delete/$1', ['filter' => 'ceklogin_operator']);

$routes->add('/brgkeluar_op', 'ProductOut::index', ['filter' => 'ceklogin_operator']);
$routes->add('/tambah_brgkeluar_op', 'ProductOut::add', ['filter' => 'ceklogin_operator']);
$routes->add('/edit_brgkeluar_op/(:any)', 'ProductOut::add/$1', ['filter' => 'ceklogin_operator']);
$routes->add('/hapus_brgkeluar_op/(:any)', 'ProductOut::delete/$1', ['filter' => 'ceklogin_operator']);

$routes->add('/kategori_op', 'Category::index', ['filter' => 'ceklogin_operator']);
$routes->add('/tambah_kategorimaster_op', 'Category::add', ['filter' => 'ceklogin_operator']);
$routes->add('/edit_kategorimaster_op/(:any)', 'Category::add/$1', ['filter' => 'ceklogin_operator']);
$routes->add('/hapus_kategorimaster_op/(:any)', 'Category::delete/$1', ['filter' => 'ceklogin_operator']);

$routes->add('/lokasi_op', 'Location::index', ['filter' => 'ceklogin_operator']);
$routes->add('/tambah_lokasimaster_op', 'Location::add', ['filter' => 'ceklogin_operator']);
$routes->add('/edit_lokasimaster_op/(:any)', 'Location::add/$1', ['filter' => 'ceklogin_operator']);
$routes->add('/hapus_lokasimaster_op/(:any)', 'Location::delete/$1', ['filter' => 'ceklogin_operator']);

$routes->add('/satuan_op', 'Unit::index', ['filter' => 'ceklogin_operator']);
$routes->add('/tambah_satuanmaster_op', 'Unit::add', ['filter' => 'ceklogin_operator']);
$routes->add('/edit_satuanmaster_op/(:any)', 'Unit::add/$1', ['filter' => 'ceklogin_operator']);
$routes->add('/hapus_satuanmaster_op/(:any)', 'Unit::delete/$1', ['filter' => 'ceklogin_operator']);

$routes->add('/vendor_op', 'Vendor::index', ['filter' => 'ceklogin_operator']);
$routes->add('/tambah_vendormaster_op', 'Vendor::add', ['filter' => 'ceklogin_operator']);
$routes->add('/edit_vendormaster_op/(:any)', 'Vendor::add/$1', ['filter' => 'ceklogin_operator']);
$routes->add('/hapus_vendormaster_op/(:any)', 'Vendor::delete/$1', ['filter' => 'ceklogin_operator']);

// ================================================================================================

$routes->add('/beranda_spv', 'Supervisor::index', ['filter' => 'ceklogin_supervisor']);

$routes->add('/laporanbarangmasuk_spv', 'ReportIn::index', ['filter' => 'ceklogin_supervisor']);
$routes->add('/laporanbarangkeluar_spv', 'ReportOut::index', ['filter' => 'ceklogin_supervisor']);
$routes->add('/laporanstockbarang_spv', 'ReportStock::index', ['filter' => 'ceklogin_supervisor']);
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
