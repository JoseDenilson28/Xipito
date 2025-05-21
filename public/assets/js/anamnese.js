function inicializarFormularioAnamnese() {
  const form = document.getElementById('form-anamnese');

  if (!form || form.dataset.listener === "true") return;

  form.dataset.listener = "true"; // Evita adicionar múltiplos listeners

  form.addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    try {
      const response = await fetch('processa_anamnese.php', {
        method: 'POST',
        body: formData
      });

      const data = await response.json();

      if (data.status === 'success') {
        Swal.fire({
          icon: 'success',
          title: 'Enviado com sucesso!',
          text: data.message
        });
        form.reset();
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Erro ao enviar',
          text: data.message
        });
      }
    } catch (err) {
      Swal.fire({
        icon: 'error',
        title: 'Erro inesperado',
        text: 'Não foi possível enviar os dados. Tente novamente.'
      });
    }
  });
}
