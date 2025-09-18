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
    <title>Cadastro Admin</title>
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
        <h1>Cadastro de Admin</h1>

        <form action="<?= ADMIN_URL ?>index.php?action=cadastro" method="POST" class="login-form">
          <div class="form-itens">
            <input type="text" id="nome" name="nome" placeholder="seu nome" required />
          </div>

          <div class="form-itens grid">
            <input
              type="number"
              id="numero"
              name="numero"
              placeholder="numero de telefone"
              required
            />
            <input type="email" id="email" name="email" placeholder="E-mail" required />
          </div>

          <div class="form-itens">
            <label for="endereco">senha</label>
            <input
              type="password"
              id="senha"
              name="senha"
              placeholder="**********"
              required
            />
          </div>

          <div class="form-itens">
            <button id="button" name="button" class="botao">cadastrar</button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
