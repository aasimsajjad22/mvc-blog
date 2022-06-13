<?php

namespace App\Controllers\Auth;

use App\Classes\Request;
use App\Models\Register;

class AuthController
{
    public function registerAction(Request $request)
    {
        $registerModel = new Register();

        if($request->isPost()) {
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {
                echo 'SUCCESS';
            }

            return view('auth/register', [
                'register' => $registerModel
            ]);
        }

        return view('auth/register', ['register' => $registerModel]);
    }

    public function loginAction()
    {
        return view('auth/login');
    }
}