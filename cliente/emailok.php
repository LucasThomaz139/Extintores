<?php
ob_start();
session_start();
include_once '../cliente/topo.php';
include_once '../class/Cadastro.class.php';
$us= new Cadastro();
$us->setEmail($_POST['email']);
$us->setSenha(md5($_POST['senha']));

$retorno=$us->login($us);

//var_dump($retorno);die;
if ($retorno) {
   //var_dump("AQUI");die;
    $_SESSION['idusuario']=$retorno['idusuario'];
   $_SESSION['nome']=$retorno['nome'];
   $_SESSION['login']=true;
   $_SESSION['usuario']=true;
   header("location: index.php");
 
}
else{
    echo "a senha esta errada ou email errado";
     header("location: resenha.php");
}

include_once '../cliente/rodape.php';
?>
</div>