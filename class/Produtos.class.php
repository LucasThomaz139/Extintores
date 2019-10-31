<?php

class Produtos {
    private $idprodutos;
    private $nome;
    private $valor;
    private $tipo;
    private $descricao;
    private $quantidade;
    private $status;
    private $imagem;
    function getIdprodutos() {
        return $this->idprodutos;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getStatus() {
        return $this->status;
    }

    function getImagem() {
        return $this->imagem;
    }
    function setIdprodutos($idprodutos) {
        $this->idprodutos = $idprodutos;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

function adicionar($produtos) {
        $conecta;


        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO produtos(nome,valor,tipo,descrisao,quantidade,status,imagem) VALUES(:nome,:valor,:tipo,:descricao,:quantidade,:status,:imagem)";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":nome", $produtos->getNome());
            $prepara->bindValue(":valor", $produtos->getValor());
            $prepara->bindValue(":tipo", $produtos->getTipo());
            $prepara->bindValue(":descricao", $produtos->getDescricao());
            $prepara->bindValue(":quantidade", $produtos->getQuantidade());
            $prepara->bindValue(":status", $produtos->getStatus());
            $prepara->bindValue(":imagem", $produtos->getImagem());
            $prepara->execute();
            $b = $conecta->commit();
            
            return $b;
            
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
        
    function listas() {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql ="SELECT*FROM produtos ";
            $prepara = $conecta->prepare($sql);
            
            $b = $prepara->execute();
            $pegando = $prepara->fetchAll(PDO::FETCH_ASSOC);
//            $conecta->commit();

           // var_dump($pegando);
            return $pegando;
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
    
     function verificador($produtos){
        
         $conecta;
        // var_dump($produtos);
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
             $sql ="SELECT*FROM produtos WHERE idprodutos = :idprodutos ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idprodutos", $produtos->getIdprodutos());
            $prepara->execute();
            $b = $prepara->fetch(PDO::FETCH_ASSOC);
            //var_dump($b);
            return $b;
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
          function salvar($produtos){
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE produtos SET  nome=:nome,valor=:valor,tipo= :tipo,descrisao=:descricao,quantidade=:quantidade,status=:status,imagem=:imagem WHERE idprodutos =:idprodutos";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
           $prepara->bindValue(":idprodutos", $produtos->getIdprodutos());
            $prepara->bindValue(":nome", $produtos->getNome());
            $prepara->bindValue(":valor", $produtos->getValor());
            $prepara->bindValue(":tipo", $produtos->getTipo());
            $prepara->bindValue(":descricao", $produtos->getDescricao());
            $prepara->bindValue(":quantidade", $produtos->getQuantidade());
            $prepara->bindValue(":status", $produtos->getStatus());
            $prepara->bindValue(":imagem", $produtos->getImagem());
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
        
     public function excluir($pro) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "DELETE FROM produtos WHERE idprodutos=:idprodutos ";
            $preparedStatment = $conecta->prepare($sql);
            $preparedStatment->bindValue(":idprodutos",$pro->getIdprodutos());
            $b=$preparedStatment->execute();
            var_dump($b);
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
