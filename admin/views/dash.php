<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/../../app/config/config.php";

// Verifica se admin está logado
if (!isset($_SESSION['admin'])) {
    header("Location: " . ADMIN_URL . "views/login.php");
    exit;
}
require_once APP_PATH . "config/database.php";
require_once ADMIN_MODEL_PATH . "doctor.php";

$db = new Database();
$conn = $db->getConnection();
$doctorModel = new Doctor($conn);

$totalDoctors = $doctorModel->countAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="<?= BASE_URL ?>public/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/admin/style.css" />
    <link
      rel="stylesheet"
      href="<?= BASE_URL ?>public/css/global/header-home.css"
    />
    <link
      rel="stylesheet"
      href="<?= BASE_URL ?>public/css/global/header-home.css"
    />
    <link
      rel="shortcut icon"
      href="<?= BASE_URL ?>public/icons/xipindo11.png"
      type="image/x-icon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dashboard</title>
  </head>

  <body id="dashboard">
    <?php if (isset($_SESSION['flash'])): ?>
      <script src="<?= BASE_URL ?>public/js/sweetalert2.min.js"></script>
      <script>
        Swal.fire({
          icon: '<?= $_SESSION['flash']['type'] ?>',
          title: '<?= $_SESSION['flash']['type'] === "success" ? "Sucesso!" : "Erro!" ?>',
          text: '<?= $_SESSION['flash']['msg'] ?>',
          confirmButtonText: 'Ok'
        });
      </script>
    <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <header class="header-dashboard">
      <picture>
        <img
          class="logo-X"
          src="<?= BASE_URL ?>public/icons/xipindo11.png"
          alt="logo"
          class="logo-X"
        />
      </picture>

      <nav>
        <ul class="header-menu-dash">
          <li class="activ">
            <a href="<?= ADMIN_URL ?>index.php?action=dash">Dashboard</a>
          </li>
          <li>
            <a href="<?= ADMIN_URL ?>views/cadastroAdmin.php">Cadastro Admin</a>
          </li>
          <li>
            <a href="<?= ADMIN_URL ?>views/cadastroDouctor.php">Cadastro Doutor</a>
          </li>
          <li>
            <a href="#" id="logout-btn">Sair</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="mather">
      <div class="header-second">
        <form action="">
          <input type="search" name="" id="" placeholder="Pesquise..." />
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

        </ul>

        <ul id="notficUP" class="notfic">
          <span id="notficF">X</span>
          <li><p>2 pacientes foram atendidos</p></li>
          <li><p>foi solicitado um cadastro!</p></li>
          <li><p>Mais de 5 pacientes em espera</p></li>
        </ul>
      </div>

      <div class="dash-board">
        <h1>Dashboard</h1>
        <ul class="dash-board-list">
          <li>
            <h2>Médicos</h2>
            <span><?= $totalDoctors ?></span>
          </li>
          <li>
            <h2>Atendimento</h2>
            <span>0</span>
          </li>
        </ul>
      </div>

      <div style="overflow-x: auto; display: flex; width: 100%">
        <table class="tabela-dash">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Número</th>
              <th>E-mail</th>
              <th>Data</th>
              <th>Gênero</th>
              <th>Endereço</th>
              <th>Senha</th>
              <th>Opções</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $stmt = $doctorModel->getAll();
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
              ?>
                <tr>
                  <td><?= htmlspecialchars($row['id']) ?></td>
                  <td><?= htmlspecialchars($row['nome']) ?></td>
                  <td><?= htmlspecialchars($row['numero']) ?></td>
                  <td><?= htmlspecialchars($row['email']) ?></td>
                  <td><?= date("d.m.Y", strtotime($row['data_nascimento'])) ?></td>
                  <td><?= htmlspecialchars($row['genero']) ?></td>
                  <td><?= htmlspecialchars($row['endereco']) ?></td>
                  <td>********</td>
                  <td>
                    <button class="editar" data-id="<?= $row['id'] ?>">editar</button>
                    <button class="remover" data-id="<?= $row['id'] ?>">remover</button>
                  </td>
                </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Modal de edição -->
<div id="editDoctorModal" class="modal">
  <div class="modal-content">
    <span id="closeModal" class="close">&times;</span>
    <h2>Editar Doutor</h2>
    <form id="editDoctorForm">
      <input type="hidden" name="id" id="editId">

      <label>Nome</label>
      <input type="text" name="nome" id="editNome">

      <label>Número</label>
      <input type="text" name="numero" id="editNumero">

      <label>E-mail</label>
      <input type="email" name="email" id="editEmail">

      <label>Gênero</label>
      <select name="genero" id="editGenero">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
      </select>

      <label>Endereço</label>
      <input type="text" name="endereco" id="editEndereco">

      <label>Data de Nascimento</label>
      <input type="date" name="data_nascimento" id="editData">
      <div class="form-itens">
        <label for="editSenha">Nova Senha (deixe em branco para não alterar)</label>
        <input type="password" id="editSenha" name="senha" placeholder="**********" />
      </div>

      <button type="submit">Salvar</button>
    </form>
  </div>
</div>

    <style>
    .modal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; 
            background: rgba(0,0,0,0.5); justify-content:center; align-items:center; }
    .modal-content { background:#fff; padding:20px; border-radius:5px; width:400px; position:relative;}
    .close { position:absolute; top:10px; right:15px; cursor:pointer; font-size:20px; }
    </style>
  </body>
  <script>
    const modal = document.getElementById("editDoctorModal");
    const closeModal = document.getElementById("closeModal");

    // Abrir modal
    document.querySelectorAll(".editar").forEach(btn => {
      btn.addEventListener("click", function() {
        const id = this.getAttribute("data-id");

        fetch("<?= ADMIN_URL ?>controllers/doctorController.php?action=get&id=" + id)
      .then(res => res.json())
      .then(data => {
            document.getElementById("editId").value = data.id;
            document.getElementById("editNome").value = data.nome;
            document.getElementById("editNumero").value = data.numero;
            document.getElementById("editEmail").value = data.email;
            document.getElementById("editGenero").value = data.genero;
            document.getElementById("editEndereco").value = data.endereco;
            document.getElementById("editData").value = data.data_nascimento;

            modal.style.display = "flex";
          });
      });
    });

    // Fechar modal
    closeModal.addEventListener("click", () => modal.style.display = "none");

    // Submeter form via AJAX
    document.getElementById("editDoctorForm").addEventListener("submit", function(e){
      e.preventDefault();
      
      const formData = new FormData(document.getElementById("editDoctorForm"));

      fetch("<?= ADMIN_URL ?>controllers/doctorController.php?action=update", {
          method: "POST",
          body: formData
      })
      .then(res => res.json())
      .then(data => {
          Swal.fire({
              icon: data.status,
              title: data.status === "success" ? "Sucesso!" : "Erro!",
              text: data.message
          }).then(() => {
              if(data.status === "success"){
                  location.reload();
              }
          });
      });
    });
    
    // DELETE com SweetAlert
    document.querySelectorAll(".remover").forEach(btn => {
      btn.addEventListener("click", function() {
        const id = this.getAttribute("data-id");

        Swal.fire({
          title: "Tem certeza?",
          text: "O doutor será removido permanentemente!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d33",
          cancelButtonColor: "#3085d6",
          confirmButtonText: "Sim, remover",
          cancelButtonText: "Cancelar"
        }).then((result) => {
          if (result.isConfirmed) {
            fetch("<?= ADMIN_URL ?>controllers/doctorController.php?action=delete&id=" + id, {
              method: "GET"
            })
            .then(res => res.json())
            .then(resp => {
              Swal.fire({
                icon: resp.status,
                title: resp.status === "success" ? "Removido!" : "Erro!",
                text: resp.message
              }).then(() => {
                if(resp.status === "success") location.reload();
              });
            })
            .catch(() => {
              Swal.fire("Erro!", "Não foi possível remover o doutor.", "error");
            });
          }
        });
      });
    });



    const notficOpen = document.getElementById("notfic");
    const bodyPopUp = document.getElementById("notficUP");
    const notficF = document.getElementById("notficF");

    notficOpen.addEventListener("click", function () {
      bodyPopUp.classList.add("show");
    });
    notficF.addEventListener("click", function () {
      bodyPopUp.classList.remove("show");
    });
    
    document.getElementById("logout-btn").addEventListener("click", function (e) {
      e.preventDefault(); // bloqueia o link

      Swal.fire({
        title: "Tem a certeza que deseja sair?",
        text: "A sua sessão será encerrada.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sim, sair",
        cancelButtonText: "Não"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "<?= ADMIN_URL ?>index.php?action=logout";
        }
      });
    });
</script>

</html>
