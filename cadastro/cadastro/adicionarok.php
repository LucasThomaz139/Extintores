<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Cadastro.class.php';
$cadastro=new Cadastro();
$cadastro->setNome($_GET['nome']);
$cadastro->setTelefonetra($_GET['telefonetra']);
$cadastro->setTelefonepe($_GET['telefonepe']);
$cadastro->setRazaosocial($_GET['razaosocial']);
$cadastro->setCnpjt($_GET['cnpjt']);
$cadastro->setEndereco($_GET['endereco']);
$cadastro->setEmail($_GET['email']);
$cadastro->setSenha($_GET['senha']);
$resultado=$cadastro->adicionar($cadastro);
include_once '../administrador/rodape.php';
?>
</div>