<?php
class DB
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "password";
    private $dbname = "rcs_0205";
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
    }

    public function getAllUsers()
    {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getUser($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->featch();
    }
}
$db = new DB();