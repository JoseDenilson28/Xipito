<?php
require_once __DIR__ . '/../models/Anamnese.php';

class AnamneseController 
{
    public function enviar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'nome_completo'      => $_POST['nomeCompleto'] ?? '',
                'data_nascimento'    => $_POST['data-nascimento'] ?? '',
                'telefone'           => $_POST['telefone'] ?? '',
                'sexo'               => $_POST['sexo'] ?? '',
                'motivo'             => $_POST['motivo'] ?? '',
                'inicio_sintomas'    => $_POST['inicio-sintomas'] ?? '',
                'intensidade'        => $_POST['intensidade'] ?? '',
                'doenca_cronica'     => $_POST['Possuidoenca'] ?? '',
                'cirurgia'           => $_POST['cirurgia'] ?? '',
                'detalhes_cirurgia'  => $_POST['detalhes-cirurgia'] ?? '',
                'consentimento'      => isset($_POST['consentimento']) ? 1 : 0
            ];

            $anamnese = new Anamnese();
            $resultado = $anamnese->salvar($dados);

            if ($resultado) {
                return [
                    'status' => 'success',
                    'message' => 'Anamnese enviada com sucesso.'
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Erro ao salvar no banco de dados.'
                ];
            }
        } else {
            return [
                'status' => 'error',
                'message' => 'Requisição inválida.'
            ];
        }
    }
}
?>