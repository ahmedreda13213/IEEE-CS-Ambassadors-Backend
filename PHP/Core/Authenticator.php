<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $users = json_decode(file_get_contents(base_path('database/users.json')), true);
        
        foreach ($users as $user) {
            if ($user['email'] === $email && password_verify($password, $user['password'])) {
                $_SESSION['user'] = [
                    'email' => $email
                ];
                return true;
            }
        }

        return false;
    }

    public function logout()
    {
        Session::destroy();
    }

    public function user()
    {
        return $_SESSION['user'] ?? null;
    }

    public function check()
    {
        return isset($_SESSION['user']);
    }

    public function guest()
    {
        return ! $this->check();
    }
}
