<?php

include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setIdagendamento($_GET[":idagendamento"]);
var_dump($agencia);
$eu=$agencia->excluir($agencia);
var_dump("eu",$eu);
if($eu)
{
    echo"sucesso";
}
