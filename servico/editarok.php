<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("Location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Servico.class.php';
$ser= new Servico();
$ser->setIdservico($_POST['idservico']);
$ser->setNome($_POST['nome']);
$ser->setValor($_POST['valor']);
$ser->setDescricao($_POST['descricao']);
$sal=$ser->salvar($ser);

include_once '../administrador/rodape.php';
?>
</div>
