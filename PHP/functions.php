<?php 

function base_path($path = '') {
    return __DIR__ . '/' . ltrim($path, '/');
}

function view($name, $attributes = []) {
    extract($attributes);
    
    ob_start();
    require base_path("views/" . rtrim($name, '.php') . ".php");
    $content = ob_get_clean();
    
    require base_path("views/layout.php");
}

function redirect($path) {
    
    if (ob_get_level()) {
        ob_end_clean();
    }
    
  
    if (!headers_sent()) {
        header("Location: $path");
        exit();
    } else {
        
        echo "<script>window.location.href = '$path';</script>";
        exit();
    }
}

function app() {
    return \Core\Container::getInstance();
}