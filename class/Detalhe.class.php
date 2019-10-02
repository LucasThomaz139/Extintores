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
    function adicionar($datalhe){
        $conectar;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO detalhe(produto_idprodutos,servico_idservico,quantidade,detalhe,valor) VALUES(:nome,:telefonetra,:telefonepe,:razaosocial,:cnpjt,:endereco,:email,:senha)";
            //print_r($sql);
            $prepara =$conecta->prepare($sql);
            $prepara->bindValue(":nome",$cadastro->getNome());
            $prepara->bindValue(":telefonetra",$cadastro->getTelefonetra());
            $prepara->bindValue(":telefonepe",$cadastro->getTelefonepe());
            $prepara->bindValue(":razaosocial",$cadastro->getRazaosocial());
            $prepara->bindValue(":cnpjt",$cadastro->getCnpjt());
            $prepara->bindValue(":endereco",$cadastro->getEndereco());
            $prepara->bindValue(":email",$cadastro->getEmail());
            $prepara->bindValue(":senha",$cadastro->getSenha());
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


}
