<?php


require_once 'system/Router.php';
require_once 'system/Request.php';
require_once 'system/Response.php';
require_once 'system/Validator.php';
require_once 'system/CSRFToken.php';
require_once 'controllers/WelcomeController.php';
require_once 'controllers/MathController.php';

use App\Controllers\MathController;
use App\Controllers\WelcomeController;
use App\Request;
use App\Response;
use App\Router;

$router = new Router();


$router->get('/greet', [WelcomeController::class, 'greet']);
$router->get('/csrf-token', [WelcomeController::class, 'getCSRFToken']);
$router->post('/add', [MathController::class, 'add']);

$request = new Request();
try {
    $response = $router->resolve($request);
} catch (Throwable $e) {

    $response = new Response("Internal Server Error", 500);
}

$response->send();