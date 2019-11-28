<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("Location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Empresa.class.php';
$emp= new Empresa();
$emp->setIdservico($_POST['idservico']);
$emp->setInformacao($_POST['informacao']);

$ret=$emp->salvar($emp);

include_once '../administrador/rodape.php';
?>
</div>