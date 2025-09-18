<?php
require_once __DIR__ . "/../../app/config/config.php";
require_once APP_PATH . "config/database.php";
require_once ADMIN_MODEL_PATH . "Admin.php";

class AdminController {
    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $database = new Database();
            $db = $database->getConnection();

            $admin = new Admin($db);
            $admin->nome   = $_POST['nome'];
            $admin->numero = $_POST['numero'];
            $admin->email  = $_POST['email'];
            $admin->senha  = $_POST['senha'];

            if ($admin->create()) {
                $_SESSION['flash'] = [
                    'type' => 'success',
                    'msg'  => 'Cadastrado com sucesso!'
                ];
                header("Location: " . ADMIN_VIEW_URL . "cadastroAdmin.php");
                exit;
            } else {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'msg'  => 'Erro ao cadastrar (e-mail já existe ou falha no banco).'
                ];
                header("Location: " . ADMIN_VIEW_URL . "cadastroAdmin.php");
                exit;
            }
        } else {
            loadAdminView("cadastroAdmin.php");
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $database = new Database();
            $db = $database->getConnection();

            $admin = new Admin($db);
            $admin->email = $_POST['email'];
            $admin->senha = $_POST['senha'];

            $user = $admin->login();

            if ($user) {
                $_SESSION['admin'] = $user['nome'];

                // Flash só para feedback
                $_SESSION['flash'] = [
                    'type' => 'success',
                    'msg'  => 'Login efetuado com sucesso!'
                ];

                // Redireciona corretamente para o dashboard
                header("Location: " . ADMIN_URL . "index.php?action=dash");
                exit;
            } else {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'msg'  => 'E-mail ou senha inválidos'
                ];
                header("Location: " . ADMIN_VIEW_URL . "login.php");
                exit;
            }
        } else {
            loadAdminView("login.php");
        }
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // remove apenas a sessão do admin atual
        unset($_SESSION['admin']); 

        header("Location: " . ADMIN_URL . "index.php?action=login");
        exit;
    }
}
