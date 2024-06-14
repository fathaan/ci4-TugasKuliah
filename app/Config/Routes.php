<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('dashboard', 'Admin\Dashboard::index');

// route ke page data karyawan
$routes->get('employee', 'Admin\Employee::index');
$routes->post('employee/add', 'Admin\Employee::add');
$routes->get('employee/edit/(:num)', 'Admin\Employee::edit/$1');
$routes->get('employee/hapus/(:num)', 'Admin\Employee::hapus/$1');
$routes->post('employee/update', 'Admin\Employee::update');

// route ke page data potongan
$routes->get('potongan', 'Admin\Potongan::index');
$routes->post('potongan/add', 'Admin\Potongan::add');
$routes->get('potongan/hapus/(:num)', 'Admin\Potongan::hapus/$1');
$routes->post('potongan/update', 'Admin\Potongan::update');

// route ke page data tunjangan
$routes->get('tunjangan', 'Admin\Tunjangan::index');
$routes->post('tunjangan/add', 'Admin\Tunjangan::add');
$routes->get('tunjangan/hapus/(:num)', 'Admin\Tunjangan::hapus/$1');
$routes->post('tunjangan/update', 'Admin\Tunjangan::update');

// route ke page data penggajian
$routes->get('penggajian', 'Admin\Penggajian::index');
$routes->post('penggajian/add', 'Admin\Penggajian::add');
$routes->get('penggajian/edit/(:num)', 'Admin\Penggajian::edit/$1');
$routes->get('penggajian/hapus/(:num)', 'Admin\Penggajian::hapus/$1');
$routes->post('penggajian/update', 'Admin\Penggajian::update');

// route ke page data account
$routes->get('account', 'Admin\Users::index');
$routes->post('account/add', 'Admin\Users::add');
$routes->get('account/edit/(:num)', 'Admin\Users::edit/$1');
$routes->get('account/hapus/(:num)', 'Admin\Users::hapus/$1');
$routes->post('account/update', 'Admin\Users::update');
