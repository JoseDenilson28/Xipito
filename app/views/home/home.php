<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/style.css" />
    <link
      rel="stylesheet"
      href="../../../public/css/global/header-home.css"
    />
    <link
      rel="stylesheet"
      href="../../../public/css/global/header-home.css"
    />
    <link
      rel="shortcut icon"
      href="../../../public/icons/xipindo11.png"
      type="image/x-icon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
  </head>
  <body>
    <?php include __DIR__ . "/../partials/header.php"; ?>
    

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
    <?php include __DIR__ . "/../partials/footer.php"; ?>
  </body>
</html>
