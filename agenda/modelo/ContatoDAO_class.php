<?php
    include_once("ConnectionFactory_class.php");
    include_once("Contato_class.php");

    class ContatoDAO{
        //DAO (Data Access Object)
        //Acesso aos Dados do Objeto

        //CRUD (Create, Read, Update, Delete)
        //operações básicas do banco de dados

        //objeto recebe a conexão
        public $con = null;

        public function __construct(){
            $conF = new ConnectionFactory();
            $this->con = $conF->getConnection();
        }

        //create
        public function cadastrar($contato){
            try{
                $sql = "INSERT INTO contato (:nome, :email, :telefone) VALUES (:nome, :email, :telefone)";
                $stmt = $this->con->prepare($sql);
                //SQL injection

                //ligamos as âncoras (indicado pelos ":") aos valores de Contato
                $stmt->bindValue(":nome", $contato->getNome());
                $stmt->bindValue(":email", $contato->getEmail());
                $stmt->bindValue(":telefone", $contato->getTelefone());

                //execução do SQL
                $stmt->execute();
                
                //fecha a conexão
                // $this->con->close();
                // $this->con = null;
            }catch(PDOException $ex){
                echo "Erro: " . $ex->getMessage();
            }
        }

        //listar
        public function listar($query = null){
            //se não passar nenhuma query, iguala a null
            try{
                if($query == null){
                    //dataset (conjunto de dados) geral
                    $dados = $this->con->query("SELECT * FROM contato");

                }else{
                    //dataset (conjunto de dados) com query específica
                    $dados = $this->con->query($query);
                }

                //crio chamando a função array()
                $listar = array();

                //percorre linha alinha de dados e coloca cada registro na variável linha (que é um vetor)
                foreach($dados as $linha){
                    $c = new Contato();
                    $c->setId($linha["id"]);
                    $c->setNome($linha["nome"]);
                    $c->setTelefone($linha["telefone"]);
                    $c->setEmail($linha["email"]);
                    $lista[] = $c;
                }
                return $lista;
            }catch(PDOException $ex){
                echo "Erro: " . $ex->getMessage();
            }
        }
    }
?>