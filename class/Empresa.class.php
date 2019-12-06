<?php

class Empresa {
    private $id;
    private $informacao;
    private $missao;
    private $visao;
    private $valores;
    function getId() {
        return $this->id;
    }

    function getInformacao() {
        return $this->informacao;
    }
    function getMissao() {
        return $this->missao;
    }

    function getVisao() {
        return $this->visao;
    }

    function getValores() {
        return $this->valores;
    }

        function setId($id) {
        $this->id = $id;
    }

    function setInformacao($informacao) {
        $this->informacao = $informacao;
    }
    function setMissao($missao) {
        $this->missao = $missao;
    }

    function setVisao($visao) {
        $this->visao = $visao;
    }

    function setValores($valores) {
        $this->valores = $valores;
    }

        
    function adicionar($emp) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO empresa(informacao,missao,visao,valores) VALUES(:informacao,:missao,:visao,:valores)";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":informacao", $emp->getInformacao());
            $prepara->bindValue(":missao", $emp->getMissao());
            $prepara->bindValue(":visao", $emp->getVisao());
            $prepara->bindValue(":valores", $emp->getValores());
            
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
            $sql ="SELECT*FROM empresa";
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
     function verificador($ver){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
             $sql ="SELECT*FROM empresa WHERE id=:id ";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":id",$ver->getId());
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
            $sql = "UPDATE empresa SET  informacao=:informacao,missao=:missao,visao=:visao,valores=:valores WHERE id =:id";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
           $prepara->bindValue(":id", $salva->getId());
           $prepara->bindValue(":informacao", $salva->getInformacao());
           $prepara->bindValue(":missao", $salva->getMissao());
           $prepara->bindValue(":visao", $salva->getVisao());
           $prepara->bindValue(":valores", $salva->getValores());
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
            $sql ="DELETE FROM empresa WHERE id= :id";
            $prepara=$conecta->prepare($sql);
            $prepara->bindValue(":id",$se->getId());
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
