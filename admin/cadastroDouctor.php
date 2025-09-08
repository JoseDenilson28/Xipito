<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/style.css" />
    <link
      rel="shortcut icon"
      href="../public/icons/xipindo11.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../public/css/views/auth.css" />
    <title>Cadastro Douctor</title>
  </head>

  <body id="cadastro">
    <main class="login-cont">
      <a class="voltar-index" href="javascript:history.back()">voltar</a>
      <div class="login-itens">
        <img src="../public/icons/xipindo11.png" alt="logo" />
        <h1>Cadastro de Douctor</h1>
        <form action="../home/index.php" class="login-form">
          <div class="form-itens">
            <input type="text" id="nome" name="nome" placeholder="seu nome" />
          </div>

          <div class="form-itens grid">
            <input
              type="number"
              id="numero"
              name="numero"
              placeholder="numero de telefone"
            />
            <input type="email" id="email" name="email" placeholder="E-mail" />
          </div>

          <div class="form-itens">
            <label for="data">data de nascimento</label>
            <input
              type="date"
              id="data"
              name="data"
              placeholder="data de nascimento"
            />
          </div>

          <div class="form-itens">
            <label for="endereco">senha</label>
            <input
              type="password"
              id="senha"
              name="senha"
              placeholder="**********"
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
