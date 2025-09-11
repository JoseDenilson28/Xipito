<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/style.css" />
    <link
      rel="shortcut icon"
      href="../../../public/icons/xipindo11.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../../../public/css/views/auth.css" />
    <title>Redefinir senha</title>
  </head>

  <body id="cadastro">
    <main class="login-cont">
      <a class="voltar-index" href="javascript:history.back()">voltar</a>
      <div class="login-itens">
        <img src="../../../public/icons/xipindo11.png" alt="logo" />
        <h1>Nova senha</h1>
        <form action="login.php" class="login-form">
          <div class="form-itens">
            <input type="text" id="token" name="token" placeholder="Digite o token" />
          </div>

          <div class="form-itens grid">
            <input
              type="number"
              id="nova_senha"
              name="nova_senha"
              placeholder="Nova senha"
            />
            <input type="email" id="confirmar_senha" name="confirmar_senha" placeholder="Confirmar senha"/>
          </div>


          <div class="form-itens">
            <button id="button" name="button" class="botao">Salvar</button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
