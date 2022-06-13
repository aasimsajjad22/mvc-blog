<?php

$router = new AltoRouter;

//$router->map('GET', '/', 'App\Controllers\IndexController@listAction', 'home');
$router->map('GET', '/', 'App\Controllers\Blog\BlogController@listAction', 'home');

$router->map('GET', '/register', 'App\Controllers\Auth\AuthController@registerAction', 'register');
$router->map('POST', '/register', 'App\Controllers\Auth\AuthController@registerAction', 'register_post');

$router->map('GET', '/login', 'App\Controllers\Auth\AuthController@loginAction', 'login');
$router->map('POST', '/login', 'App\Controllers\Auth\AuthController@loginAction', 'login_post');
