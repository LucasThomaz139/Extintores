<?php


class Agendamento {
    private $idagendamento;
    private $cadastro_usuario;
    private $data;
    private $descricao;
    private $hora;
    function getIdagendamento() {
        return $this->idagendamento;
    }

    function getCadastro_usuario() {
        return $this->cadastro_usuario;
    }

    function getData() {
        return $this->data;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getHora() {
        return $this->hora;
    }

    function setIdagendamento($idagendamento) {
        $this->idagendamento = $idagendamento;
    }

    function setCadastro_usuario($cadastro_usuario) {
        $this->cadastro_usuario = $cadastro_usuario;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }
    function adicionar($agenda) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO agendamento(cadastro_usuario,data,descricao,hora,agenda) VALUES(cadastro_usuario=:cadastro_usuario,data=:data,descricao=:descricao,hora=:hora,agenda=:agenda)";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":cadastro_usuario", $agenda->getCadastro_usuario());
            $prepara->bindValue(":data", $agenda->getData());
            $prepara->bindValue(":descricao", $agenda->getDescricao());
            $prepara->bindValue(":hora", $agenda->getHora());
            $prepara->bindValue(":agenda", $agenda->getAgenda());
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
        
    function lista($agendar) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql ="SELECT agendamento.*,usuario.nome as cadastros FROM agendamento INNER JOIN usuario ON agendamento.idagendameto=usuario.idusuario ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idagendamento", $agendar->getIdagendamento());
            $prepara->bindValue(":cadastro_usuario", $agendar->getCadastro_usuario());
            $prepara->bindValue(":data", $agendar->getData());
           $prepara->bindValue(":descricao", $agendar->getDescricao());
            $prepara->bindValue(":hora", $agendar->getHora());
            $prepara->bindValue(":agenda", $agendar->getAgenda());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            while($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                $listando->idagendamento=$pegando['idagendamento'];
                $listando->cadastro_usuario=$pegando['cadastros'];
                $listando->data=$pegando['data'];
                $listando->descricao=$pegando['descricao'];
                $listando->agenda=$pegando['agenda'];
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
     function verificador($agendar){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT*FROM agendamento WHERE idagendamento=:idagendamento";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idagendamento", $agendar->getIdagendamento());
            $prepara->bindValue(":cadastro_usuario", $agenda->getCadastro_usuario());
            $prepara->bindValue(":data", $agenda->getData());
            $prepara->bindValue(":descricao", $agenda->getDescricao());
            $prepara->bindValue(":hora", $agenda->getHora());
            $prepara->bindValue(":agenda", $agenda->getAgenda());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            if($pegando=$prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                $listando->idagendamento=$pegando['idagendamento'];
                $listando->cadastro_usuario=$pegando['cadastro_usuario'];
                $listando->data=$pegando['data'];
                $listando->descricao=$pegando['descricao'];
                $listando->agenda=$pegando['agenda'];
                $lista=$listando;
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
            $sql = "UPDATE agendamento SET  cadastro_usuario=:cadastro,data=:data,descricao=:descricao,agenda=:agenda WHERE idagendamento =:idagendamento";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idagendamento", $agendar->getIdagendamento());
            $prepara->bindValue(":cadastro_usuario", $agenda->getCadastro_usuario());
            $prepara->bindValue(":data", $agenda->getData());
            $prepara->bindValue(":descricao", $agenda->getDescricao());
            $prepara->bindValue(":hora", $agenda->getHora());
            $prepara->bindValue(":agenda", $agenda->getAgenda());
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
            $sql = "DELETE*FROM produto WHERE idproduto=:idproduto";
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

    


