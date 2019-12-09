<?php

include_once '../class/Cadastro.class.php';

$en= new Cadastro();

$en->setEmail($_POST["email"]);

$retorno=$en->enviar_email($en);

if($retorno){
    echo "Senha enviada para o seu email cadastrado. Aguarde um instante e tente logar novamente";
} else{
    echo "Email incorreto ou não cadastrado no sistema.";
}


