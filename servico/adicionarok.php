<?php

include_once '../class/Servico.class.php';
$ser=new Servico();
$ser->setNome($_GET['nome']);
$ser->setValor($_GET['valor']);
$ser->setDescricao($_GET['descricao']);
$nos=$ser->adicionar($ser);
if($nos){
    echo"sucesso";
}

