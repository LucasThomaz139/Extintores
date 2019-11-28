<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
include_once '../cliente/topo.php';
include_once '../class/Cadastro.class.php';

$en= new Cadastro();

$en->setEmail($_POST["email"]);

$retorno=$en->enviar_email($en);

if($retorno){
    echo "Senha enviada para o seu email cadastrado. Aguarde um instante e tente logar novamente";
} else{
    echo "Email incorreto ou não cadastrado no sistema.";
}
include_once '../cliente/rodape.php';
?>
</div>