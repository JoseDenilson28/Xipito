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
    
    <section class="painel-consulta box-min">
      <h1>filtrar</h1>
      <ul class="PC-filter">
        <li
          id="todas"
          onclick="adicionarClasse('todas','Showtodas')"
          class="active"
        >
          todas
        </li>
        <li
          id="realizadas"
          onclick="adicionarClasse('realizadas','Showrealizadas')"
        >
          realizadas
        </li>
        <li
          id="andamento"
          onclick="adicionarClasse('andamento','Showandamento')"
        >
          em andamento
        </li>
      </ul>
    </section>

    <div id="consultas" class="consultas box">
      <div class="consultas-on">
        <h1>painel de consultas</h1>
        <ul class="consultas-list">
          <li class="consultas-person on">
            <ul class="person">
              <li>data <span>13/06 - 13:10</span></li>
              <li>nome <span>João silva</span></li>
              <li>tipo <span>presencial</span></li>
              <li>estado <span>feito</span></li>
              <li class="botoes">
                <button class="ver-detalhe">detalhes</button>
              </li>
            </ul>
            <ul class="detalhes-cont DcON">
              <div class="detalhes">
                <span class="closed botao">X</span>
                <div class="DadosPessoais">
                  <li class="Dpessoais">nome: <span>Adks</span></li>
                  <li class="Dpessoais">
                    data de Nascimento: <span>11.11.1998</span>
                  </li>
                  <li class="Dpessoais">telefone: <span>987654321</span></li>
                  <li class="Dpessoais">sexo: <span>masculino</span></li>
                </div>

                <div class="DadosMedicos">
                  <p>
                    motivo da consulta:
                    <span>jhsbas sjh sjhhja ciaxnqa assnasknj </span>
                  </p>
                  <p>
                    início sintomas :<span>hoje por volta das 14h 30m</span>
                  </p>
                  <p>intensidade dos sintomas: <span>moderado</span></p>
                </div>

                <form action="">
                  <label for="consultar">diagnóstico</label>
                  <p>
                    ahss sasbha id sdwe qe wfqeweq qasa wqw a wqwndklj qwqw
                    dqwjn wqkwqbqk
                  </p>
                  <button class="botao">finalizado</button>
                </form>
              </div>
            </ul>
          </li>

          <li class="consultas-person on">
            <ul class="person">
              <li>data <span>13/06 - 13:10</span></li>
              <li>nome <span>João silva</span></li>
              <li>tipo <span>presencial</span></li>
              <li>estado <span>feito</span></li>
              <li class="botoes">
                <button class="ver-detalhe">detalhes</button>
              </li>
            </ul>
            <ul class="detalhes-cont DcON">
              <div class="detalhes">
                <span class="closed botao">X</span>
                <div class="DadosPessoais">
                  <li class="Dpessoais">nome: <span>Adks</span></li>
                  <li class="Dpessoais">
                    data de Nascimento: <span>11.11.1998</span>
                  </li>
                  <li class="Dpessoais">telefone: <span>987654321</span></li>
                  <li class="Dpessoais">sexo: <span>masculino</span></li>
                </div>

                <div class="DadosMedicos">
                  <p>
                    motivo da consulta:
                    <span>jhsbas sjh sjhhja ciaxnqa assnasknj </span>
                  </p>
                  <p>
                    início sintomas :<span>hoje por volta das 14h 30m</span>
                  </p>
                  <p>intensidade dos sintomas: <span>moderado</span></p>
                </div>

                <form action="">
                  <label for="consultar">diagnóstico</label>
                  <p>
                    ahss sasbha id sdwe qe wfqeweq qasa wqw a wqwndklj qwqw
                    dqwjn wqkwqbqk
                  </p>
                  <button class="botao">finalizado</button>
                </form>
              </div>
            </ul>
          </li>

          <li class="consultas-person off">
            <ul class="person">
              <li>data <span>13/06 - 13:10</span></li>
              <li>nome <span>João silva</span></li>
              <li>tipo <span>presencial</span></li>
              <li>estado <span>em andamento</span></li>
              <li class="botoes">
                <button class="finaliza">finalizar</button>
              </li>
            </ul>
            <ul class="detalhes-cont DcOff">
              <div class="detalhes">
                <span class="closed cOff botao">X</span>
                <div class="DadosPessoais">
                  <li class="Dpessoais">nome: <span>Adks</span></li>
                  <li class="Dpessoais">
                    data de Nascimento: <span>11.11.1998</span>
                  </li>
                  <li class="Dpessoais">telefone: <span>987654321</span></li>
                  <li class="Dpessoais">sexo: <span>masculino</span></li>
                </div>

                <div class="DadosMedicos">
                  <p>
                    motivo da consulta:
                    <span>jhsbas sjh sjhhja ciaxnqa assnasknj </span>
                  </p>
                  <p>
                    início sintomas :<span>hoje por volta das 14h 30m</span>
                  </p>
                  <p>intensidade dos sintomas: <span>moderado</span></p>
                </div>

                <form action="">
                  <label for="consultar">dar diagnóstico</label>
                  <textarea name="" id="consultar"></textarea>
                  <button class="botao">finalizar</button>
                </form>
              </div>
            </ul>
          </li>

          <li class="consultas-person off">
            <ul class="person">
              <li>data <span>13/06 - 13:10</span></li>
              <li>nome <span>João silva</span></li>
              <li>tipo <span>presencial</span></li>
              <li>estado <span>em andamento</span></li>
              <li class="botoes">
                <button class="finaliza">finalizar</button>
              </li>
            </ul>

            <ul class="detalhes-cont DcOff">
              <div class="detalhes">
                <span class="closed cOff botao">X</span>
                <div class="DadosPessoais">
                  <li class="Dpessoais">nome: <span>Adks</span></li>
                  <li class="Dpessoais">
                    data de Nascimento: <span>11.11.1998</span>
                  </li>
                  <li class="Dpessoais">telefone: <span>987654321</span></li>
                  <li class="Dpessoais">sexo: <span>femenino</span></li>
                </div>

                <div class="DadosMedicos">
                  <p>
                    motivo da consulta:
                    <span>jhsbas sjh sjhhja ciaxnqa assnasknj </span>
                  </p>
                  <p>
                    início sintomas :<span>hoje por volta das 14h 30m</span>
                  </p>
                  <p>intensidade dos sintomas: <span>moderado</span></p>
                </div>

                <form action="">
                  <label for="consultar">dar diagnóstico</label>
                  <textarea name="" id="consultar"></textarea>
                  <button class="botao">finalizar</button>
                </form>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <?php include __DIR__ . "/../partials/footer.php"; ?>
  </body>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const consultasAria = document.querySelectorAll(".consultas-person.off");

      consultasAria.forEach(function (area) {
        const detalhesCont = area.querySelector(".DcOff");
        const finalizaOpen = area.querySelector(".finaliza");
        const closedPub = area.querySelector(".cOff");

        finalizaOpen.addEventListener("click", function () {
          document.body.classList.add("no-scroll");
          detalhesCont.classList.add("show");

          finalizaOpen.addEventListener("click", function (event) {
            document.body.classList.add("no-scroll");
            detalhesCont.classList.add("show");
            finalizaOpen.removeEventListener("click", arguments.callee);
          });
        });

        closedPub.addEventListener("click", function () {
          document.body.classList.remove("no-scroll");
          detalhesCont.classList.remove("show");
        });

        detalhesCont.addEventListener("click", function (event) {
          if (!event.target.closest(".botaoOpções")) {
            document.body.classList.remove("no-scroll");
          }
        });
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const consultasAria = document.querySelectorAll(".consultas-person.on");

      consultasAria.forEach(function (area) {
        const detalhesContON = area.querySelector(".DcON");
        const verDetalhe = area.querySelector(".ver-detalhe");
        const closedPub = area.querySelector(".closed");

        verDetalhe.addEventListener("click", function () {
          document.body.classList.add("no-scroll");
          detalhesContON.classList.add("show");

          verDetalhe.addEventListener("click", function (event) {
            document.body.classList.add("no-scroll");
            detalhesContON.classList.add("show");
            finalizaOpen.removeEventListener("click", arguments.callee);
          });
        });

        closedPub.addEventListener("click", function () {
          document.body.classList.remove("no-scroll");
          detalhesContON.classList.remove("show");
        });

        detalhesContON.addEventListener("click", function (event) {
          if (!event.target.closest(".botaoOpções")) {
            document.body.classList.remove("no-scroll");
          }
        });
      });
    });
  </script>

  <script>
    function adicionarClasse(elementId, contactClass) {
      // Remove a classe "local" de todos os elementos
      let elementos = document.querySelectorAll(".PC-filter li");
      elementos.forEach((elemento) => {
        elemento.classList.remove("active");
      });

      // Adiciona a classe "local" ao elemento clicado
      document.getElementById(elementId).classList.add("active");

      // Adiciona a classe "showSeguindo" ou "showSeguidores" ao elemento "#contactos"
      let contactos = document.getElementById("consultas");
      contactos.classList.remove(
        "Showtodas",
        "Showrealizadas",
        "Showandamento"
      ); // Remove ambas as classes
      contactos.classList.add(contactClass); // Adiciona a classe necessária
    }
  </script>
</html>
