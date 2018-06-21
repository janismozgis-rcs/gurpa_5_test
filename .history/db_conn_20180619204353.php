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
        $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

    public function getAllUsers()
    {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        

    }
}
