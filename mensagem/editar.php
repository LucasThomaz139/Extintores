<?php

include_once '../class/Mensagem.class.php';
$me= new Mensagem();
$me->setIdmensagem($_GET['idmensagem']);
//var_dump("men",$me);
$nos=$me->verificador($me);
var_dump($nos);
?>
<form method="POST" action="editarok.php">
    Mensagem<input type="text" name="mensagem" value="<?php echo $nos['mensagem']?>">
    Avaliação<input type="text" name="avaliacao" value="<?php echo $nos['avaliacao']?>">
    <input type="hidden" name="idmensagem" value="<?php echo $nos['idmensagem']?>">
    <input type="submit" value="enviar"/>
</form>

