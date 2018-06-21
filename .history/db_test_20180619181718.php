<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "rcs_web_dev_day_group_1";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$stmt = $conn->prepare("SELECT * FROM users where name = ?");
if ($stmt->execute(['sdfgsdf gsdf g'])) {
  while ($row = $stmt->fetch()) {
    var_dump($row);
  }
}