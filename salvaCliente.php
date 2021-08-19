<?php 
    include("classe/conexao.php"); 

    $nome      = $_POST['nome'];
    $telefone  = $_POST['telefone'];
    $email     = $_POST['email'];
    $senha     = $_POST['senha'];

    $cadastro_cliente = "INSERT INTO cliente (nomeCliente, telefoneCliente, emailCliente, senhaCliente) VALUES ('$nome', '$telefone', '$email', '$senha' )";

    $cliente = mysqli_query($mysqli, $cadastro_cliente);
?>