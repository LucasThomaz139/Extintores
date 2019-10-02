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



}
