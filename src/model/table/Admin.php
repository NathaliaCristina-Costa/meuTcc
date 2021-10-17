<?php
require_once '../model/Bcrypt.php';

class Admin
{
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    //FAZER O LOGIN
    public function validarAdmin($pdo)
    {
        $consulta = mysqli_query($pdo, "SELECT * FROM `administrador` WHERE email = '{$this->email}'");
        // die(json_encode(mysqli_affected_rows($pdo)));

        if (mysqli_affected_rows($pdo) > 0) {
            $consulta_hash = mysqli_query($pdo, "SELECT senha FROM `administrador` WHERE email = '{$this->email}'");
            $hash = mysqli_fetch_array($consulta_hash);
            if (Bcrypt::check($this->senha, $hash['senha'])) {
                $consulta = mysqli_query($pdo, "SELECT * FROM `administrador` WHERE email = '{$this->email}'");
                $dados_usuario = mysqli_fetch_array($consulta);
                return $dados_usuario;
            } else {
                return "Senha incorreta!";
            }
        } else {
            return false;
        }
    }
}
?>