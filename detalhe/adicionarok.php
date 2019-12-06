<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
ob_start();
//include_once '../administrador/topo.php';

include_once '../class/Detalhe.class.php';
$de=new Detalhe();
$de->setUsuario($_GET['usuario']);
$de->setProdutos_idprodutos($_GET['produtos_idprodutos']);
$de->setServico_idservico($_GET['servico_idservico']);
$de->setAgendamento_idagendamento($_GET['agendamento_idagendamento']);
$de->setDetalhe($_GET['detalhe']);
$den=$de->adicionar($de);
var_dump($den);
if($den){
    header("location:listar.php");
}
include_once '../administrador/rodape.php';
?>
</div>