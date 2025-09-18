<?php
class Admin {
    private $conn;
    private $table = "admins";

    public $id;
    public $nome;
    public $numero;
    public $email;
    public $senha;

    public function __construct($db) {
        $this->conn = $db;
    }

    private function existsByEmail($email) {
        $query = "SELECT id FROM " . $this->table . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function create() {
        if ($this->existsByEmail($this->email)) {
            return false; // email duplicado
        }

        $query = "INSERT INTO " . $this->table . " (nome, numero, email, senha)
                  VALUES (:nome, :numero, :email, :senha)";
        $stmt = $this->conn->prepare($query);

        // sanitizar
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->numero = htmlspecialchars(strip_tags($this->numero));
        $this->email = htmlspecialchars(strip_tags($this->email));

        // hash da senha
        $hash = password_hash($this->senha, PASSWORD_DEFAULT);

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":senha", $hash);

        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }
        return false;
    }

    public function login() {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($this->senha, $row['senha'])) {
                return $row;
            }
        }
        return false;
    }
}
