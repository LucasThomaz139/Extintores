<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:lista.php");
include_once '../administrador/topo.php';
include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setIdagendamento($_POST['idagendamento']);
$agencia->setCadastro_idusuario($_POST['cadastro_idusuario']);
$agencia->setData($_POST['data']);
$agencia->setDescricao($_POST['descricao']);
$agencia->setHora($_POST['hora']);
$eu=$agencia->salvar($agencia);

include_once '../administrador/rodape.php';
?>
</div>