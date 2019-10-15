<?php

include_once '../class/Servico.class.php';
$ser = new Servico();
$ser->setIdservico($_GET['idservico']);
$acabou = $ser->excluir($ser);

