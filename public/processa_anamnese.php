<?php
require_once __DIR__ . '/../app/controllers/AnamneseController.php';

header('Content-Type: application/json');

$controller = new AnamneseController();
echo json_encode($controller->enviar());

?>