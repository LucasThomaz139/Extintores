<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
include_once '../administrador/topo.php';
include_once '../class/Mensagem.class.php';
$men=new Mensagem();
$men->setIdmensagem($_GET["idmensagem"]);
$me=$men->excluir($men);
include_once '../administrador/rodape.php';
?>
</div>
