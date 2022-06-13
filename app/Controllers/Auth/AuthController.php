<?php

namespace App\Controllers\Auth;

use App\Classes\Redirect;
use App\Classes\Request;
use App\Classes\Session;
use App\Classes\ValidateRequest;
use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    public function registerAction()
    {
        if(Request::has('post')) {
            $request = Request::get('post');
            $rules = [
                'firstName' => ['required' => true, 'maxLength' => 20, 'string' => true],
                'lastName' => ['required' => true, 'maxLength' => 20, 'string' => true],
                'email' => ['required' => true, 'email' => true],
                'password' => ['required' => true, 'minLength' => 6],
            ];
            $validate = new ValidateRequest;
            $validate->abide($_POST, $rules);

            if($validate->hasError()){
                $errors = $validate->getErrorMessages();
                return view('auth/register', ['errors' => $errors]);

            }else {
                User::create([
                    'firstName' => $request->firstName,
                    'lastName' => $request->lastName,
                    'email' => $request->email,
                    'password' => password_hash($request->password, PASSWORD_BCRYPT),
                ]);
                Request::refresh();
                return view('auth/register', ['success' => 'Account created, please login']);
            }
        }

        return view('auth/register');
    }

    public function loginAction()
    {
        if(Request::has('post')) {
            $request = Request::get('post');
            $rules = [
                'email' => ['required' => true],
                'password' => ['required' => true],
            ];
            $validate = new ValidateRequest;
            $validate->abide($_POST, $rules);

            if ($validate->hasError()) {
                $errors = $validate->getErrorMessages();
                return view('auth/login', ['errors' => $errors]);
            }

            /**
             * Check if user exist in db
             */
            $user = User::where('email', $request->email)->first();

            if ($user) {
                if (!password_verify($request->password, $user->password)) {
                    Session::add('error', 'Incorrect password');
                    return view('auth/login');
                } else {
                    Session::add('SESSION_USER_ID', $user->id);
                    Session::add('SESSION_EMAIL', $user->email);
                    Redirect::to('/');
                }
            } else {
                Session::add('error', 'User not found, please try again');
                return view('auth/login');
            }
        }
        return view('auth/login');
    }

    public function logoutAction()
    {
        if(isAuthenticated()){
            Session::remove('SESSION_USER_ID');
            Session::remove('SESSION_EMAIL');
        }
        Redirect::to('/');
    }
}