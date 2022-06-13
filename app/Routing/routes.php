<?php

$router = new AltoRouter;

//$router->map('GET', '/', 'App\Controllers\IndexController@listAction', 'home');
$router->map('GET', '/', 'App\Controllers\Blog\BlogController@listAction', 'home');
$router->map('GET', '/post-details/[i:id]', 'App\Controllers\Blog\BlogController@detailAction', 'post_details');


$router->map('GET', '/register', 'App\Controllers\Auth\AuthController@registerAction', 'register');
$router->map('POST', '/register', 'App\Controllers\Auth\AuthController@registerAction', 'register_post');

$router->map('GET', '/login', 'App\Controllers\Auth\AuthController@loginAction', 'login');
$router->map('POST', '/login', 'App\Controllers\Auth\AuthController@loginAction', 'login_post');
$router->map('GET', '/logout', 'App\Controllers\Auth\AuthController@logoutAction', 'logout');
