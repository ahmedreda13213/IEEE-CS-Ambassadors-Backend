<?php

namespace Middleware;

use Core\Session;
use Core\Response;

class GuestMiddleware
{
    public static function handle()
    {
        if (Session::has('user')) {
            Response::redirect('/');
        }
    }
}
