<?php


include_once'../class/Cadastro.class.php';

$cadastrando=new Cadastro();
$cadastrando->setIdusuario($_GET[':idusuario']);
$resultado=$cadastrando->excluir($cadastrando);
print_r($resultado);
if($resultado){
   header("location:../cadastro/Cadastro.class.php");
}
else{
    echo"erro";
}



