<?php
include_once '../administrador/topo.php';
include_once '../class/Mensagem.class.php';
$me= new Mensagem();
$me->setIdmensagem($_GET['idmensagem']);
//var_dump("men",$me);
$nos=$me->verificador($me);

?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="POST" action="editarok.php">
    Mensagem<input style="border: 1px solid black; display:block"  type="text" name="mensagem" value="<?php echo $nos['mensagem']?>">
    Avaliação<input style="border: 1px solid black; display:block"  type="text" name="avaliacao" value="<?php echo $nos['avaliacao']?>">
    <input type="hidden" name="idmensagem" value="<?php echo $nos['idmensagem']?>">
    <input type="submit" value="enviar"/>
</form></div>
<?php
include_once '../administrador/rodape.php';

