<?php

namespace Core;

class Middleware {
    public static function resolve($key)
    {
        $middleware = [
            'auth' => \Middleware\AuthMiddleware::class,
            'guest' => \Middleware\GuestMiddleware::class
        ];

        if (!array_key_exists($key, $middleware)) {
            throw new \Exception("No middleware found for key: $key");
        }

        app()->resolve($middleware[$key])::handle();
    }
}
