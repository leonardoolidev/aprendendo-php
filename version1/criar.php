<?php
echo "<h1>Teste banco de dados</h1>";

$servername = "localhost";
$username = "aws";
$password = "123";
$database = "awsteste";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>Connected successfully<p>";

  // Criar um registro na banco
  $sql = "INSERT INTO usuarios (nome, email) VALUES ('" . date("Y-m-d H:i:s") . "-PHP','teste@example.com')";
  $conn->exec($sql);

  echo "<p>Cadatro realizado - " . date("Y-m-d H:i:s") . "<p>";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

