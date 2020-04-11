<?php
// Habilitar exibição de erros no PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluindo a conexão com banco
require_once "./includes/conection.php";

// Verificar dados recebidos
// print_r($_GET);
//print_r($_FILES);
// Variável com dado de onde vai salvar o arquivo
//$uploaddir = '/var/www/html/upload/';
//$uploadfile = $uploaddir . $_FILES['arquivo']['name'];
// echo "<p>" . $uploadfile . "</p>";
// echo "<p>" . $_FILES['arquivo']['tmp_name'] . "</p>";
// Pegar um arquivo e mover no servidor
//chmod($uploaddir, 0777);
//move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile);

print_r($_POST);
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "
  INSERT INTO 
    usuarios (nome, email) 
  VALUES 
    ('$nome', '$email')
";
$conexao->exec($sql);

echo "<p>Salvo com sucesso</p>";


