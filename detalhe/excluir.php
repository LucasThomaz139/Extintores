<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Detalhe.class.php';
$de=new Detalhe();
$de->setIddetalhe($_GET["iddetalhe"]);
$den=$de->excluir($de);

include_once '../administrador/rodape.php';
?>
</div>