<?php

include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setIdagendamento($_GET["idagendamento"]);
$eu=$agencia->excluir($agencia);

if($eu)
{
    echo"sucesso";
}
