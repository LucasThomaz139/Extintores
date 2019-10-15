<?php

include_once '../class/Mensagem.class.php';
$men=new Mensagem();
$men->setMensagem($_GET['mensagem']);
$men->setAvaliacao($_GET['avaliacao']);
$nos=$men->adicionar($men);
if($nos){
    echo "sucesso";
}

