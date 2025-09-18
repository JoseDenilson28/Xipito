<?php
class Doctor {
    private $conn;
    private $table = "doutores";

    public $id;
    public $nome;
    public $numero;
    public $email;
    public $genero;  
    public $endereco;
    public $data_nascimento;
    public $senha;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Verifica se já existe doutor com o mesmo email
    private function existsByEmail($email) {
        $query = "SELECT id FROM " . $this->table . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    // Criar novo doutor
    public function create() {
        if ($this->existsByEmail($this->email)) {
            return false; // email duplicado
        }

         $query = "INSERT INTO " . $this->table . " (nome, numero, email, genero, endereco, data_nascimento, senha)
                  VALUES (:nome, :numero, :email, :genero, :endereco, :data, :senha)";
        $stmt = $this->conn->prepare($query);

        // sanitizar entradas
        $this->nome   = htmlspecialchars(strip_tags($this->nome));
        $this->numero = htmlspecialchars(strip_tags($this->numero));
        $this->email  = htmlspecialchars(strip_tags($this->email));
        $this->genero = htmlspecialchars(strip_tags($this->genero));
        $this->endereco = htmlspecialchars(strip_tags($this->endereco));
        $this->data_nascimento = htmlspecialchars(strip_tags($this->data_nascimento));

        // hash da senha
        $hash = password_hash($this->senha, PASSWORD_DEFAULT);

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":genero", $this->genero);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":data", $this->data_nascimento);
        $stmt->bindParam(":senha", $hash);

        if ($stmt->execute()) {
            return $this->conn->lastInsertId(); // retorna id do doutor criado
        }
        return false;
    }

    // Contar todos os doutores
    public function countAll() {
        $query = "SELECT COUNT(*) as total FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'] ?? 0;
    }

    // Pegar todos os doutores
    public function getAll() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY created_at ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Pegar doutor por ID
    public function getById($id){
        $query = "SELECT * FROM " . $this->table . " WHERE id=:id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt;
    }

    // Atualizar doutor
    public function update() {
        $query = "UPDATE " . $this->table . " 
                SET nome = :nome, numero = :numero, email = :email, 
                    data_nascimento = :data, genero = :genero, endereco = :endereco";

        // só atualiza senha se o admin enviou
        if (!empty($this->senha)) {
            $query .= ", senha = :senha";
        }

        $query .= " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":data", $this->data_nascimento);
        $stmt->bindParam(":genero", $this->genero);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":id", $this->id);

        if (!empty($this->senha)) {
            $hash = password_hash($this->senha, PASSWORD_DEFAULT);
            $stmt->bindParam(":senha", $hash);
        }

        return $stmt->execute();
    }

    public function delete($id) {
    $query = "DELETE FROM " . $this->table . " WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    return $stmt->execute();
}

}