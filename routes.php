<?php

require_once 'controllers/ProductController.php';
require_once 'controllers/GroupController.php';

$routes = [
    'product' => ProductController::class,
    'group' => GroupController::class,
];

$controllerKey = $_GET['controller'] ?? 'product';
$method = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if (!array_key_exists($controllerKey, $routes)) {
    http_response_code(404);
    exit("Помилка: контролер '$controllerKey' не знайдено.");
}

$controllerClass = $routes[$controllerKey];
$controller = new $controllerClass($db);

if (!method_exists($controller, $method)) {
    http_response_code(404);
    exit("Помилка: метод '$method' не знайдено.");
}

$id !== null ? $controller->$method($id) : $controller->$method();