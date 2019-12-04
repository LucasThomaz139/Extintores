<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:listar.php");
include_once '../administrador/topo.php';
include_once'../class/Cadastro.class.php';

$cadastrando= new Cadastro();
$cadastrando->setIdusuario($_GET["idusuario"]);
//var_dump($cadastrando);
$re = $cadastrando->excluir($cadastrando);
//var_dump($re);

include_once '../administrador/rodape.php';
?>
</div>




