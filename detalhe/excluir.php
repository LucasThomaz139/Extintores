<?php

include_once '../class/Detalhe.class.php';
$de=new Detalhe();
$de->setIddetalhe($_GET["iddetalhe"]);
$den=$de->excluir($de);

