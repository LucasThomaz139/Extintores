<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:listar.php");
include_once '../administrador/topo.php';
include_once '../administrador/topo.php';
include_once '../class/Detalhe.class.php';
$de=new Detalhe();
$de->setProdutos_idprodutos($_GET['produtos_idprodutos']);
$de->setServico_idservico($_GET['servico_idservico']);
$de->setAgendamento_idagendamento($_GET['agendamento_idagendamento']);
$de->setQuantidade($_GET['quantidade']);
$de->setDetalhe($_GET['detalhe']);
$de->setValor($_GET['valor']);
$den=$de->adicionar($de);
include_once '../administrador/rodape.php';
?>
</div>