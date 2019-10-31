<?php

include_once '../class/Servico.class.php';
$ser = new Servico();
$ser->setIdservico($_GET["idservico"]);
var_dump($ser);
$acabou = $ser->excluir($ser);

if($acabou)
{
    echo"sucesso";
}


