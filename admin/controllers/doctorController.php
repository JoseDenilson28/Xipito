<?php
session_start();
require_once __DIR__ . "/../../app/config/config.php";
require_once APP_PATH . "config/database.php";
require_once ADMIN_MODEL_PATH . "doctor.php";

$db = new Database();
$conn = $db->getConnection();
$doctorModel = new Doctor($conn);

$action = $_GET['action'] ?? '';

// Checar sessão para AJAX
$isAjax = in_array($action, ['get', 'update']);

if (!isset($_SESSION['admin'])) {
    if($isAjax){
        echo json_encode(['status'=>'error','message'=>'Sessão expirada, faça login novamente']);
        exit;
    } else {
        header("Location: " . ADMIN_URL . "views/login.php");
        exit;
    }
}

// GET doctor by ID
if($action === 'get' && isset($_GET['id'])){
    $id = intval($_GET['id']);
    $stmt = $doctorModel->getById($id);
    $doctor = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($doctor);
    exit;
}

// UPDATE doctor via AJAX
if($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST'){
    $doctorModel->id = $_POST['id'];
    $doctorModel->nome = $_POST['nome'];
    $doctorModel->numero = $_POST['numero'];
    $doctorModel->email = $_POST['email'];
    $doctorModel->data_nascimento = $_POST['data_nascimento'];
    $doctorModel->genero = $_POST['genero'];
    $doctorModel->endereco = $_POST['endereco'];
    $doctorModel->senha = $_POST['senha'] ?? ''; // só atualiza se vier preenchida

    if($doctorModel->update()){
        echo json_encode(['status'=>'success','message'=>'Doutor atualizado com sucesso!']);
    } else {
        echo json_encode(['status'=>'error','message'=>'Erro ao atualizar doutor']);
    }
    exit;
}

// DELETE doctor via AJAX
if ($action === 'delete' && isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    if ($doctorModel->delete($id)) {
        echo json_encode([
            "status"  => "success",
            "message" => "Doutor removido com sucesso!"
        ]);
    } else {
        echo json_encode([
            "status"  => "error",
            "message" => "Erro ao remover doutor"
        ]);
    }
    exit;
}


// POST create doctor (form cadastro)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doctorModel->nome   = $_POST['nome'] ?? null;
    $doctorModel->numero = $_POST['numero'] ?? null;
    $doctorModel->email  = $_POST['email'] ?? null;
    $doctorModel->genero = $_POST['genero'] ?? null;
    $doctorModel->endereco = $_POST['endereco'] ?? null;
    $doctorModel->data_nascimento = $_POST['data'] ?? null;
    $doctorModel->senha  = $_POST['senha'] ?? null;

    if ($doctorModel->create()) {
        $_SESSION['flash'] = [
            'type' => 'success',
            'msg'  => 'Doutor cadastrado com sucesso!'
        ];
    } else {
        $_SESSION['flash'] = [
            'type' => 'error',
            'msg'  => 'Erro ao cadastrar (e-mail já existe ou falha no banco).'
        ];
    }

    header("Location: " . ADMIN_VIEW_URL . "cadastroDouctor.php");
    exit;
}
