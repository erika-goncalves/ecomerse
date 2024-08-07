<?php
include 'db_conect.php'; //Inclua o arquivo de conexao com o banco
  
ini_set('display_erros', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
$nome = $_POST["nome"];
 $sobrenome = $_POST["sobrenome"];
   $cpf = $_POST["cpf"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];


  $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);


  $sql = $coon->prepare("INSERT INTO usuarios (nome, sobrenome, cpf, email, senha) VALUES (?, ?, ?, ?, ?)");
  $sql->bind_param("sssss",$nome, $sobrenome, $cpf, $email, $senha_criptografada);

  if ($sql->execute()){
    echo "Novo registro criado com sucesso";
  } else {
    echo "Erro:" . $sql->error;
  }

$sql->close();
$coon->close();

?>