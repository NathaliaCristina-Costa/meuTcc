<?php
require_once '../model/database/connect.php';
require_once '../model/table/Cliente.php';
require_once '../model/table/Freelancer.php';

if (array_key_exists('dados-cliente', $_POST)) {
    $cliente = new Cliente();
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
} else if (array_key_exists('dados-freelancer', $_POST)) {
    $freelancer = new Freelancer();
    $freelancer->setEmail($_POST['email']);
    if (!$freelancer->buscarDados($pdo)) {
        $freelancer->setSenha(Bcrypt::hash($_POST['senha']));
        $freelancer->setNome($_POST['nome']);
        $freelancer->setNomeCategoria($_POST['categoria']);
        $freelancer->setTelefone($_POST['telefone']);
        if ($freelancer->cadastrarFreelancer($pdo)) {
            session_start();
            $_SESSION['freelancer'] = array(
                'id' => $freelancer->getId(),
                'nome' => $freelancer->getNome(),
                'email' => $freelancer->getEmail(),
                'categoria' => $freelancer->getNomeCategoria(),
                'telefone' => $freelancer->getTelefone(),
                'group' => $freelancer->getGroup()
            );
            header('Location:../view/freelancer/index.php');
        }
    } else {
        session_start();
        $_SESSION['erro'] = ['user_exists' => 'Já existe usuário com esse e-mail cadastrado!'];
        header('Location:../view/freelancer/login.php');
    }
}
?>