<?php
require_once __DIR__ . '/../core/database.php';

class Anamnese
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function salvar($dados)
    {
        $stmt = $this->conn->prepare("INSERT INTO anamnese (
            nome_completo, data_nascimento, telefone, sexo, motivo,
            inicio_sintomas, intensidade, doenca_cronica, cirurgia,
            detalhes_cirurgia, consentimento
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param(
            'ssssssssssi',
            $dados['nome_completo'],
            $dados['data_nascimento'],
            $dados['telefone'],
            $dados['sexo'],
            $dados['motivo'],
            $dados['inicio_sintomas'],
            $dados['intensidade'],
            $dados['doenca_cronica'],
            $dados['cirurgia'],
            $dados['detalhes_cirurgia'],
            $dados['consentimento']
        );

        return $stmt->execute();
    }
}
?>