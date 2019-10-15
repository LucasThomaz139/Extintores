<?php

include_once '../class/Mensagem.class.php';
$men=new Mensagem();
$men->setMensagem($_POST['mensagem']);
$men->setAvaliacao($_POST['avalicao']);
$nos=$men->salvar($men);
if($nos)
{
   echo "sucesso";
}


