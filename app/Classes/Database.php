<?php

namespace App\Classes;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    public function __construct()
    {
        $db = new Capsule;
        $db->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'mvc-blog',
            'username' => 'root',
            'password' => 'Ciklum@123$',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $db->setAsGlobal();
        $db->bootEloquent();
    }
}