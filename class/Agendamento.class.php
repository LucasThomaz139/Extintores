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
        function veri_adicionar($agenda){
         $conecta;

        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT cadastro_usuario,data,descrisao,hora,agenda FROM agendamento WHERE nome=:nome or  telefonetra=:telefonetra or razaosocial=:razaosocial or email=:email or senha=:senha";
            $preparedStatment = $conecta->prepare($sql);
            $preparedStatment->bindValue(":cadastro_usuario", $agenda->getCadastro_usuario());
            $preparedStatment->bindValue(":data", $agenda->getData());
            $preparedStatment->bindValue(":descricao", $agenda->getDescricao());
            $preparedStatment->bindValue(":hora", $agenda->getHora());
            $preparedStatment->bindValue(":agenda", $agenda->getAgenda());
            $preparedStatment->execute();
            if ($preparedStatment->rowCount() < 0) {
                echo "as informação não pode ser vazias exeto o telefone pessoal e endereço os outro são obrigado digite de novo";
                header("location:../pacientes/adicionar.php");
                throw new InvalidArgumentException(":cadastro_usuario" . ":data".":hora".":agenda");
            } else {
                echo "sucesso";
            }
            $conecta->commit();
            return SUCESSO;
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            echo $exc->getMessage();
            return ERRADO;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }

}
}