<?php

include_once '../class/Mensagem.class.php';
$men=new Mensagem();
$men->setIdmensagem($_GET["idmensagem"]);
$me=$men->excluir($men);

