<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Detalhe.class.php';
$de = new Detalhe();
$de->setIddetalhe($_POST['iddetalhe']);
$de->setProdutos_idprodutos($_POST['produtos_idprodutos']);
$de->setServico_idservico($_POST['servico_idservico']);
$de->setAgendamento_idagendamento($_POST['agendamento_idagendamento']);
$de->setQuantidade($_POST['quantidade']);
$de->setDetalhe($_POST['detalhe']);
$de->setValor($_POST['valor']);
$den= $de->salvar($de);

include_once '../administrador/rodape.php';
?>
</div>