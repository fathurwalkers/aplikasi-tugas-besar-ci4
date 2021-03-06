<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');
$routes->get('/login', 'Dashboard::login');
$routes->post('/postlogin', 'Dashboard::postlogin');
$routes->get('/register', 'Dashboard::register');
$routes->post('/post-register', 'Dashboard::postregister');
$routes->get('/logout', 'Dashboard::logout');

// Generate Data 
$routes->get('/chained-generate', 'Generate::chained_generate');
$routes->get('/generate/produk', 'Generate::generate_produk');
$routes->get('/generate/toko', 'Generate::generate_toko');
$routes->get('/generate/user', 'Generate::generate_user');

// USER 
$routes->get('/user/daftar-user', 'Dashboard::daftar_user');
$routes->add('/user/hapus-user/(:any)', 'Dashboard::hapus_user/$1');
$routes->add('/user/lihat-user/(:any)', 'Dashboard::lihat_user/$1');

// TOKO 
$routes->get('/toko/daftar-toko', 'Toko::daftar_toko');
$routes->add('/toko/hapus-toko/(:any)', 'Toko::hapus_toko/$1');
$routes->add('/toko/edit-toko/(:any)', 'Toko::edit_toko/$1');
$routes->get('/toko/tambah-toko', 'Toko::tambah_toko');
$routes->post('/toko/update-toko/(:any)', 'Toko::update_toko/$1');
$routes->post('/toko/post-tambah-toko', 'Toko::post_tambah_toko');
$routes->add('/toko/lihat-toko/(:any)', 'Toko::lihat_toko/$1');

// PRODUK 
$routes->get('/produk/daftar-produk', 'Produk::daftar_produk');
$routes->add('/produk/hapus-produk/(:any)', 'Produk::hapus_produk/$1');
$routes->add('/produk/edit-produk/(:any)', 'Produk::edit_produk/$1');
$routes->get('/produk/tambah-produk', 'Produk::tambah_produk');
$routes->post('/produk/update-produk/(:any)', 'Produk::update_produk/$1');
$routes->post('/produk/post-tambah-produk', 'Produk::post_tambah_produk');
$routes->add('/produk/lihat-produk/(:any)', 'Produk::lihat_produk/$1');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
