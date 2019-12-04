<?php
ob_start();
session_start();

include_once '../cliente/topo.php';
include_once '../class/Detalhe.class.php';
$de=new Detalhe();
$de->setProdutos_idprodutos($_GET['produtos_idprodutos']);
$de->setUsuario($_GET['usuario']);
$de->setServico_idservico($_GET['servico_idservico']);
$de->setAgendamento_idagendamento($_GET['agendamento_idagendamento']);
$de->setDetalhe($_GET['detalhe']);
$de->setValor($_GET['valor']);
$den=$de->adicionar($de);
if($den){
    header("location:index.php");
}
include_once '../cliente/rodape.php';
?>
</div>