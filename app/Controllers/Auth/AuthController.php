<?php

namespace App\Controllers\Auth;

class AuthController
{
    public function registerAction()
    {
        return view('auth/register');
    }

    public function loginAction()
    {
        return view('auth/login');
    }
}