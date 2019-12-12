<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
ob_start();
include_once '../cliente/topo.php';
include_once '../class/Mensagem.class.php';
$men=new Mensagem();
$men->setMensagem($_GET['mensagem']);
$men->setAvaliacao($_GET['avaliacao']);
$nos=$men->adicionar($men);
if($nos){
     header("location:index.php");
}
include_once '../cliente/rodape.php';
?>
</div>