<?php

$servername = "localhost";
$username = "aws";
$password = "123";
$database = "awsteste";

$conexao = null;

try {
  $conexao = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}