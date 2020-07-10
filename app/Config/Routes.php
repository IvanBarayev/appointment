<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('Home::dashboard');
$routes->setTranslateURIDashes(FALSE);
$routes->set404Override();
$routes->setAutoRoute(FALSE);

$routes->get('/', 'Home::dashboard');
$routes->group('auth', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->add('login', 'Auth::login', ['as' => 'login']);
    $routes->post('chklogin', 'Auth::chklogin', ['as' => 'chklogin']);
    $routes->get('logout', 'Auth::logout');
    $routes->add('forgot_password', 'Auth::forgot_password', ['as' => 'forgot_password']);
});

$routes->group('mng', ['namespace' => 'App\Controllers\Mng'], function ($routes) {
    $routes->add('services', 'Services::list');
    $routes->add('general', 'General::list');
    $routes->add('forgot_password', 'Auth::forgot_password', ['as' => 'forgot_password']);
});

$routes->group('apps', ['namespace' => 'App\Controllers\Appointment'], function ($routes) {
    $routes->add('list', 'Appointment::list');
});

$routes->group('clients', ['namespace' => 'App\Controllers\Clients'], function ($routes) {
    $routes->add('list', 'Clients::list');
});

$routes->group('service', ['namespace' => 'App\Controllers\Service'], function ($routes) {
    $routes->add('list', 'Service::list');
});

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
