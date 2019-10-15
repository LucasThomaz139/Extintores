<?php

include_once '../class/Mensagem.class.php';
$men=new Mensagem();
$men->setIdmensagem($_GET['idmensagem']);
$nos=$men->verificador($men);
?>
<form method="POST" action="editarok.php">
    Mensagem<input type="text" name="mensagem" value="<?php echo $nos->getMensagem()?>">
    Avaliação<input type="text" name="avaliacao" value="<?php echo $nos->getAvaliacao()?>">
    <input type="hidden" name="idmensagem" value="<?php echo $nos->getIdmensagem()?>"/>
    <input type="submit" value="enviar"/>
</form>

