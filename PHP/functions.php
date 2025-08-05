<?php

function base_path($path = '') {
    return __DIR__ . '/' . $path;
}

function view($name, $attributes = [])
{
    extract($attributes);

    ob_start();
    require base_path("views/{$name}.php");
    $content = ob_get_clean();

    require base_path("views/layout.php");
}

function redirect($path)
{
    header("Location: {$path}");
    exit();
}
function app() {
    return \Core\Container::getInstance();
}