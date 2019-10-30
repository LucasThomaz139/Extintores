<?php

include_once '../class/Servico.class.php';
$ser=new Servico();
$ser->setIdservico($_GET['idservico']);
$retorno=$ser->verificador($ser);
?>
<form method="POST" action="editarok.php">
    Nome<input type="text" name="nome" value="<?php echo $retorno['nome']?>"/>
    Valor<input type="number" name="valor" value="<?php echo $retorno['valor']?>"/>
    Descrição<input type="text" name="descricao" value="<?php echo $retorno['descricao']?>"/>
    <input type="hidden" name="idservico" value="<?php echo $retorno['idservico']?>"/>
    <input type="submit"/>
</form>

