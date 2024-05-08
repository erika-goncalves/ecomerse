<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $ssenha = $_POST["ssenha"];


    // Aqui você pode adicionar validações e manipulações adicionais, como verificar se o e-mail já está em uso, etc.

    // Exibindo os dados cadastrados apenas para fins de demonstração
    echo "Nome: " . $nome . "<br>";
    echo "Sobrenome: " . $sobrenome . "<br>";
    echo "Cpf: " . $cpf . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Email: " . $email . "<br>";
    // Não é uma boa prática exibir senhas, apenas para fins de exemplo
    echo "Senha: " . $senha;
    echo "Senha: " . $ssenha;
}
?>