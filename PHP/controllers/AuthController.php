<?php

namespace Controllers;

use Core\Session;
use Core\Validator;
use Core\Response;

class AuthController
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        $errors = [];

        if (!isset($_POST['email']) || !Validator::email($_POST['email'])) {
            $errors['email'] = 'Please provide a valid email.';
        }

        if (!isset($_POST['password']) || !Validator::string($_POST['password'], 7, 255)) {
            $errors['password'] = 'Password must be at least 7 characters.';
        }

        if (!empty($errors)) {
            return view('register', [
                'errors' => $errors
            ]);
        }

        Session::put('user', [
            'email' => $_POST['email']
        ]);

        Response::redirect('/');
    }

     public function showLoginForm()
    {
        return view('login');
    }

    
    public function login()
    {
        $errors = [];

        if (!isset($_POST['email']) || !Validator::email($_POST['email'])) {
            $errors['email'] = 'Please provide a valid email.';
        }

        if (!isset($_POST['password']) || !Validator::string($_POST['password'], 7, 255)) {
            $errors['password'] = 'Password must be at least 7 characters.';
        }

        if (!empty($errors)) {
            return view('login', ['errors' => $errors]);
        }

        Session::put('user', ['email' => $_POST['email']]);
        Response::redirect('/');
    }

   
    public function logout()
    {
        Session::destroy();
        Response::redirect('/login');
    }

}
