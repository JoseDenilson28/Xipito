<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/../../app/config/config.php";
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
    <title>login</title>
    <style>
      .swal2-container {
        z-index: 99999 !important;
      }
    </style>
  </head>

  <body id="body">
      <?php if (isset($_SESSION['flash'])): ?>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          Swal.fire({
            icon: '<?= $_SESSION['flash']['type'] ?>',
            title: '<?= $_SESSION['flash']['type'] === "success" ? "Sucesso!" : "Erro!" ?>',
            text: '<?= $_SESSION['flash']['msg'] ?>',
            confirmButtonText: 'Ok'
          }).then((result) => {
            <?php if (!empty($_SESSION['flash']['redirect'])): ?>
              if (result.isConfirmed) {
                window.location.href = "<?= $_SESSION['flash']['redirect'] ?>";
              }
            <?php endif; ?>
          });
        });
      </script>
      <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <main class="login-cont">
      
      <div class="login-itens">
        <img
          style="
            width: 100px;
            height: 100px;
            top: 10px;
            left: 10px;
            position: absolute;
          "
          src="<?= BASE_URL ?>public/icons/xipindo11.png"
          alt="logo"
        />
        <h1>login do Admin</h1>

        <form action="<?= ADMIN_URL ?>index.php?action=login" method="POST" class="login-form">
          <div class="form-itens">
            <label for="email">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height=""
                viewBox="0 -960 960 960"
                width=""
                fill="currentColor"
              >
                <path
                  d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"
                />
              </svg>
            </label>
            <input type="email" id="email" name="email" placeholder="seu email" />
          </div>

          <div class="form-itens">
            <label for="senha">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height=""
                viewBox="0 -960 960 960"
                width=""
                fill="currentColor"
              >
                <path
                  d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"
                />
              </svg>
            </label>
            <input
              type="password"
              id="senha"
              name="senha"
              placeholder="palavra passe"
            />
          </div>

          <div class="form-itens">
            <label for="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width=""
                height=""
                fill="currentColor"
                class="bi bi-house"
                viewBox="0 0 16 16"
              >
                <path
                  fill=""
                  d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"
                />
              </svg>
            </label>
            <button id="button" name="button" class="botao">login</button>
          </div>
        </form>
        <a href="">Esquece minha senha</a>
      </div>
    </main>
  </body>
</html>
