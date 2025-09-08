<?php
// Inicia sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Caminho base do projeto
define('BASE_PATH', __DIR__ . '/../../');

// Caminhos principais
define('APP_PATH', BASE_PATH . 'app/');
define('VIEW_PATH', APP_PATH . 'views/');
define('MODEL_PATH', APP_PATH . 'models/');
define('CONTROLLER_PATH', APP_PATH . 'controllers/');
define('PUBLIC_PATH', BASE_PATH . 'public/');

// Função auxiliar para carregar views
function loadView($view, $data = []) {
    extract($data);
    require VIEW_PATH . $view;
}
?>