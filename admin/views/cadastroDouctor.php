<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/../../app/config/config.php";

// Verifica se admin está logado
if (!isset($_SESSION['admin'])) {
    header("Location: " . ADMIN_URL . "views/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="<?= BASE_URL ?>public/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css" />
    <link
      rel="shortcut icon"
      href="<?= BASE_URL ?>public/icons/xipindo11.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/views/auth.css" />
    <title>Cadastro Douctor</title>
     <style>
      /* Garante que o SweetAlert fica acima de tudo */
      .swal2-container {
        z-index: 99999 !important;
      }
    </style>
  </head>

  <body id="cadastro">

    <?php if (isset($_SESSION['flash'])): ?>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          Swal.fire({
            icon: '<?= $_SESSION['flash']['type'] ?>',
            title: '<?= $_SESSION['flash']['type'] === "success" ? "Sucesso!" : "Erro!" ?>',
            text: '<?= $_SESSION['flash']['msg'] ?>',
            confirmButtonText: 'Ok'
          });
        });
      </script>
      <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <main class="login-cont">
      <a class="voltar-index" href="<?= ADMIN_URL ?>index.php?action=dash">voltar</a>
      <div class="login-itens">
        <img src="<?= BASE_URL ?>public/icons/xipindo11.png" alt="logo" />
        <h1>Cadastro de Douctor</h1>
        <form action="<?= ADMIN_URL ?>controllers/doctorController.php?action=store" method="POST" class="login-form">
          <div class="form-itens">
            <input type="text" id="nome" name="nome" placeholder="Seu nome" />
          </div>

          <div class="form-itens grid">
            <input
              type="number"
              id="numero"
              name="numero"
              placeholder="Número de telefone"
            />
            <input type="email" id="email" name="email" placeholder="E-mail" />
          </div>

          <div class="form-itens grid">
            <select name="genero" id="genero">
              <option value="">Selecione o gênero</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
              <option value="outro">Outro</option>
            </select>

            <input type="address" id="endereco" name="endereco" placeholder="Seu endereço" />
          </div>

          <div class="form-itens">
            <label for="data">Data de nascimento</label>
            <input
              type="date"
              id="data"
              name="data"
              placeholder="Data de nascimento"
            />
          </div>

          <div class="form-itens">
            <label for="senha">Senha</label>
            <input
              type="password"
              id="senha"
              name="senha"
              placeholder="**********"
            />
          </div>

          <div class="form-itens">
            <button id="button" name="button" class="botao">Cadastrar</button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
