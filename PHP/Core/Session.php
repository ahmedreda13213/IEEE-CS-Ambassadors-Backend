<?php

namespace Core;

class Session
{
    public static function start()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function put($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }

    public static function forget($key)
    {
        unset($_SESSION[$key]);
    }

    public static function destroy()
    {
        $_SESSION = [];
        session_destroy();
    }

    
    public static function flash($key, $value = null)
    {
        if ($value !== null) {
            $_SESSION['_flash'][$key] = $value;
        } else {
            return $_SESSION['_flash'][$key] ?? null;
        }
    }

    public static function hasFlash($key)
    {
        return isset($_SESSION['_flash'][$key]);
    }

    public static function getFlash($key, $default = null)
    {
        return $_SESSION['_flash'][$key] ?? $default;
    }

    public static function unflash()
    {
        unset($_SESSION['_flash']);
        unset($_SESSION['_old']);
    }

   
    public static function old($key, $default = '')
    {
        return $_SESSION['_old'][$key] ?? $default;
    }

    public static function storeOldInput($data)
    {
        $_SESSION['_old'] = $data;
    }

    public static function all()
    {
        return $_SESSION;
    }
}
