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

  // Atualizar um registro no banco de dados

  $sql = "UPDATE usuarios SET nome='" . date("Y-m-d H:i:s") . "-PHP'  WHERE id=1";

  $stmt = $conn->prepare($sql);
 
  $stmt->execute();

  echo $stmt->rowCount() . "<p>Usuário atualizado.  - " . date("Y-m-d H:i:s") . "<p>";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

