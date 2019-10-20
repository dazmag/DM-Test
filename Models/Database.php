<?php

class Database {

    private $host = "localhost";
    private $port = 3306;
    private $socket = "";
    private $user = "root";
    private $password = "password";
    private $dbname = "darren";
    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->dbname}", $this->user, $this->password);
        } catch (PDOException $exception) {
            echo "Connection Failed: " . $exception->getMessage();
        }
    }

    private function readData($statement) {
        $query = $this->connection->query($statement);
        return $query->setFetchMode(PDO::FETCH_ASSOC);
    }

    public function getProducts() {
        return $this->readData("SELECT * FROM products");
    }

    public function getUser($userID) {
        return $this->readData("SELECT * FROM users WHERE id = $userID");
    }

    public function checkLogin($email, $password) {
        return $this->readData("SELECT * FROM users WHERE (email, password) = ($email, $password)");
    }

    public function addUser($fName, $lName, $email, $pass) {
        $query = "INSERT INTO users (first_name, last_name, email, password) VALUES (:fName, :lName, :email, :pass)";
        $statement = $this->connection->prepare($query);
        $statement->execute(["fName" => $fName, "lName" => $lName, "email" => $email, "pass" => $pass]);
    }

    public function addProduct($pName, $pDesc, $pPrice) {
        $query = "INSERT INTO products (name, description, price) VALUES (:pName, :pDesc, :pPrice)";
        $statement = $this->connection->prepare($query);
        $statement->execute(["pName" => $pName, "pDesc" => $pDesc, "pPrice" => $pPrice]);
    }
}