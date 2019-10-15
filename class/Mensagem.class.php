<?php


class Mensagem {
    private $idmensagem;
    private $mensagem;
    private $avaliacao;
    function getIdmensagem() {
        return $this->idmensagem;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }
    function setIdmensagem($idmensagem) {
        $this->idmensagem = $idmensagem;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

 function adicionar($mensagens) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO mensagem(mensagem,avaliacao) VALUES(:mensagem,:avaliacao)";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":mensagem", $mensagens->getMensagem());
            $prepara->bindValue(":avaliacao", $mensagens->getAvaliacao());
            
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
            $sql ="SELECT*FROM mensagem WHERE idmensagem=:idmensagem ";
           
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idmensagem", PDO::PARAM_STR);
            $prepara->execute();
             $conecta->commit();
            $lista = null;
            while($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Mensagem();
                $listando->idmensagem=$pegando['idmensagem'];
                $listando->mensagem=$pegando['mensagem'];
                $listando->avaliacao=$pegando['avaliacao'];
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
            $sql = "SELECT*FROM mensagem WHERE idmensagem=:idmensagem";
            $prepara = $conecta->prepare($sql);
             $prepara->bindValue(":idmensagem", PDO::PARAM_STR);
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            if($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                $listando->idmensagem=$pegando['idmensagem'];
                $listando->mensagem=$pegando['mensagem'];
                $listando->avaliacao=$pegando['avaliacao'];
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
          function salvar(){
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE agendamento SET  mensagem=:mensagem,avaliacao=:avaliacao WHERE idmensagem =:idmensagem";
            //print_r($sql);
           $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idmensagem", PDO::PARAM_STR);
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
            $sql = "DELETE*FROM mensagem WHERE idmensagem=:idmensagem";
            $prepara=$conecta->prepare($sql);
            $prepara->bindValue(":idmensagem",PDO::PARAM_STR);
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
