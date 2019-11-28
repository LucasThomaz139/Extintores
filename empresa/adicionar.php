<?php
include_once '../administrador/topo.php';
include_once '../class/Empresa.class.php';
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="GET" action="adicionarok.php">
    Informação da Empresa <input style="border: 1px solid black; display:block" type="text" name="informacao">
   
    <input type="submit" value="enviar">
</form></div>
<?php
include_once '../administrador/rodape.php';


