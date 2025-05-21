<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <link
      rel="shortcut icon"
      href="../../../public/assets/icons/xipindo11.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../../../public/assets/css/auth.css">
    <title>login</title>
  </head>

  <body id="body">
    <main class="login-cont">
      <a class="voltar-index" href="../../../public/index.php">voltar</a>
      <div class="login-itens">
        <img src="../../../public/assets/icons/xipindo11.png" alt="logo" />
        <h1>login de usuário</h1>
        <form action="../home/home.php" class="login-form">
          <div class="form-itens">
            <label for="nome">
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
            <input type="text" id="nome" name="nome" placeholder="seu nome" />
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
