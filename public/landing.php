<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/global/header.css">
    <link
      rel="shortcut icon"
      href="assets/icons/xipindo11.png"
      type="image/x-icon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xipito</title>
  </head>

  <body id="body">
    <div class="back-bg">
      <header id="header">
        <div class="header-bg box-max">
          <a href="#body"><img src="assets/icons/xipindo11.png" alt="logo" class="logo-X" /></a>
          <nav>
            <ul class="header-menu">
              <li><a href="#servicos">serviços</a></li>
              <li><a href="#departamentos">departamentos</a></li>
              <li><a href="#doctores">doctores</a></li>
              <li><a href="#contacto">contactos</a></li>
              <li><a  href="../app/views/auth/login.php"class="login">login</a></li>
            </ul>
          </nav>
        </div>
      </header>

      <main class="main box-min">
        <h1>nos cuidamos de você e sua saúde</h1>
        <p>
          Oferecemos serviços especializados com os melhores profissionais em
          diversas áreas de saúde.
        </p>
        <a class="botao" id="consulta">marcar consulta</a>
      </main>
    </div>

    <article id="servicos" class="box-max">
      <div class="servicos-bg">
        <h1>
          Nossos serviços
          <p>cuidado completo e especializado em diversas áreas de saúde</p>
        </h1>
        <ul class="servicos-list">
          <li
            class="local"
            id="openConsultas"
            onclick="adicionarClasse('openConsultas', 'showConsultas')"
          >
            Consultas
          </li>

          <li
            id="openExames"
            onclick="adicionarClasse('openExames', 'showExames')"
          >
            Exames
          </li>

          <li
            id="openOpiniao"
            onclick="adicionarClasse('openOpiniao','showOpiniao')"
          >
            2º Opinião
          </li>
        </ul>
      </div>

      <ul id="servicos-fornecidos" class="servicos-menu">
        <li class="servico consulta">
          <div class="servico-text">
            <h2>consultas online e presenciais</h2>
            <p>
              agendamento de consultas com especialistas sem sair de casa ou em
              uma de nossas unidades.
            </p>
          </div>

          <ul class="servico-menu">
            <li>agendamento rápidos</li>
            <li>atendimento personalizado</li>
            <li>ideal para acompanhamento médico regular.</li>
            <a href="" class="botao-s">marcar consulta</a>
          </ul>
        </li>

        <li class="servico exames">
          <div class="servico-text">
            <h2>Exames de Diagnóstico</h2>
            <p>
              Realizamos exames laboratoriais e imagem para garantir um
              diagnóstico preciso
            </p>
          </div>

          <ul class="servico-menu">
            <li>hemograma completo, glicose, colesterol, etc.</li>
            <li>ultrassom, raio-X, e mais.</li>
            <li>resultados rápidos e confiáveis.</li>
            <a href="" class="botao-s">saiba mais</a>
          </ul>
        </li>

        <li class="servico opiniao">
          <div class="servico-text">
            <h2>Segunda Opinião Médica</h2>
            <p>
              Conte com nossos especialistas para revisar diagnósticos e
              tratamentos.
            </p>
          </div>

          <ul class="servico-menu">
            <li>revisão de exames e laudos</li>
            <li>Consultas especializada em casos complexos</li>
            <li>Orientação clara e confiavel.</li>
            <a href="" class="botao-s">solicitar Opinião</a>
          </ul>
        </li>
      </ul>
    </article>

    <section id="departamentos" class="box-max">
      <h1>
        Nossos Departamento
        <p>
          especialidade médica com atendimento personalizado para cuidar de você
          e sua família.
        </p>
      </h1>

      <div class="departamento-grid">
        <ul class="departamento-menu">
          <li class="active">Cardiologia</li>
          <li>Clínica Geral</li>
          <li>Pediatria</li>
        </ul>

        <div class="departamentoOver">
          <ul class="departamento slides">
            <li class="slide Cardiologia">
              <div class="departamento-text">
                <h2>Cardiologia</h2>
                <p>
                  Cuidado especializado para a saúde do seu coração, com exames
                  e tratamentos modernos para prevenção e controle de doenças
                  cardiovasculares.
                </p>
                <a href="">saiba mais</a>
              </div>

              <ul class="departamento-servicos">
                <h3>serviços fornecidos</h3>
                <li>consulta com cardiologista.</li>
                <li>controle de hipertensão e colesterol.</li>
                <li>exames como eletrocardiograma e ecocardiograma.</li>
              </ul>
            </li>

            <li class="slide clinica">
              <div class="departamento-text">
                <h2>Cardiologia</h2>
                <p>
                  Atendimento médico inicial para diagnóstico e acompanhamento de saúde em geral. Ideal para consultas regulares e cuidados preventivos.
                </p>
                <a href="">saiba mais</a>
              </div>

              <ul class="departamento-servicos">
                <h3>serviços fornecidos</h3>
                <li>Check-ups periódicos.</li>
                <li>Diagnóstico de sintomas gerais.</li>
                <li>Encaminhamento para especialistas, quando necessário.</li>
              </ul>
            </li>

            <li class="slide pediatria">
              <div class="departamento-text">
                <h2>Pediatria</h2>
                <p>
                  Cuidado dedicado à saúde de crianças e adolescentes, com atenção especial ao desenvolvimento e bem-estar.
                </p>
                <a href="">saiba mais</a>
              </div>

              <ul class="departamento-servicos">
                <h3>Acompanhamento pediátrico.</h3>
                <li>Vacinas e prevenção de doenças.</li>
                <li>Avaliação do crescimento e desenvolvimento.</li>
                <li>exames como eletrocardiograma e ecocardiograma.</li>
              </ul>
            </li>
          </ul>
          <button class="buttonSlide" id="prev">Anterior</button>
          <button class="buttonSlide" id="next">Próximo</button>
        </div>
      </div>
    </section>

    <article id="doctores">
      <section class="doctores">
        <h1>Nossos especialistas <p>Especialidades médicas com atendimento personalizado para cuidar de você e da sua família.</p></h1>

          <ul class="doctores-list">
            <li class="doctore-li">
              <div class="doctoreId">
                <div class="fornt">
                  <picture><img src="assets/img/perfil (2).jpg" alt="" /></picture>
                  <h2>
                    Dr. Ricardo Monteiro
                    <span>Cardiologia</span>
                  </h2>
                </div>

                <div class="doctore-perfil back">
                  <picture>
                    <img src="assets/img/perfil (2).jpg" alt="" />
                    <h2>
                      Dr. Ricardo Monteiro
                      <span>cardiologista</span>
                    </h2>
                  </picture>
                  <h3>
                    Descrição
                    <p>
                      Especialista em doenças cardiovasculares, com mais de 15 anos de experiência em prevenção e tratamento.
                    </p>
                  </h3>
                  
                </div>
              </div>
            </li> 

            <li class="doctore-li">
              <div class="doctoreId">
                <div class="fornt">
                  <picture><img src="assets/img/perfil (1).jpg" alt="" /></picture>
                  <h2>
                    Dra. Camila Pereira
                    <span>Clínica Geral</span>
                  </h2>
                </div>

                <div class="doctore-perfil back">
                  <picture>
                    <img src="assets/img/perfil (1).jpg" alt="" />
                    <h2>
                      Dra. Camila Pereira
                      <span>cardiologista</span>
                    </h2>
                  </picture>
                  <h3>
                    Descrição
                    <p>
                      Focada em diagnóstico inicial e cuidados preventivos, ajudando pacientes a manter uma saúde equilibrada.
                    </p>
                  </h3>
                  
                </div>
              </div>
            </li>             
            
            <li class="doctore-li">
              <div class="doctoreId">
                <div class="fornt">
                  <picture><img src="assets/img/perfil (1).jpg" alt="" /></picture>
                  <h2>
                    Dra. Mariana Oliveira
                    <span>Pediatria</span>
                  </h2>
                </div>

                <div class="doctore-perfil back">
                  <picture>
                    <img src="assets/img/perfil (1).jpg" alt="" />
                    <h2>
                      Dra. Mariana Oliveira
                      <span>Pediatria</span>
                    </h2>
                  </picture>
                  <h3>
                    Descrição
                    <p>
                      Especialista em saúde infantil, oferecendo cuidado completo para crianças e adolescentes..
                    </p>
                  </h3>
                  
                </div>
              </div>
            </li> 
          </ul>
        </div>
      </section>
    </article>

    <article id="contacto">
      <ul class="contacto-list">
        <li>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" height="" viewBox="0 -960 960 960" width=""><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
          </span>
          <h2>nosso local</h2>
          <p>bairro/cidade - provincia/pais</p>
        </li>

        <li>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="" height="" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg>
          </span>
          <h2>número de telefonr</h2>
          <p><a href="tell:+244-999-999-999">+244-999-999-999</a></p>          
          <p><a href="tell:+244-999-999-999">+244-999-999-999</a></p>
          <strong>(ligação gratuita)</strong>
        </li> 

        <li>
          <span><svg xmlns="http://www.w3.org/2000/svg" height="" viewBox="0 -960 960 960" width=""><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg></span>
          <h2>E-mail</h2>
          <p><a href="email:Xipito@gmail.com">Xipito@gmail.com</a></p>
        </li>
      </ul>

      <div class="contacto-cont">
        <div class="contacto-text">
          <h1>Entre em Contacto Connosco <p>Estamos aqui para ajudar! Tire suas dúvidas ou agende uma consulta de forma rápida e fácil.</p></h1>
          <span>Não hesite em entrar em contacto! Estamos prontos para atendê-lo.</span>
        </div>

        <form action="">
          <div class="form-group nome">
            <label for="nome">nome</label>
            <input type="text" id="nome" name="nome" placeholder="nome completo">
          </div>          
          
          <div class="form-group email">
            <label for="email">e-mail</label>
            <input type="email" id="email" name="email" placeholder="digite um endereço de email valido">
          </div>

          <div class="form-group textarea">
            <label for="texto">caixa de mensagem</label>
            <textarea name="texto" id="texto"></textarea>
          </div>
          <button class="botao">enviar</button>  
        </form>
      </div>
    </article>

    <footer>
      <p>copyright @ 2025 by <span>Xipito na net</span> | todos os direitos reservados!</p>
      <img src="assets/icons/xipindo11.png" alt="">
    </footer>

    <section id="consulta-marcar">
      <span id="fecharPopUp" class="botao-d">X</span>
      <div class="marcar-consulta">
        <form action="">
          <div class="dados-consulta primeiro">
            <h2> Dados Pessoais</h2>
      
            <div class="form-consulta">
              <label for="nomeCompleto">Nome Completo:</label>
              <input type="text" id="nomeCompleto" name="nomeCompleto" placeholder="Ex.: João Silva Santos" required>
            </div>

            <div class="form-consulta">
              <label for="data-nascimento">Data de Nascimento:</label>
              <input type="date" id="data-nascimento" name="data-nascimento" required>
            </div>

            <div class="form-consulta">
              <label for="telefone">Telefone:</label>
              <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
            </div>

            <div class="form-consulta">
              <h3>Sexo:</h3>
              <input type="radio" id="masculino" name="sexo" value="masculino">
              <label class="radio" for="masculino">Masculino</label>
              <input type="radio" id="feminino" name="sexo" value="feminino">
              <label class="radio" for="feminino">Feminino</label>
              <input type="radio" id="outro" name="sexo" value="outro">
              <label class="radio" for="outro">Outro</label>
            </div>
          </div>

          <div class="dados-consulta segundo">
            <h2>Motivo da Consulta</h2>

            <div class="form-consulta">
              <label for="motivo">Descreva o motivo principal:</label>
              <textarea id="motivo" name="motivo" rows="4" placeholder="Ex.: Dores no peito, falta de ar." required></textarea>
            </div>   

            <div class="form-consulta">
              <label for="inicio-sintomas">Quando os sintomas começaram?</label>
              <input type="date" id="inicio-sintomas" name="inicio-sintomas" required>
      
            </div>   

            <div class="form-consulta">
              <h3>Intensidade dos sintomas:</h3>
              <input type="radio" id="leve" name="intensidade" value="leve">
              <label class="radio" for="leve">Leve</label>
              <input type="radio" id="moderado" name="intensidade" value="moderado">
              <label class="radio" for="moderado">Moderado</label>
              <input type="radio" id="intenso" name="intensidade" value="intenso">
              <label class="radio" for="intenso">Intenso</label>
            </div>
          </div>

          <div class="dados-consulta terceiro">
            <h2>Histórico Médico</h2>
            <div class="form-consulta">
              <label for="Possuidoenca">Possui alguma doença crónica?</label>
              <select id="Possuidoenca">
              <option value="diabetes">não</option>                  
              <option value="diabetes">diabetes</option>                  
              <option value="hipertensao">hipertensao</option>                  
              <option value="asma">asma</option>                  
              <option value="Outras">Outras</option>
              </select>
            </div>           
          </div>
          
          <div class="dados-consulta quarto">
            <h2>Já realizou alguma cirurgia?</h2>
            <div class="form-consulta">
              <input type="radio" id="cirurgia-sim" name="cirurgia" value="sim">
              <label class="radio" for="cirurgia-sim">Sim</label>

              <input type="radio" id="cirurgia-nao" name="cirurgia" value="nao">
              <label class="radio" for="cirurgia-nao">Não</label>
            </div>
            <div class="form-consulta">
            <textarea id="detalhes-cirurgia" name="detalhes-cirurgia" rows="3" placeholder="Descreva suas cirurgias (se houver)."></textarea></div>
          </div> 

          <div class="dados-consulta ultimo">
            <h2>Termo de Consentimento</h2>
            <label>
              <input type="checkbox" id="consentimento" name="consentimento" required>
              Declaro que as informações fornecidas são verdadeiras e autorizo o uso dos dados para fins clínicos.
            </label>
          </div>

          <button type="submit" class="botao">Enviar Anamnese</button>
        </form>
      </div>
    </section>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const linksInternos = document.querySelectorAll('a[href^="#"]');

        linksInternos.forEach((link) => {
          link.addEventListener("click", function (event) {
            event.preventDefault();

            const destino = document.querySelector(this.getAttribute("href"));

            if (destino) {
              const topo = destino.offsetTop;
              window.scrollTo({
                top: topo,
                behavior: "smooth",
              });
            }
          });
        });
      });
    </script>

    <script>
      function adicionarClasse(elementId, contactClass) {
        // Remove a classe "local" de todos os elementos
        let elementos = document.querySelectorAll(".servicos-list li");
        elementos.forEach((elemento) => {
          elemento.classList.remove("local");
        });

        // Adiciona a classe "local" ao elemento clicado
        document.getElementById(elementId).classList.add("local");

        // Adiciona a classe "showSeguindo" ou "showSeguidores" ao elemento "#servicosMenu"
        let servicosMenu = document.getElementById("servicos-fornecidos");
        servicosMenu.classList.remove(
          "showExames",
          "showConsultas",
          "showOpiniao"
        ); // Remove ambas as classes
        servicosMenu.classList.add(contactClass); // Adiciona a classe necessária
      }
    </script>

    <script>
      const slides = document.querySelector(".slides");
      const prevButton = document.getElementById("prev");
      const nextButton = document.getElementById("next");
      const dots = document.querySelectorAll(".departamento-menu li");
      let currentIndex = 0;

      function showSlide(index) {
        slides.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;
        updateDots();
      }

      function updateDots() {
        dots.forEach((dot, index) => {
          if (index === currentIndex) {
            dot.classList.add("active");
          } else {
            dot.classList.remove("active");
          }
        });
      }

      prevButton.addEventListener("click", () => {
        if (currentIndex > 0) {
          showSlide(currentIndex - 1);
        } else {
          showSlide(slides.children.length - 1);
        }
      });

      nextButton.addEventListener("click", () => {
        if (currentIndex < slides.children.length - 1) {
          showSlide(currentIndex + 1);
        } else {
          showSlide(0);
        }
      });

      dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
          showSlide(index);
        });
      });

      // Slide automático
      setInterval(() => {
        if (currentIndex < slides.children.length - 1) {
          showSlide(currentIndex + 1);
        } else {
          showSlide(0);
        }
      }, 7000); // Troca de slide a cada 3 segundos
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const todosObjectivo = document.getElementById("consulta");
        const fechar = document.querySelector("#fecharPopUp");
        const bodyPopUp = document.getElementById("consulta-marcar");

        todosObjectivo.addEventListener("click", function () {
            bodyPopUp.classList.add("pupup-show");
        });

        fechar.addEventListener("click", function () {
            bodyPopUp.classList.remove("pupup-show");
        });
      });
    </script>
  </body>
</html>
