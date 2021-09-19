<?php
    require_once '../model/database/connect.php';
    require_once '../model/table/Cliente.php';

    $cliente = new Cliente();
    
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $cliente->setEmail(mysqli_real_escape_string($pdo, $_POST['email']));
        $cliente->setSenha(mysqli_real_escape_string($pdo, $_POST['senha']));

        $resultado = $cliente->validarCliente($pdo);
        if ($resultado <> false) {
            if ($resultado == "Senha incorreta!") {
                session_start();
                $_SESSION['erro'] = array('senha' => "Senha incorreta!");
                header('Location:../view/cliente/login.php');
            } else {
                session_start();

                $cliente->setId($resultado['id_Cliente']);
                $cliente->setNome($resultado['nomeCliente']);
                $cliente->setTelefone($resultado['telefoneCliente']);

                $_SESSION['cliente'] = array('id' => $cliente->getId(),'nome' => $cliente->getNome(), 'telefone' => $cliente->getTelefone(), 'email' => $cliente->getEmail());

                header('Location:../view/cliente/index.php');
            }
        } else if (empty($_POST['email']) && empty($_POST['senha'])) {
            session_start();
            $_SESSION['erro'] = array('empty' => "Preencha os campos acima!");
            header('Location:../view/cliente/login.php');
        } else {
            session_start();
            $_SESSION['erro'] = array('email' => "Não existe usuário com esse e-mail!");
            header('Location:../view/cliente/login.php');
        }
    }
?>