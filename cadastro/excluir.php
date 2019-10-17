<?php


include_once'../class/Cadastro.class.php';

$cadastrando=new Cadastro();
$cadastrando->setIdusuario($_GET["idusuario"]);
var_dump($cadastrando);
$cadastrando->excluir($cadastrando);
if($cadastrando)
{
    echo"sucesso";
}





