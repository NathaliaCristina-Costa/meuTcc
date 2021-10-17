<?php
require_once '../model/database/connect.php';
require_once '../model/table/Cliente.php';

$cliente = new Cliente();

if (array_key_exists('dados-cliente', $_POST)) {
    $cliente->setEmail($_POST['email']);
    if (!$cliente->buscarDados($pdo)) {
        $cliente->setSenha(Bcrypt::hash($_POST['senha']));
        $cliente->setNome($_POST['nome']);
        $cliente->setTelefone($_POST['telefone']);
        if ($cliente->cadastrarCliente($pdo)) {
            session_start();
            $_SESSION['cliente'] = array(
                'id' => $cliente->getId(),
                'nome' => $cliente->getNome(),
                'telefone' => $cliente->getTelefone(),
                'email' => $cliente->getEmail(),
                'group' => $cliente->getGroup()
            );
            header('Location:../view/cliente/index.php');
        }
    } else {
        session_start();
        $_SESSION['erro'] = ['user_exists' => 'Já existe usuário com esse e-mail cadastrado!'];
        header('Location:../view/cliente/login.php');
    }
}
?>