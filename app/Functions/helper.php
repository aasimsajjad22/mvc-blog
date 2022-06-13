<?php

use Philo\Blade\Blade;
use App\Classes\Session;

function view($path, array $data = [])
{
    $view = __DIR__.'/../../resources/views';
    $cache = __DIR__.'/../../bootstrap/cache';

    $blade = new Blade($view, $cache);

    echo $blade->view()->make($path, $data)->render();
}

function isAuthenticated()
{
    return Session::has('SESSION_EMAIL') ? true : false;
}