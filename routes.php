<?php

require_once 'controllers/ProductController.php';
require_once 'controllers/GroupController.php';

$productController = new ProductController($db);
$groupController = new GroupController($db);
$action = $_GET['action'] ?? null;
$groupAction = $_GET['group_action'] ?? null;

if ($groupAction) {
    switch ($groupAction) {
        case 'index':
            $groupController->index();
            break;
        case 'create':
            $groupController->create();
            break;
        case 'store':
            $groupController->store();
            break;
        case 'edit':
            $groupController->edit($_GET['id']);
            break;
        case 'update':
            $groupController->update($_GET['id']);
            break;
        case 'delete':
            $groupController->delete($_GET['id']);
            break;
    }
    exit;
}

switch ($action) {
    case 'index':
    default:
        $productController->index();
        break;
    case 'create':
        $productController->create();
        break;
    case 'store':
        $productController->store();
        break;
    case 'edit':
        $productController->edit($_GET['id']);
        break;
    case 'update':
        $productController->update($_GET['id']);
        break;
    case 'delete':
        $productController->delete($_GET['id']);
        break;
}