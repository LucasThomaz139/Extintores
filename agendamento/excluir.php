<?php

include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setIdagendamento($_GET[":idagendamento"]);
$eu=$agencia->salvar($agencia);
if($eu)
{
    echo"sucesso";
}
