

<?php 


session_start();

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../functions.php';

use Core\App;
use Core\Container;
use Core\Session;

Session::unflash();

$container = new Container();
App::setContainer($container);

$router = require __DIR__ . '/../routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST' && isset($_POST['_method'])) {
    $method = strtoupper($_POST['_method']);
}

try {
    $router->route($uri, $method);
} catch (Exception $e) {
    
    http_response_code(404);
    echo "Page not found";
}