<?php

$router = new AltoRouter;

//$router->map('GET', '/', 'App\Controllers\IndexController@listAction', 'home');
$router->map('GET', '/', 'App\Controllers\Blog\BlogController@listAction', 'home');
$router->map('GET', '/register', 'App\Controllers\Auth\AuthController@registerAction', 'register');
$router->map('GET', '/login', 'App\Controllers\Auth\AuthController@loginAction', 'login');
