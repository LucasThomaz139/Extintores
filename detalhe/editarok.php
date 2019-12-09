<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Detalhe.class.php';
$de = new Detalhe();
$de->setIddetalhe($_POST['iddetalhe']);
$de->setUsuario($_POST['usuario']);
$de->setProdutos_idprodutos($_POST['produtos_idprodutos']);
$de->setServico_idservico($_POST['servico_idservico']);
$de->setAgendamento_idagendamento($_POST['agendamento_idagendamento']);
$de->setDetalhe($_POST['detalhe']);
$den= $de->salvar($de);
//var_dump($den);
include_once '../administrador/rodape.php';
?>
</div>