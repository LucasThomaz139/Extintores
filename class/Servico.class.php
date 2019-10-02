<?php

class Servico {
    private $idservico;
    private $nome;
    private $valor;
    private $descricao;
    function getIdservico() {
        return $this->idservico;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setIdservico($idservico) {
        $this->idservico = $idservico;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


}
