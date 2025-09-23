document.addEventListener("DOMContentLoaded", function () {
  // Rolar para seções com links internos
  const linksInternos = document.querySelectorAll('a[href^="#"]');
  linksInternos.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const destino = document.querySelector(this.getAttribute("href"));
      if (destino) {
        const topo = destino.offsetTop;
        window.scrollTo({ top: topo, behavior: "smooth" });
      }
    });
  });

  // Botão "marcar consulta"
  const todosObjectivo = document.getElementById("consulta");
  const fechar = document.querySelector("#fecharPopUp");
  const bodyPopUp = document.getElementById("consulta-marcar");

  if (todosObjectivo && fechar && bodyPopUp) {
    todosObjectivo.addEventListener("click", function () {
      bodyPopUp.classList.add("pupup-show");
      inicializarFormularioAnamnese();
    });

    fechar.addEventListener("click", function () {
      bodyPopUp.classList.remove("pupup-show");
    });
  } else {
    console.warn("Botão ou popup não encontrados");
  }

  // Slides
  const slides = document.querySelector(".slides");
  const prevButton = document.getElementById("prev");
  const nextButton = document.getElementById("next");
  const dots = document.querySelectorAll(".departamento-menu li");
  let currentIndex = 0;

  if (slides && prevButton && nextButton && dots.length > 0) {
    function showSlide(index) {
      slides.style.transform = `translateX(-${index * 100}%)`;
      currentIndex = index;
      updateDots();
    }

    function updateDots() {
      dots.forEach((dot, index) => {
        dot.classList.toggle("active", index === currentIndex);
      });
    }

    prevButton.addEventListener("click", () => {
      showSlide(
        currentIndex > 0 ? currentIndex - 1 : slides.children.length - 1
      );
    });

    nextButton.addEventListener("click", () => {
      showSlide(
        currentIndex < slides.children.length - 1 ? currentIndex + 1 : 0
      );
    });

    dots.forEach((dot, index) => {
      dot.addEventListener("click", () => showSlide(index));
    });

    setInterval(() => {
      showSlide(
        currentIndex < slides.children.length - 1 ? currentIndex + 1 : 0
      );
    }, 7000);
  }
   // Radios + detalhes cirurgia
  const radioSim = document.getElementById("cirurgia-sim");
  const radioNao = document.getElementById("cirurgia-nao");
  const detalhes = document.getElementById("detalhes-cirurgia");

  if (radioSim && radioNao && detalhes) {
    function toggleRequired() {
      if (radioSim.checked) {
        detalhes.setAttribute("required", "required");
      } else {
        detalhes.removeAttribute("required");
      }
    }

    radioSim.addEventListener("change", toggleRequired);
    radioNao.addEventListener("change", toggleRequired);
  } else {
    console.warn("Radios ou campo de detalhes não encontrados");
  }

  // Formulário de Anamnese - Navegação entre etapas
   const sections = document.querySelectorAll(".dados-consulta");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  const submitBtn = document.getElementById("submitBtn");
  let currentStep = 0;

  function showStep(index) {
    sections.forEach((section, i) => {
      section.classList.toggle("active", i === index);
    });

    // Mostrar/esconder botões
    prevBtn.style.display = index === 0 ? "none" : "inline-block";
    nextBtn.style.display = index === sections.length - 1 ? "none" : "inline-block";
    submitBtn.style.display = index === sections.length - 1 ? "inline-block" : "none";
  }

  prevBtn.addEventListener("click", () => {
    if (currentStep > 0) {
      currentStep--;
      showStep(currentStep);
    }
  });

  nextBtn.addEventListener("click", () => {
    if (currentStep < sections.length - 1) {
      currentStep++;
      showStep(currentStep);
    }
  });

  // Iniciar no primeiro passo
  showStep(currentStep);
});

