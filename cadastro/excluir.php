<?php


include_once'../class/Cadastro.class.php';

$cadastrando= new Cadastro();
$cadastrando->setIdusuario($_GET["idusuario"]);
var_dump($cadastrando);
$re = $cadastrando->excluir($cadastrando);
var_dump($re);
if($re)
{
    echo"sucesso";
}





