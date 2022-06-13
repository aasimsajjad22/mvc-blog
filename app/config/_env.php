<?php

define('BASE_PATH', realpath(__DIR__.'/../../'));

require_once __DIR__.'/../../vendor/autoload.php';

$dotEnv = Dotenv\Dotenv::createUnsafeImmutable(BASE_PATH);
$dotEnv->safeLoad();
echo getenv('DB_DRIVER');