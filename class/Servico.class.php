<?php

class Servico {
    private $idservico;
    private $nome;
    private $valor;
    private $descricao;
    function getIdservico() {
        return $this->idservico;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setIdservico($idservico) {
        $this->idservico = $idservico;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    function adicionar($servicos) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO servico(nome,valor,descricao) VALUES(:nome,:valor,:descricao)";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":nome", $servicos->getNome());
            $prepara->bindValue(":valor", $servicos->getValor());
            $prepara->bindValue(":descricao", $servicos->getDescricao());
            $prepara->execute();
            $conecta->commit();
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            PRINT($exc->getMessage());
            return FALSE;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }
        
    function lista($lis) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql ="SELECT*FROM servico WHERE idservico=:idservico ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idservico", $lis->getIdservico());
            $prepara->bindValue(":nome", $lis->getNome());
            $prepara->bindValue(":valor", $lis->getValor());
            $prepara->bindValue(":descricao", $lis->getDescricao());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            while($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Servico();
                $listando->idservico=$pegando['idservico'];
                $listando->nome=$pegando['nome'];
                $listando->valor=$pegando['valor'];
                $listando->descricao=$pegando['descricao'];
                $lista[] = $listando;                
            }
            return $lista;
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            PRINT($exc->getMessage());
            return FALSE;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }
     function verificador($ver){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
             $sql ="SELECT*FROM servico WHERE idservico=:idservico ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idservico",$ver->getIdservico());
            $prepara->bindValue(":idservico",$ver->getNome());
            $prepara->bindValue(":idservico",$ver->getValor());
            $prepara->bindValue(":idservico",$ver->getDescricao());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            if($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Servico();
                $listando->idservico=$pegando['idservico'];
                $listando->nome=$pegando['nome'];
                $listando->valor=$pegando['valor'];
                $listando->descricao=$pegando['descricao'];
                $lista = $listando;                
            }
            return $lista;
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            PRINT($exc->getMessage());
            return FALSE;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
     }
     
            }
          function salvar($salva){
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE servico SET  nome=:nome,valor=:valor,descricao=:descricao WHERE idservico =:idservico";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
           $prepara->bindValue(":idservico", $salva->getIdservico());
           $prepara->bindValue(":nome", $salva->getNome());
           $prepara->bindValue(":valor", $salva->getValor());
           $prepara->bindValue(":descricao", $salva->getDescricao());
            $prepara->execute();
             $conecta->commit();
            
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            echo $exc->getMessage();
            
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
        
    }
        
     public function excluir($ser) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "DELETE*FROM servico WHERE idservico=:idservico";
            $prepara=$conecta->prepare($sql);
            $prepara->bindValue(":idservico",$ser->getIdservico());
            $prepara->execute();
            $conecta->commit();
            
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            echo $exc->getMessage();
            
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }


}
