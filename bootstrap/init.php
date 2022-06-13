<?php

/** Start session */
if (isset($_SESSION)) session_start();

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../app/config/_env.php';

//instantiate database class
new \App\Classes\Database();

require_once __DIR__ . '/../app/Routing/routes.php';

new \App\Routing\RouteDispatcher($router);
