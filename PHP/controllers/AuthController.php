<?php 
namespace Controllers;

use Core\Validator;
use Core\Session;
use Core\Response;

class AuthController
{

     public function showLoginForm()
    {
        return view("login");
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $errors = [];

        if (!Validator::email($email)) {
            $errors['email'] = 'Please provide a valid email address.';
        }

        if (!Validator::string($password, 7, 255)) {
            $errors['password'] = 'Password must be at least 7 characters.';
        }

        if (!empty($errors)) {
           
            Session::flash('errors', $errors);
            Session::flash('old', ['email' => $email]);

            Response::redirect('/login');
        }

        
        $users = json_decode(file_get_contents('database/users.json'), true);

        $user = null;
        foreach ($users as $u) {
            if ($u['email'] === $email && password_verify($password, $u['password'])) {
                $user = $u;
                break;
            }
        }

        if (!$user) {
            Session::flash('errors', ['login' => 'Email or password incorrect']);
            Session::flash('old', ['email' => $email]);
            Response::redirect('/login');
        }

       
        $_SESSION['user'] = $user;

        Response::redirect('/');
    }
       public function store()
    {
        
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $errors = [];

        if (!Validator::email($email)) {
            $errors['email'] = 'Please provide a valid email.';
        }

        if (!Validator::string($password, 7, 255)) {
            $errors['password'] = 'Password must be at least 7 characters.';
        }

        if (!empty($errors)) {
            
            Session::flash('errors', $errors);
            Session::flash('old', $_POST);
            return Response::redirect('/login');
        }

       
        if ($email === 'admin@example.com' && $password === 'password123') {
            Session::put('user', ['email' => $email]);
            return Response::redirect('/');
        }

        Session::flash('errors', ['email' => 'Invalid credentials.']);
        Session::flash('old', $_POST);
        return Response::redirect('/login');
    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
        Response::redirect('/');
    }
}
