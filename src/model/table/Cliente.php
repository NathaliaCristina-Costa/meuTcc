<?php
require_once '../model/Bcrypt.php';

class Cliente
{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $group = 3;

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

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getGroup()
    {
        return $this->group;
    }

    //FAZER O LOGIN
    public function validarCliente($pdo)
    {
        $consulta = mysqli_query($pdo, "SELECT * FROM `cliente` WHERE emailCliente = '{$this->email}'");

        if (mysqli_affected_rows($pdo) > 0) {
            $consulta_hash = mysqli_query($pdo, "SELECT senhaCliente FROM `cliente` WHERE emailCliente = '{$this->email}'");
            $hash = mysqli_fetch_array($consulta_hash);
            if (Bcrypt::check($this->senha, $hash['senhaCliente'])) {
                $consulta = mysqli_query($pdo, "SELECT * FROM `cliente` WHERE emailCliente = '{$this->email}'");
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
    public function buscarDados($pdo)
    {
        $consulta = mysqli_query($pdo, "SELECT * FROM `cliente` WHERE emailCliente = '{$this->email}'");
        if (mysqli_affected_rows($pdo) > 0) {
            return true;
        }
    }

    //FUNÇÃO CADASTRA CLIENTE NO BANCO DE DADOS
    public function cadastrarCliente($pdo)
    {
        $sql_inserir = mysqli_query($pdo, "INSERT INTO `cliente` (nomeCliente, emailCliente, senhaCliente, telefoneCliente, groups) VALUES ('{$this->nome}', '{$this->email}', '{$this->senha}', '{$this->telefone}', $this->group)");
        if (mysqli_affected_rows($pdo) > 0) {
            return true;
        } else {
            echo "Error: " . $sql_inserir . "<br>" . mysqli_error($pdo);
            return false;
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



            