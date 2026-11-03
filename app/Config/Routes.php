<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->post('travel/booking', 'TravelBooking::create', ['filter' => 'csrf']);
$routes->get('pertanian', 'Pertanian::index');
$routes->get('kemasyarakatan', 'Kemasyarakatan::index');
$routes->get('layanan', 'Layanan::index');
$routes->get('mitra', 'Mitra::index');
$routes->get('umkm', 'Umkm::index');
$routes->get('lainnya', 'Lainnya::index');

// Admin routes
$routes->get('admin/login', 'Admin\Auth::login');
$routes->post('admin/login', 'Admin\Auth::login');
$routes->get('admin/logout', 'Admin\Auth::logout');
$routes->get('admin/dashboard', 'Admin\Dashboard::index');
