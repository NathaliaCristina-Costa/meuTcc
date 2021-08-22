<?php 
    include("../classe/conexao.php"); 

    $nome     = $_POST['nome'];

    $cadastro_cliente = "INSERT INTO categoria (nomeCategoria) VALUES ('$nome')";

    $cliente = mysqli_query($mysqli, $cadastro_cliente);

?>