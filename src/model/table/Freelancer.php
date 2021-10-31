<?php
require_once '../model/Bcrypt.php';

class Freelancer
{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $nome_categoria;
    private $nome_servico;
    private $group = 2;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getNomeCategoria()
    {
        return $this->nome_categoria;
    }

    public function setNomeCategoria($nome_categoria)
    {
        $this->nome_categoria = $nome_categoria;
    }

    public function getNomeServico()
    {
        return $this->nome_servico;
    }

    public function setNomeServico($nome_servico)
    {
        $this->nome_servico = $nome_servico;
    }

    public function getGroup()
    {
        return $this->group;
    }


    public function validarFreelancer($pdo)
    {
        $consulta = mysqli_query($pdo, "SELECT * FROM `freelancer` WHERE emailFreelancer = '{$this->email}'");

        if (mysqli_affected_rows($pdo) > 0) {
            $consulta_hash = mysqli_query($pdo, "SELECT senhaCliente FROM `freelancer` WHERE emailFreelancer = '{$this->email}'");
            $hash = mysqli_fetch_array($consulta_hash);
            if (Bcrypt::check($this->senha, $hash['senhaFreelancer'])) {
                $consulta = mysqli_query($pdo, "SELECT * FROM `freelancer` WHERE emailFreelancer = '{$this->email}'");
                $dados_usuario = mysqli_fetch_array($consulta);
                return $dados_usuario;
            } else {
                return "Senha incorreta!";
            }
        } else {
            return false;
        }
    }

    public function existeFreelancer($pdo)
    {
        $consulta = mysqli_query($pdo, "SELECT * FROM `freelancer` WHERE emailFreelancer = '{$this->email}'");
        if (mysqli_affected_rows($pdo) > 0) {
            return true;
        }
    }

    public function cadastrarFreelancer($pdo)
    {
        $sql_inserir = mysqli_query($pdo, "INSERT INTO `freelancer` (nomeFreelancer, emailFreelancer, senhaFreelancer, nomeCategoria, telefoneFreelancer, groups) VALUES ('{$this->nome}', '{$this->email}', '{$this->senha}', '{$this->nome_categoria}', '{$this->telefone}', $this->group)");
        if (mysqli_affected_rows($pdo) > 0) {
            return true;
        } else {
            echo "Error: " . $sql_inserir . "<br>" . mysqli_error($pdo);
            return false;
        }
    }
}