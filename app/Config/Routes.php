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
// $routes->get('/', 'Home::index');
$routes->get('/', 'BerandaController::index');
$routes->get('/beranda', 'BerandaController::index');
// $routes->add('admin/login', 'Index\Index::admin/login');

$routes->add('admin/logout', 'Admin\Admin::logout');
$routes->add('user/logout', 'User\User::logout');
$routes->add('operator/logout', 'Operator\Operator::logout');

// $routes->add('logout', 'Index\Index::logout');

$routes->group('operator', ['filter' => 'noauth'],  function ($routes) {
    $routes->add('', 'Operator\Operator::login');
    $routes->add('login', 'Operator\Operator::login');
    $routes->add('lupapassword', 'Operator\Operator::lupapassword');
    $routes->add('resetpassword', 'Operator\Operator::resetpassword');
});

$routes->group('operator', ['filter' => 'auth'], function ($routes) {
    $routes->add('sukses', 'Operator\Operator::sukses');
    
    $routes->add('article', 'Operator\Article::index');
    $routes->add('article/monitor', 'Operator\Article::monitor');
    $routes->add('article/laporan', 'Operator\Article::laporan');
    $routes->add('article/gambar', 'Operator\Article::gambar');
    $routes->add('article/(:any)', 'Operator\Article::$1');   
});


$routes->group('user', ['filter' => 'noauth'],  function ($routes) {
    $routes->add('', 'User\User::login');
    $routes->add('login', 'User\User::login');
    $routes->add('lupapassword', 'User\User::lupapassword');
    $routes->add('resetpassword', 'User\User::resetpassword');
});

$routes->group('user', ['filter' => 'auth'], function ($routes) {
    $routes->add('sukses', 'User\User::sukses');

    $routes->add('article', 'User\Article::index');
    $routes->add('article/monitor', 'User\Article::monitor');
    // $routes->add('article/monitor', 'User\Article::monitor');
    $routes->add('article/laporan', 'User\Article::laporan');
    $routes->add('article/gambar', 'User\Article::gambar');

});


$routes->group('admin', ['filter' => 'noauth'], function ($routes) {
    $routes->add('', 'Admin\Admin::login');
    $routes->add('login', 'Admin\Admin::login');
    $routes->add('lupapassword', 'Admin\Admin::lupapassword');
    $routes->add('resetpassword', 'Admin\Admin::resetpassword');
});

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->add('sukses', 'Admin\Admin::sukses');

    $routes->add('article', 'Admin\Article::index');
    $routes->add('article/tambah', 'Admin\Article::tambah');
    $routes->add('article/edit', 'Admin\Article::edit');
    $routes->add('article/(:any)', 'Admin\Article::$1');
    $routes->add('article/monitor', 'Admin\Article::monitor');
    $routes->add('article/laporan', 'Admin\Article::laporan');
    $routes->add('article/gambar', 'Admin\Article::gambar');
    $routes->add('article/qrcode', 'Admin\Article::qrcode');
    $routes->add('article/qrcode_generator', 'Admin\Article::qrcode_generator');
    $routes->add('article/qrcode_edit', 'Admin\Article::qrcode_edit');
});

$routes->add('api/article', 'Admin\Article::api');
$routes->add('api/article/(:any)', 'Admin\Article::api/$1');

$routes->add('article/(:any)', 'Article::index/$1');
$routes->add('page/(:any)', 'Page::index/$1');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
