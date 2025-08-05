<?php

namespace Middleware;

use Core\Session;
use Core\Response;

class AuthMiddleware
{
    public static function handle()
    {
        if (!Session::has('user')) {
            Response::redirect('/register');
        }
    }
}
