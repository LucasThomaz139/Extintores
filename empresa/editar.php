<?php
include_once '../administrador/topo.php';
include_once '../class/Empresa.class.php';
$emp=new Empresa();
$emp->setId($_GET['id']);
$retorno=$emp->verificador($emp);
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="POST" action="editarok.php">
    Nome<input style="border: 1px solid black; display:block" type="text" name="informacao" value="<?php echo $retorno['informacao']?>"/>
   
    <input type="hidden" name="id" value="<?php echo $retorno['id']?>"/>
    <input type="submit"/>
</form></div>
<?php
include_once '../administrador/rodape.php';

