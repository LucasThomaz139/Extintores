<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:lista.php");
include_once '../administrador/topo.php';
include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setIdagendamento($_GET["idagendamento"]);
$eu=$agencia->excluir($agencia);

if($eu)
{
    echo"sucesso";
}
include_once '../administrador/rodape.php';
?>
</div>