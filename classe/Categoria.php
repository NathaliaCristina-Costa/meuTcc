<?php
   
    class Categoria{
        private $pdo;
        
        //CONEXAO BANCO DE DADOS
        public function __construct($dbname, $host, $user, $senha){
            try {
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
            } catch (PDOException $e) {
                echo "Erro com banco de dados: ".$e->getMessage();
            } catch (Exception $e) {
                echo "Erro generico: ".$e->getMessage();
            }
        }

        //BUSCAR DADOS DO BANCO E MOSTRAR NA TABELA DA TELA
        public function buscarDados(){

            $res = array();
            $cmd = $this->pdo->query("SELECT * FROM categoria ORDER BY id_Categoria");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }

        //FUNÇÃO CADASTRA CATEGORIA NO BANCO DE DADOS
        public function cadastrarCategoria($nome){
            //ANTES DE CADASTRAR, VERIFICAR SE CATEGORIA JÁ FOI CADASTRADA
            $cmd = $this->pdo->prepare("SELECT id_Categoria FROM categoria WHERE nomeCategoria = :c");
            $cmd->bindValue(":c", $nome);
            $cmd->execute();

            //Se rowCount for > 0 é pq Categoria já existe no banco de dados então retorna falso
            if($cmd->rowCount()>0){
                return false;
            }else{ //categoria não encontrada retornar verdadeiro
                $cmd = $this->pdo->prepare("INSERT INTO categoria (nomeCategoria) VALUES (:c)");

                $cmd->bindValue(":c", $nome);
                $cmd->execute();
                return true;
            }
        }

        //METODO DE EXCLUSÃO
        public function excluirCategoria($id){
            $cmd = $this->pdo->prepare("DELETE FROM categoria WHERE id_Categoria = :id");
            $cmd->bindValue(":id", $id);
            $cmd->execute();
        }

        //BUSCAR DADOS DE CATEGORIA ESPECÍFICA
        public function buscarDadosCategoria($id){

        }
        //ATUALIZAR DADOS NO BANCO DE DADOS
        public function atualizarDados(){

        }

        //TOTAL DE CATEGORIAS REGISTRADAS
        
    }
   
?>



            