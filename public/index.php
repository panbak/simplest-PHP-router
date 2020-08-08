<?php

require_once __DIR__ . '/../router/Router.php';
require_once __DIR__ . '/helpers.php';

$_404 = __DIR__ . '/../views/404.php';

$router = new Router;

$router->get('/', function () {
    return view('home');
});

$router->get('/home', function () {
    return view('home');
});

$router->get('/about', function () {
    return view('about');
});

$url = $_SERVER['REQUEST_URI'];
$router->run($url);
