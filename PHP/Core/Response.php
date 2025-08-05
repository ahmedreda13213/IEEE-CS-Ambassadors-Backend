<?php

namespace Core;

class Response {
    public static function redirect($path)
    {
        header("Location: $path");
        exit;
    }
}
