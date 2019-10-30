<?php

include_once '../class/Servico.class.php';
$ser= new Servico();
$ser->setIdservico($_POST['idservico']);
$ser->setNome($_POST['nome']);
$ser->setValor($_POST['valor']);
$ser->setDescricao($_POST['descricao']);
$sal=$ser->salvar($ser);
if($sal==true)
{
    echo "sucesso";
}

