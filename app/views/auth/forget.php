<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css" />
    <link
      rel="shortcut icon"
      href="<?= BASE_URL ?>public/icons/xipindo11.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/views/auth.css" />
    <title>Recuperar senha</title>
  </head>

  <body id="cadastro">
    <main class="login-cont">
      <a class="voltar-index" href="javascript:history.back()">voltar</a>
      <div class="login-itens">
        <img src="<?= BASE_URL ?>public/icons/xipindo11.png" alt="logo" />
        <h1>Recuperar senha</h1>
        <form action="reset_password.php" class="login-form">
          <div class="form-itens">
            <input type="text" id="email" name="email" placeholder="Seu email" />
          </div>

         

          <div class="form-itens">
            <button id="button" name="button" class="botao">Enviar Token de recuperação</button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
