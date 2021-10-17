<?php
require_once '../model/database/connect.php';
require_once '../model/table/Admin.php';

$admin = new Admin();

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $admin->setEmail(mysqli_real_escape_string($pdo, $_POST['email']));
    $admin->setSenha(mysqli_real_escape_string($pdo, $_POST['senha']));

    $resultado = $admin->validarAdmin($pdo);
    if ($resultado <> false) {
        if ($resultado == "Senha incorreta!") {
            session_start();
            $_SESSION['erro'] = array('senha' => "Senha incorreta!");
            header('Location:../view/cliente/login.php');
        } else {
            session_start();

            $admin->setId($resultado['id_Cliente']);
            $admin->setNome($resultado['nomeCliente']);
            $admin->setTelefone($resultado['telefoneCliente']);

            $_SESSION['admin'] = array('id' => $admin->getId(), 'nome' => $admin->getNome(), 'email' => $admin->getEmail());

            header('Location:../view/admin/index.php');
        }
    } else if (empty($_POST['email']) && empty($_POST['senha'])) {
        session_start();
        $_SESSION['erro'] = array('empty' => "Preencha os campos acima!");
        header('Location:../view/admin/login.php');
    } else {
        session_start();
        $_SESSION['erro'] = array('email' => "Não existe usuário com esse e-mail!");
        header('Location:../view/admin/login.php');
    }
}
?>