<?php

session_start();
include_once '../class/Cadastro.class.php';
$us= new Cadastro();
$us->setEmail($_POST['email']);
$us->setSenha(md5($_POST['senha']));

$retorno=$us->loginadm($us);
//var_dump($retorno);die;
if ($retorno) {
    $_SESSION['idusuario']=$retorno['idusuario'];
   $_SESSION['nome']=$retorno['nome'];
   $_SESSION['login']=true;
   $_SESSION['administrador']=true;
   header("location:../produto/listar.php");
}
else{
    echo"a senha esta errada ou email errado";
      header("location:../login/senha.php");
}


