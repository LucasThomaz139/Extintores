<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("Location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Servico.class.php';
$ser=new Servico();
$ser->setNome($_GET['nome']);
$ser->setValor($_GET['valor']);
$ser->setDescricao($_GET['descricao']);
$nos=$ser->adicionar($ser);

include_once '../administrador/rodape.php';
?>
</div>
