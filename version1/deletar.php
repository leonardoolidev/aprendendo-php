<?php
$servername = "localhost";
$username = "aws";
$password = "123";
$database = "awsteste";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>Connected successfully<p>";

  // Deletar um registro no banco
  $sql = "DELETE FROM usuarios WHERE id=3";
  
  $conn->exec($sql);

  echo "<p>Usuário deletado. - " . date("Y-m-d H:i:s") . "<p>";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
