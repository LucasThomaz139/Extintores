<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
ob_start();
include_once '../cliente/topo.php';
include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setCadastro_idusuario($_GET['cadastro_idusuario']);
$agencia->setData($_GET['data']);
$agencia->setDescricao($_GET['descricao']);
$agencia->setHora($_GET['hora']);
$retorno=$agencia->adicionar($agencia);
//var_dump($retorno);
if($retorno){
     header("location:lista.php");
}
include_once '../cliente/rodape.php';
?>
</div>
