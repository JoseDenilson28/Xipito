<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/global/header-home.css" />
    <link
      rel="shortcut icon"
      href="../icons/xipindo11.png"
      type="image/x-icon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
  </head>
  <body>
    <header id="header">
      <div class="header-bg box-max">
        <a href="#body"
          ><img src="../icons/xipindo11.png" alt="logo" class="logo-X"
        /></a>

        <form id="form-pesquisa" action="">
          <label for="pesquisas">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width=""
              height=""
              fill="currentColor"
              class="bi bi-search"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
              />
            </svg>
          </label>
          <input
            type="search"
            name="pesquisas"
            id="pesquisas"
            placeholder="pesquise..."
          />
        </form>

        <nav>
          <ul class="header-menu">
            <li><a href="#servicos">cadastros</a></li>
            <li><a href="#departamentos">agendamentos</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <br /><br /><br /><br /><br /><br /><br /><br />

    <section class="dash box-min">
      <h1>seja bem-vindo(a), <b>Dr. Hicaro Dedlo</b></h1>

      <p>consultas feitas pelo Dr. Hicaro <strong>2</strong></p>
    </section>

    <main class="main-bg">
      <div class="consultas-marcadas box-max">
        <h1>
          consultas marcadas
          <p>
            "continue se esforçando para um mundo melhor. tenha um bom dia de
            trabalho, douctor"
          </p>
        </h1>
        <ul class="consultas-marcadas-list">
          <li>
            <p>paciente:<span>Martins Alvés</span></p>

            <p>data:<span> 2025-01-20</span></p>

            <p>motivo:<span>dor de cabeça</span></p>
            <div>
              <button class="botao-d">receita</button>
              <button class="botao">concluido</button>
            </div>
          </li>

          <li>
            <p>paciente:<span>Martins Alvés</span></p>

            <p>data:<span> 2025-01-20</span></p>

            <p>motivo:<span>dor de cabeça</span></p>
            <div>
              <button class="botao-d">receita</button>
              <button class="botao">concluido</button>
            </div>
          </li>
        </ul>
      </div>
    </main>
  </body>
</html>
