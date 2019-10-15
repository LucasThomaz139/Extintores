<?php


class Agendamento {
    private $idagendamento;
    private $cadastro_idusuario;
    private $data;
    private $descricao;
    private $hora;
    function getIdagendamento() {
        return $this->idagendamento;
    }

    function getCadastro_idusuario() {
        return $this->cadastro_idusuario;
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

    function setCadastro_idusuario($cadastro_idusuario) {
        $this->cadastro_idusuario = $cadastro_idusuario;
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
            $sql = "INSERT INTO agendamento(cadastro_idusuario,data,descricao,hora) VALUES(:cadastro_idusuario,:data,:descricao,:hora)";
            print_r($sql);
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":cadastro_idusuario", $agenda->getCadastro_idusuario());
            $prepara->bindValue(":data", $agenda->getData());
            $prepara->bindValue(":descricao", $agenda->getDescricao());
            $prepara->bindValue(":hora", $agenda->getHora());
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
            $sql ="SELECT agendamento.*,cadastro.nome as cadastro_idusuario FROM agendamento INNER JOIN cadastro ON agendamento.idagendameto=cadastro.idusuario ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idagendamento", PDO::PARAM_STR);
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            while($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Agendamento();
                $listando->idagendamento=$pegando['idagendamento'];
                $listando->cadastro_idusuario=$pegando['cadastro_idusuario'];
                $listando->data=$pegando['data'];
                $listando->descricao=$pegando['descricao'];
                $listando->hora=$pegando['hora'];
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
     function verificador(){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT*FROM agendamento WHERE idagendamento=:idagendamento";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idagendamento",PDO::PARAM_STR);
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            if($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Agendamento();
                $listando->idagendamento=$pegando['idagendamento'];
                $listando->cadastro_idusuario=$pegando['cadastro_idusuario'];
                $listando->data=$pegando['data'];
                $listando->descricao=$pegando['descricao'];
                $listando->hora=$pegando['hora'];
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
          function salvar(){
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE agendamento SET  cadastro_idusuario=:cadastro_idusuario,data=:data,descricao=:descricao,hora=:hora WHERE idagendamento =:idagendamento";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idagendamento", PDO::PARAM_STR);
            
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
        
     public function excluir() {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "DELETE*FROM agendamento WHERE idagendamento=:idagendamento";
            $prepara=$conecta->prepare($sql);
            $prepara->bindValue(":idagendamento",PDO::PARAM_STR);
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

    


