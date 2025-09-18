<?php
session_start();

require_once __DIR__ . "/../app/config/config.php";
require_once __DIR__ . "/../app/config/database.php";
require_once __DIR__ . "/controllers/adminController.php";

$action = $_GET['action'] ?? 'login'; // default é login

$controller = new AdminController();

switch ($action) {
    case 'login':
        $controller->login();
        break;

    case 'cadastro':
        $controller->cadastrar();
        break;

    case 'logout':
        $controller->logout();
        break;

    case 'dash':
        include __DIR__ . "/views/dash.php";
        break;

    default:
        include __DIR__ . "/views/login.php";
}
