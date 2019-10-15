<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../class/Agendamento.class.php';
$agencia=new Agendamento();
$agencia->setCadastro_idusuario($_GET['cadastro_idusuario']);
$agencia->setData($_GET['data']);
$agencia->setDescricao($_GET['descricao']);
$agencia->setHora($_GET['hora']);
$agencia->adicionar($agencia);
var_dump($agencia);
