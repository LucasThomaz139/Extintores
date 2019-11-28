<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:lisusu.php");
include_once '../administrador/topo.php';
include_once'../class/Cadastro.class.php';

$cadastrando=new Cadastro();
$cadastrando->setIdusuario($_POST['idusuario']);
$cadastrando->setTelefonetra($_POST['telefonetra']);
$cadastrando->setTelefonepe($_POST['telefonepe']);
$cadastrando->setEmail($_POST['email']);
$retorno=$cadastrando->salva($cadastrando);

include_once '../administrador/rodape.php';
?>
</div>
