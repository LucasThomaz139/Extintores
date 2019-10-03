<?php
include_once'../class/Cadastro.class.php';

$cadastrando=new Cadastro();
$cadastrando->setNome($_POST['nome']);
$cadastrando->setTelefonetra($_POST['telefonetra']);
$cadastrando->setTelefonepe($_POST['telefonepe']);
$cadastrando->setEndereco($_POST['endereco']);
$cadastrando->setEmail($_POST['email']);
$cadastrando->setSenha($_POST['senha']);
$retorno=$cadastrando->salvar($cadastrando);
if($retorno)
{
    echo"com sucesso";
}


