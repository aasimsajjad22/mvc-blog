<?php

$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@listAction', 'home');
