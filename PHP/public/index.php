
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../functions.php';
require __DIR__ . '/../routes.php';


use Core\App;
use Core\Container;
use Core\Session;

Session::start();

$container = new Container();

App::setContainer($container);
$router = require __DIR__ . '/../routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);

