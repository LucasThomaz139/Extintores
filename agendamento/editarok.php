<?php

include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setIdagendamento($_POST['idagendamento']);
$agencia->setCadastro_usuario($_POST['cadastro_usuario']);
$agencia->setData($_POST['data']);
$agencia->setDescricao($_POST['descricao']);
$agencia->setHora($_POST['hora']);
$eu=$agencia->salvar($agencia);
if($eu)
{
    echo"com sucesso";
   
    
}
