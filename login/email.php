<?php

include_once '../class/Cadastro.class.php';
$en= new Cadastro();
$en->setIdusuario($_GET["idusuario"]);
$retorno=$en->enviar_email($en);


