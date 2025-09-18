<?php
// Inicia sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Caminho base físico do projeto
define('BASE_PATH', __DIR__ . '/../../');

// URL base do projeto (ajuste se mudar a pasta/host)
define("BASE_URL", "http://localhost/Xipito/");

// Caminhos físicos principais do app
define('APP_PATH', BASE_PATH . 'app/');
define('VIEW_PATH', APP_PATH . 'views/');
define('MODEL_PATH', APP_PATH . 'models/');
define('CONTROLLER_PATH', APP_PATH . 'controllers/');
define('PUBLIC_PATH', BASE_PATH . 'public/');

// Caminhos físicos principais do módulo admin
define('ADMIN_PATH', BASE_PATH . 'admin/');
define('ADMIN_VIEW_PATH', ADMIN_PATH . 'views/');
define('ADMIN_MODEL_PATH', ADMIN_PATH . 'models/');
define('ADMIN_CONTROLLER_PATH', ADMIN_PATH . 'controllers/');

// URLs específicas para admin
define('ADMIN_URL', BASE_URL . 'admin/');
define('ADMIN_VIEW_URL', ADMIN_URL . 'views/');

// Função auxiliar para carregar views do app
function loadView($view, $data = []) {
    extract($data);
    require VIEW_PATH . $view;
}

// Função auxiliar para carregar views do admin
function loadAdminView($view, $data = []) {
    extract($data);
    require ADMIN_VIEW_PATH . $view;
}
