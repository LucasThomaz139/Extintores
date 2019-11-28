<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:lista.php");
include_once '../administrador/topo.php';
include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setCadastro_idusuario($_GET['cadastro_idusuario']);
$agencia->setData($_GET['data']);
$agencia->setDescricao($_GET['descricao']);
$agencia->setHora($_GET['hora']);
$agencia->setQuantidade($_GET['quantidade']);
$agencia->adicionar($agencia);

include_once '../administrador/rodape.php';
?>
</div>