<?php
// Defina a URL base do projeto
define("BASE_URL", "/Xipito/");

$request = trim($_SERVER['REQUEST_URI'], '/');

// remove prefixo do projeto (Xipito/) se estiver rodando em subpasta
$base = "Xipito";
if (strpos($request, $base) === 0) {
    $request = substr($request, strlen($base));
}
$request = trim($request, '/');

switch ($request) {
    case '':
    case 'home':
        require __DIR__ . '/public/landing.php';
        break;

    case 'login':
        require __DIR__ . '/app/views/auth/login.php';
        break;

    case 'cadastro':
        require __DIR__ . '/app/views/auth/register.php';
        break;

    default:
        http_response_code(404);
        echo "Página não encontrada!";
        break;
}
