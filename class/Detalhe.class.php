<?php


class Detalhe {
    private $iddetalhe;
    private $produto_idprodutos;
    private $servico_idservico;
    private $agendamento_idagendamento ;
    private $quantidade;
    private $detalhe;
    private $valor;
    function getIddetalhe() {
        return $this->iddetalhe;
    }

    function getProduto_idprodutos() {
        return $this->produto_idprodutos;
    }

    function getServico_idservico() {
        return $this->servico_idservico;
    }

    function getAgendamento_idagendamento() {
        return $this->agendamento_idagendamento;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getDetalhe() {
        return $this->detalhe;
    }

    function getValor() {
        return $this->valor;
    }
    function setIddetalhe($iddetalhe) {
        $this->iddetalhe = $iddetalhe;
    }

    function setProduto_idprodutos($produto_idprodutos) {
        $this->produto_idprodutos = $produto_idprodutos;
    }

    function setServico_idservico($servico_idservico) {
        $this->servico_idservico = $servico_idservico;
    }

    function setAgendamento_idagendamento($agendamento_idagendamento) {
        $this->agendamento_idagendamento = $agendamento_idagendamento;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setDetalhe($detalhe) {
        $this->detalhe = $detalhe;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }
    function adicionar($detalhe){
        $conectar;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO detalhe(produto_idprodutos,servico_idservico,agendamento_idagendamento,quantidade,detalhe,valor) VALUES(:produto_idprodutos,:servico_idservico,:agendamento_idagendamento,:quantidade,:detalhe,:valor)";
            //print_r($sql);
            $prepara =$conecta->prepare($sql);
            $prepara->bindValue(":produto_idprodutos",$detalhe->getProduto_idprodutos());
            $prepara->bindValue(":servico_idservico",$detalhe->getServico_idservico());
            $prepara->bindValue(":agendamento_idagendamento",$detalhe->getAgendamento_idagendamento());
            $prepara->bindValue(":quantidade",$detalhe->getQuantidade());
            $prepara->bindValue(":detalhe",$detalhe->getDetalhe());
            $prepara->bindValue(":valor",$detalhe->getValor());
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
     function lista($detalhe) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql ="SELECT detalhe.*,produtos.nome as produto,servico.nome as servico,agendamento.data as agendamento FROM detalhe INNER JOIN produto ON detalhe.iddetalhe=produto.idprodutos INNER JOIN servico ON detalhe.iddetalhe=servico.idservico INNER JOIN agendamento ON detalhe.iddetalhe=agendamento.idagendamento";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":iddetalhe", $detalhe->getIdDetalhe());
            $prepara->bindValue(":produto_idprodutos",$detalhe->getProduto_idprodutos());
            $prepara->bindValue(":servico_idservico",$detalhe->getServico_idservico());
            $prepara->bindValue(":agendamento_idagendamento",$detalhe->getAgendamento_idagendamento());
            $prepara->bindValue(":quantidade",$detalhe->getQuantidade());
            $prepara->bindValue(":detalhe",$detalhe->getDetalhe());
            $prepara->bindValue(":valor",$detalhe->getValor());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            while($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                $listando->iddetalhe=$pegando['idagendamento'];
                $listando->produto_idprodutos=$pegando['produto'];
                $listando->servico_idservico=$pegando['servico'];
                $listando->agendamento_idagendamento=$pegando['agendamento'];
                $listando->quantidade=$pegando['quantidade'];
                $listando->detalhe=$pegando['detalhe'];
                $listando->valor=$pegando['valor'];
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
     function verificador($detalhe){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT detalhe.*,produtos.nome as produto,servico.nome as servico,agendamento.data as agendamento FROM detalhe INNER JOIN produto ON detalhe.iddetalhe=produto.idprodutos INNER JOIN servico ON detalhe.iddetalhe=servico.idservico INNER JOIN agendamento ON detalhe.iddetalhe=agendamento.idagendamento";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":iddetalhe", $detalhe->getIdDetalhe());
            $prepara->bindValue(":produto_idprodutos",$detalhe->getProduto_idprodutos());
            $prepara->bindValue(":servico_idservico",$detalhe->getServico_idservico());
            $prepara->bindValue(":agendamento_idagendamento",$detalhe->getAgendamento_idagendamento());
            $prepara->bindValue(":quantidade",$detalhe->getQuantidade());
            $prepara->bindValue(":detalhe",$detalhe->getDetalhe());
            $prepara->bindValue(":valor",$detalhe->getValor());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            if($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                 $listando->iddetalhe=$pegando['idagendamento'];
                $listando->produto_idprodutos=$pegando['produto'];
                $listando->servico_idservico=$pegando['servico'];
                $listando->agendamento_idagendamento=$pegando['agendamento'];
                $listando->quantidade=$pegando['quantidade'];
                $listando->detalhe=$pegando['detalhe'];
                $listando->valor=$pegando['valor'];
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
          function salvar($agendar){
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE  SET  produto_idprodutos=:produto_idprodutos,servico_idservico=:servico_idservico,agendamento_idagendamento=:agendamento_idagendamento,quantidade=:quantidade,detalhe=:detalhe,valor=:valor WHERE iddetalhe =:iddetalhe";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
           $prepara->bindValue(":iddetalhe", $detalhe->getIdDetalhe());
            $prepara->bindValue(":produto_idprodutos",$detalhe->getProduto_idprodutos());
            $prepara->bindValue(":servico_idservico",$detalhe->getServico_idservico());
            $prepara->bindValue(":agendamento_idagendamento",$detalhe->getAgendamento_idagendamento());
            $prepara->bindValue(":quantidade",$detalhe->getQuantidade());
            $prepara->bindValue(":detalhe",$detalhe->getDetalhe());
            $prepara->bindValue(":valor",$detalhe->getValor());
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
        public function excluir($detalhe) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "DELETE*FROM agendamento WHERE idagendamento=:idagendamento";
            $prepara=$conecta->prepare($sql);
            $prepara->bindValue(":iddetalhe",$detalhe->getIddetalhe());
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
