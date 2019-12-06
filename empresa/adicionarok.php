<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("Location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Empresa.class.php';
$emp=new Empresa();
$emp->setInformacao($_GET['informacao']);
$emp->setMissao($_GET['missao']);
$emp->setVisao($_GET['visao']);
$emp->setValores($_GET['valores']);
$emp=$emp->adicionar($emp);

include_once '../administrador/rodape.php';
?>
</div>

