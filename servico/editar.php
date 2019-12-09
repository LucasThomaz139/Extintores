<?php
include_once '../administrador/topo.php';
include_once '../class/Servico.class.php';
$ser=new Servico();
$ser->setIdservico($_GET['idservico']);
$retorno=$ser->verificador($ser);
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="POST" action="editarok.php">
    Nome<input style="border: 1px solid black; display:block" type="text" name="nome" value="<?php echo $retorno['nome']?>"/>
    Valor<input style="border: 1px solid black; display:block" type="number" name="valor" value="<?php echo $retorno['valor']?>"/>
    Descrição<input style="border: 1px solid black; display:block" type="text" name="descricao" value="<?php echo $retorno['descricao']?>"/>
    <input type="hidden" name="idservico" value="<?php echo $retorno['idservico']?>"/>
    <input type="submit"/>
</form></div>
<?php
include_once '../administrador/rodape.php';

