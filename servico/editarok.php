<?php

include_once '../class/Servico.class.php';
$ser= new Servico();
$ser->setNome($_POST['nome']);
$ser->setValor($_POST['valor']);
$ser->setDescricao($_POST['descricao']);
$sal=$ser->salvar($ser);

