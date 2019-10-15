<?php

include_once '../class/Servico.class.php';
$ser=new Servico();
$ser->setIdservico($_GET['idservico']);
$retorno=$ser->verificador();
?>
<form method="POST" action="editarok.php">
    Nome<input type="text" name="nome" value="<?php echo $retorno->getNome()?>">
    Valor<input type="number" name="valor" value="<?php echo $retorno->getValor()?>">
    Descrição<input type="text" name="descricao" value="<?php echo $retorno->getDescricao()?>">
    <input type="hidden" name="idservico" value="<?php echo $retorno->getIdservico()?>"/>
    <input type="submit"/>
</form>

