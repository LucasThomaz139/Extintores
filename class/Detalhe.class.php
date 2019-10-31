<?php


class Detalhe {
    private $iddetalhe;
    private $produtos_idprodutos;
    private $servico_idservico;
    private $agendamento_idagendamento ;
    private $quantidade;
    private $detalhe;
    private $valor;
    function getIddetalhe() {
        return $this->iddetalhe;
    }

    function getProdutos_idprodutos() {
        return $this->produtos_idprodutos;
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

    function setProdutos_idprodutos($produtos_idprodutos) {
        $this->produtos_idprodutos = $produtos_idprodutos;
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
            $sql = "INSERT INTO detalhe(produtos_idprodutos,servico_idservico,agendamento_idagendamento,quantidade,detalhe,valor) VALUES(:produtos_idprodutos,:servico_idservico,:agendamento_idagendamento,:quantidade,:detalhe,:valor)";
            //print_r($sql);
            $prepara =$conecta->prepare($sql);
            $prepara->bindValue(":produtos_idprodutos", $detalhe->getProdutos_idprodutos());
            $prepara->bindValue(":servico_idservico", $detalhe->getServico_idservico());
            $prepara->bindValue(":agendamento_idagendamento", $detalhe->getAgendamento_idagendamento());
            $prepara->bindValue(":quantidade", $detalhe->getQuantidade());
            $prepara->bindValue(":detalhe", $detalhe->getDetalhe());
            $prepara->bindValue(":valor", $detalhe->getValor());
            $b=$prepara->execute();

            $conecta->commit();
           
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
     function lista() {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql ="SELECT detalhe.*,produtos.nome as produtos_idprodutos,servico.nome as servico_idservico,agendamento.data as agendamento_idagendamento FROM detalhe INNER JOIN produtos ON detalhe.produtos_idprodutos=produtos.idprodutos INNER JOIN servico ON detalhe.servico_idservico=servico.idservico INNER JOIN agendamento ON detalhe.agendamento_idagendamento=agendamento.idagendamento";
            $prepara = $conecta->prepare($sql);
             $b = $prepara->execute();
                $pegando = $prepara->fetchAll(PDO::FETCH_ASSOC);

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
     function verificador($detalhe){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT detalhe.*,produtos.nome as produtos_idprodutos,servico.nome as servico_idservico,agendamento.data as agendamento_idagendamento FROM detalhe INNER JOIN produtos ON detalhe.produtos_idprodutos=produtos.idprodutos INNER JOIN servico ON detalhe.servico_idservico=servico.idservico INNER JOIN agendamento ON detalhe.agendamento_idagendamento=agendamento.idagendamento WHERE iddetalhe=:iddetalhe";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":iddetalhe", $detalhe->getIddetalhe());
           $prepara->execute();
            $b = $prepara->fetch(PDO::FETCH_ASSOC);
            
   
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
          function salvar($detalhe){
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE  detalhe SET  produtos_idprodutos= :produtos_idprodutos,servico_idservico= :servico_idservico,agendamento_idagendamento= :agendamento_idagendamento,quantidade= :quantidade,detalhe= :detalhe,valor= :valor WHERE iddetalhe= :iddetalhe";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
           $prepara->bindValue(":iddetalhe",$detalhe->getIddetalhe());
            $prepara->bindValue(":produtos_idprodutos",$detalhe->getProdutos_idprodutos());
            $prepara->bindValue(":servico_idservico",$detalhe->getServico_idservico());
            $prepara->bindValue(":agendamento_idagendamento",$detalhe->getAgendamento_idagendamento());
            $prepara->bindValue(":quantidade",$detalhe->getQuantidade());
            $prepara->bindValue(":detalhe",$detalhe->getDetalhe());
            $prepara->bindValue(":valor",$detalhe->getValor());
            $b=$prepara->execute();
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
            $sql = "DELETE FROM detalhe WHERE iddetalhe=:iddetalhe";
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
