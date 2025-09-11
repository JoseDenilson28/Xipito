<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/admin/style.css" />
    <link
      rel="stylesheet"
      href="../public/css/global/header-home.css"
    />
    <link
      rel="stylesheet"
      href="../public/css/global/header-home.css"
    />
    <link
      rel="shortcut icon"
      href="../public/icons/xipindo11.png"
      type="image/x-icon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dashboard</title>
  </head>

  <body id="dashboard">
    <header class="header-dashboard">
      <picture>
        <img
          class="logo-X"
          src="../public/icons/xipindo11.png"
          alt="logo"
          class="logo-X"
        />
      </picture>

      <nav>
        <ul class="header-menu-dash">
          <li class="activ">
            <a href="">dashboard</a>
          </li>
          <li>
            <a href="cadastroAdmin.php">Cadastro Admin</a>
          </li>
          <li>
            <a href="cadastroDouctor.php">Cadastro Douctor</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="mather">
      <div class="header-second">
        <form action="">
          <input type="search" name="" id="" placeholder="pesquise..." />
        </form>
        <ul class="header-second-menu">
          <li>
            <a id="notfic">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height=""
                viewBox="0 -960 960 960"
                width=""
                fill=""
              >
                <path
                  d="M80-560q0-100 44.5-183.5T244-882l47 64q-60 44-95.5 111T160-560H80Zm720 0q0-80-35.5-147T669-818l47-64q75 55 119.5 138.5T880-560h-80ZM160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"
                />
              </svg>
            </a>
          </li>

          <li>
            <img src="../public/img/dash (1).jpg" alt="perfil" />
          </li>
        </ul>

        <ul id="notficUP" class="notfic">
          <span id="notficF">X</span>
          <li><p>2 pacientes forman atendidos</p></li>
          <li><p>foi solicitado um cadastro!</p></li>
          <li><p>Mais de 5 pacientes em espera</p></li>
        </ul>
      </div>

      <div class="dash-board">
        <h1>dashboard</h1>
        <ul class="dash-board-list">
          <li>
            <h2>médicos</h2>
            <span>2</span>
          </li>
          <li>
            <h2>pacientes</h2>
            <span>2</span>
          </li>
          <li>
            <h2>atendimento</h2>
            <span>2</span>
          </li>
        </ul>
      </div>

      <div style="overflow-x: auto; display: flex; width: 100%">
        <table class="tabela-dash">
          <thead>
            <tr>
              <th>nome</th>
              <th>numero</th>
              <th>e-mail</th>
              <th>data</th>
              <th>genero</th>
              <th>endereço</th>
              <th>senha</th>
              <th>opções</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>joão silva</td>
              <td>987654321</td>
              <td>joao@gmail.com</td>
              <td>20.04.1997</td>
              <td>masculiono</td>
              <td>endereço</td>
              <td>12345678</td>
              <td>
                <button class="editar">editar</button>
                <button class="remover">remover</button>
              </td>
            </tr>

            <tr>
              <td>Daniel Cezar</td>
              <td>987654321</td>
              <td>Daniel@gmail.com</td>
              <td>20.10.1987</td>
              <td>masculiono</td>
              <td>endereço</td>
              <td>12345678</td>
              <td>
                <button class="editar">editar</button>
                <button class="remover">remover</button>
              </td>
            </tr>

            <tr>
              <td>silva Miranda</td>
              <td>987654321</td>
              <td>Miranda@gmail.com</td>
              <td>01.10.2000</td>
              <td>femenino</td>
              <td>endereço</td>
              <td>12345678</td>
              <td>
                <button class="editar">editar</button>
                <button class="remover">remover</button>
              </td>
            </tr>

            <tr>
              <td>joão silva</td>
              <td>987654321</td>
              <td>joao@gmail.com</td>
              <td>20.04.1997</td>
              <td>masculiono</td>
              <td>endereço</td>
              <td>12345678</td>
              <td>
                <button class="editar">editar</button>
                <button class="remover">remover</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>

  <script>
    const notficOpen = document.getElementById("notfic");
    const bodyPopUp = document.getElementById("notficUP");
    const notficF = document.getElementById("notficF");

    notficOpen.addEventListener("click", function () {
      bodyPopUp.classList.add("show");
    });
    notficF.addEventListener("click", function () {
      bodyPopUp.classList.remove("show");
    });
  </script>
</html>
