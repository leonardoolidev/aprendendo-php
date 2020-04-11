<?php
// Habilitar exibição de erros no PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluindo a conexão com banco
require_once "./includes/conection.php";

$where = "";
if (isset($_GET['id']) && $_GET['id'] >0 ) {
  $where = "WHERE id=" . $_GET['id'];
}

$sql = "SELECT * FROM usuarios $where";
echo "<p>$sql</p>";
$usuariosQuery = $conexao->query($sql);
$usuarios = $usuariosQuery->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($usuarios);
// print_r($_GET);
// echo '</pre>';

echo "<h1>Usuários</h1>";
echo "<ul>";
foreach ($usuarios as $usuario) {
  echo "<li>id: " . $usuario['id'] . " nome: " . $usuario['nome'] . "</li>";
}
echo "</ul>";
