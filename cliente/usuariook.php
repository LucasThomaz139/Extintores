<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
ob_start();

include_once '../cliente/topo.php';
include_once '../class/Cadastro.class.php';
$cadastro=new Cadastro();
$cadastro->setNome($_GET['nome']);
$cadastro->setTelefonetra($_GET['telefonetra']);
$cadastro->setTelefonepe($_GET['telefonepe']);
$cadastro->setRazaosocial($_GET['razaosocial']);
$cadastro->setCnpjt($_GET['cnpjt']);
$cadastro->setEndereco($_GET['endereco']);
$cadastro->setEmail($_GET['email']);
$cadastro->setSenha(md5($_GET['senha']));
$resultado=$cadastro->veri_adicionar($cadastro);

if($resultado){
    $resultado=$cadastro->adicionar($cadastro);
    header("location:../cliente/usuario.php"); 
    
} else {
    header("location: ../cliente/email.php");  
}

include_once '../cliente/rodape.php';
?>
</div>