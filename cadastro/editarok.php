<?php
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
$cadastrando->setSenha($_POST['senha']);

//var_dump($cadastrando);
$retorno=$cadastrando->salvar($cadastrando);

var_dump("retorno", $retorno);
if($retorno)
{
    echo"com sucesso";
}


