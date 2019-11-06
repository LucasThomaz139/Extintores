<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
include_once '../administrador/topo.php';
include_once '../class/Mensagem.class.php';
$men=new Mensagem();
$men->setIdmensagem($_POST['idmensagem']);
$men->setMensagem($_POST['mensagem']);
$men->setAvaliacao($_POST['avaliacao']);
$nos = $men->salvar($men);
var_dump($nos);
if($nos)
{
   echo "sucesso";
}

include_once '../administrador/rodape.php';
?>
</div>