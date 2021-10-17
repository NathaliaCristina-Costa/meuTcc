<?php
require_once '../../model/Bcrypt.php';

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
            if (Bcrypt::check($this->senha, $hash['senhaCliente'])) {
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

    //BUSCAR DADOS DO BANCO E MOSTRAR NA TABELA DA TELA
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM cliente ORDER BY id_Cliente");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //FUNÇÃO CADASTRA CLIENTE NO BANCO DE DADOS
    public function cadastrarCliente($nome, $telefone, $email, $senha)
    {
        //ANTES DE CADASTRAR, VERIFICAR SE CATEGORIA JÁ FOI CADASTRADA
        $cmd = $this->pdo->prepare("SELECT id_Cliente FROM cliente WHERE emailCliente = :e");
        $cmd->bindValue(":e", $email);
        $cmd->execute();

        //pessoa já cadastrada;
        if ($cmd->rowCount() > 0) {
            return false;
        } else {
            //pessoa não encontrada retornar verdadeiro
            $cmd = $this->pdo->prepare("INSERT INTO cliente (nomeCliente, telefoneCliente, emailCliente, senhaCliente) VALUES (:n, :t, :e, :s)");

            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":e", $email);
            $cmd->bindValue(":s", $senha);
            $cmd->execute();
            return true;
        }

    }

    //METODO DE EXCLUSÃO
    public function excluirCliente($id)
    {
        $cmd = $this->pdo->prepare("DELETE FROM categoria WHERE id_Cliente = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }


    //TOTAL DE CATEGORIAS REGISTRADAS
    public function totalRegistroCliente()
    {

        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM cliente");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;

    }
}

?>