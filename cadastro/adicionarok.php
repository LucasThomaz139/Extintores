<?php

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
if($resultado){
    echo"sucesso";
}
