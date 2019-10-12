<?php


include_once'../class/Cadastro.class.php';

$cadastrando=new Cadastro();
$cadastrando->setIdusuario($_GET["idusuario"]);
$cadastrando->excluir();





