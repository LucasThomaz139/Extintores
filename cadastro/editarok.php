<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:listar.php");
include_once '../administrador/topo.php';
include_once'../class/Cadastro.class.php';

$cadastrando=new Cadastro();
$cadastrando->setIdusuario($_POST['idusuario']);
$cadastrando->setNome($_POST['nome']);
$cadastrando->setTelefonetra($_POST['telefonetra']);
$cadastrando->setTelefonepe($_POST['telefonepe']);
$cadastrando->setRazaosocial($_POST['razaosocial']);
$cadastrando->setCnpjt($_POST['cnpjt']);
$cadastrando->setEndereco($_POST['endereco']);
$cadastrando->setEmail($_POST['email']);
$retorno=$cadastrando->salvar($cadastrando);

include_once '../administrador/rodape.php';
?>
</div>

