<?php

class Produtos {
    private $idprodutos;
    private $nome;
    private $valor;
    private $tipo;
    private $descricao;
    private $quantidade;
    private $status;
    private $imagem;
    function getIdprodutos() {
        return $this->idprodutos;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getStatus() {
        return $this->status;
    }

    function getImagem() {
        return $this->imagem;
    }
    function setIdprodutos($idprodutos) {
        $this->idprodutos = $idprodutos;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }



}
