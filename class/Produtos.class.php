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
            $sql = "INSERT INTO produto(nome,valor,tipo,descricao,quantidade,status,imagem) VALUES(:nome,:valor,:tipo,:descricao,:quantidade,:status,:imagem)";
            $prepara = $conecta->prepare($sql);
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
            PRINT($exc->getMessage());
            return FALSE;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }
        
    function lista($produtos) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql ="SELECT*FROM produto WHERE idproduto=:idproduto ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idproduto", $produtos->getIdproduto());
            $prepara->bindValue(":nome", $produtos->getNome());
            $prepara->bindValue(":valor", $produtos->getValor());
            $prepara->bindValue(":tipo", $produtos->getTipo());
            $prepara->bindValue(":descricao", $produtos->getDescricao());
            $prepara->bindValue(":quantidade", $produtos->getQuantidade());
            $prepara->bindValue(":status", $produtos->getStatus());
            $prepara->bindValue(":imagem", $produtos->getImagem());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            while($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                $listando->idproduto=$pegando['idproduto'];
                $listando->nome=$pegando['nome'];
                $listando->valor=$pegando['valor'];
                $listando->tipo=$pegando['tipo'];
                $listando->descricao=$pegando['descricao'];
                $listando->quantidade=$pegando['quantidade'];
                $listando->status=$pegando['status'];
                $listando->imagem=$pegando['imagem'];
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
     function verificador($produtos){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
             $sql ="SELECT*FROM produto WHERE idproduto=:idproduto ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idproduto", $produtos->getIdproduto());
            $prepara->bindValue(":nome", $produtos->getNome());
            $prepara->bindValue(":valor", $produtos->getValor());
            $prepara->bindValue(":tipo", $produtos->getTipo());
            $prepara->bindValue(":descricao", $produtos->getDescricao());
            $prepara->bindValue(":quantidade", $produtos->getQuantidade());
            $prepara->bindValue(":status", $produtos->getStatus());
            $prepara->bindValue(":imagem", $produtos->getImagem());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            if($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                $listando->idproduto=$pegando['idproduto'];
                $listando->nome=$pegando['nome'];
                $listando->valor=$pegando['valor'];
                $listando->tipo=$pegando['tipo'];
                $listando->descricao=$pegando['descricao'];
                $listando->quantidade=$pegando['quantidade'];
                $listando->status=$pegando['status'];
                $listando->imagem=$pegando['imagem'];
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
          function salvar($produtos){
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE produtos SET  nome=:nome,valor=:valor,tipo=:tipo,descricao=:descricao,quantidade=:quantidade,status=:status,imagem=:imagem WHERE idproduto =:idproduto";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
           $prepara->bindValue(":idproduto", $produtos->getIdproduto());
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
        
     public function excluir($produtos) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "DELETE*FROM produtos WHERE idagendamento=:idagendamento";
            $prepara=$conecta->prepare($sql);
            $prepara->bindValue(":idproduto",$produtos->getIdproduto());
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
