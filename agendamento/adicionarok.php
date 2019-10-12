<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setCadastro_usuario($_GET['cadastro_usuario']);
$agencia->setData($_GET['data']);
$agencia->setHora($_GET['hora']);
$agencia->setDescricao($_GET['descricao']);
$agencia->adicionar($agencia);
var_dump($agencia);
