<?php

class controage {

    private $id;
    private $agendamento;
    private $servico;
    private $pagamento;
    private $cartao;
    private $quantidade;
    
    function getId() {
        return $this->id;
    }

    function getAgendamento() {
        return $this->agendamento;
    }

    function getServico() {
        return $this->servico;
    }

    function getPagamento() {
        return $this->pagamento;
    }
    
    function getCartao() {
        return $this->cartao;
    }

        function getQuantidade() {
        return $this->quantidade;
    }

        function setId($id) {
        $this->id = $id;
    }

    function setAgendamento($agendamento) {
        $this->agendamento = $agendamento;
    }

    function setServico($servico) {
        $this->servico = $servico;
    }

    function setPagamento($pagamento) {
        $this->pagamento = $pagamento;
    }
    
    function setCartao($cartao) {
        $this->cartao = $cartao;
    }

        function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function adicionar($age) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO controage(agendameto,servico,pagamento,cartao,quantidade) VALUES(:agendamento,:servico,:pagamento,:cartao, :quantidade)";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":agendamento", $age->getAgendamento());
            $prepara->bindValue(":servico", $age->getServico());
            $prepara->bindValue(":pagamento", $age->getPagamento());
            $prepara->bindValue(":cartao", $age->getCartao());
            $prepara->bindValue(":quantidade", $age->getQuantidade());
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
        
    function lista() {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql ="SELECT controage.*,agendamento.data as agendamento, servico.nome as servico FROM controage INNER JOIN agendamento ON controage.agendamento=agendamento.idagendamento INNER JOIN servico ON controage.servico=servico.idservico ";
            $prepara = $conecta->prepare($sql);
              $pego = $prepara->execute();
            $pegando = $prepara->fetchAll(PDO::FETCH_ASSOC);
//           
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
     function verificador($age){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
             $sql ="SELECT controage.*,agendamento.data as agendamento, servico.nome as servico FROM controage INNER JOIN agendamento ON controage.agendamento=agendamento.idagendamento INNER JOIN servico ON controage.servico=servico.idservico WHERE id=:id ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":id",$age->getId());
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
          function salvar($salva){
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE controage SET  agendamento= :agendamento,servico= :servico, pagamento= :pagamento, cartao=:cartao, quantidade=:quantidade WHERE id =:id";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
           $prepara->bindValue(":id", $salva->getId());
           $prepara->bindValue(":agendamento", $salva->getAgendamento());
           $prepara->bindValue(":servico", $salva->getServico());
           $prepara->bindValue(":pagamento",$salva->getPagamento());
           $prepara->bindValue(":Cartao",$salva->getCartao());
           $prepara->bindValue(":quantidade",$salva->getQuantidade());
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
        
     public function excluir($se) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql ="DELETE FROM controage WHERE id= :id";
            $prepara=$conecta->prepare($sql);
            $prepara->bindValue(":idservico",$se->getIdservico());
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


}


