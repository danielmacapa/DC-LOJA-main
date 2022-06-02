<?php

include_once "db.php";

class Funcionario{
    protected $id;
    protected $nome;
    protected $endereco;
    protected $cpf;
    protected $telefone;

    public function __construct($id = false){
        if($id){
            $sql = "SELECT * FROM funcionario WHERE id = ?";
        
        try{
            $con = DB::conexao();
            $stmt = $con->prepare($sql);
        }catch(PDOException $e){
            echo "Erro na consulta de Funcionário: ".$e->getMessage();
        }
        }
    }
    

    
    public function setId($id){
        $this->id = $id;
        }
    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
        }
    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        }
    public function getEndereco(){
        return $this->endereco;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
        }
    public function getCpf(){
        return $this->cpf;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        }
    public function getTelefone(){
        return $this->telefone;
    }



    public function adicionar(){
        $sql = "INSERT INTO funcionario
        (nome, endereco, cpf, telefone)
        VALUES (?, ?, ?, ?)";

    try{

        $con = DB::conexao();
        $stmt = $con->prepare($sql);

        $stmt->bindValue(1, $this->getNome());
        $stmt->bindValue(2, $this->getEndereco());
        $stmt->bindValue(3, $this->getCpf());
        $stmt->bindValue(4, $this->getTelefone());
        $stmt->execute();

    }catch(PDOException $e){
        echo "Erro ao Adicionar Funcionário: " . $e->getMessage(); 
    }
    }



    public function listar(){
        $sql = "SELECT * FROM funcionario";
        $objetos = array();
    
        try{
            $con = DB::conexao();
            $stmt = $con->prepare($sql);  
            $stmt->execute();
            $registros = $stmt->fetchAll();
            
            foreach($registros as $registro){
                $temp = new Funcionario();
                $temp->setId($registro["id"]);
                $temp->setNome($registro["nome"]);
                $temp->setCpf($registro["cpf"]);
                $temp->setEndereco($registro["endereco"]);
                $temp->setTelefone($registro["telefone"]);

                $objetos[] = $temp;
            }

        }catch (PDOException $e){
            echo "Erro no Listar Funcionário: " . $e->getMessage();
        }
        return $objetos;
    }



    public function atualizar(){
        $sql = "UPDATE funcionario 
        SET nome = ?, cpf = ?, endereco = ?, telefone = ?
        WHERE id = ?";

        try{

            $con = DB::conexao();
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $this->getNome());
            $stmt->bindValue(2, $this->getEndereco());
            $stmt->bindValue(3, $this->getCpf());
            $stmt->bindValue(4, $this->getTelefone());
            $stmt->execute();
        
        }catch(PDOException $e){
            echo "Erro no Atualizar: ".$e->getMessage();
        }

    }



    public function excluir(){
        $sql = "DELETE FROM funcionario WHERE id = ?";

        try{

            $con = DB::conexao();
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $this->getId());
            $stmt->execute();

        }catch(PDOException $e){
            echo "Erro no Excluir: ".$e->getMessage();
        }
    }

}

?>