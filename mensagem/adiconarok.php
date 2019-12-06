<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
header("location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Mensagem.class.php';
$men=new Mensagem();
$men->setMensagem($_GET['mensagem']);
$men->setAvaliacao($_GET['avaliacao']);
$nos=$men->adicionar($men);
if($nos){
    echo "sucesso";
}
include_once '../administrador/rodape.php';
?>
</div>