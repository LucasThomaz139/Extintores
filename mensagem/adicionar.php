<?php
include_once '../administrador/topo.php';
include_once '../class/Mensagem.class.php';
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="GET" action="adiconarok.php">
    mensagem<textarea style="border: 1px solid black; display:block" type="text" name="mensagem"></textarea>   
    Avaliação<input style="border: 1px solid black; display:block" type="text" name="avaliacao">   
    <input type="submit" value="enviar">
<form></div>
<?php
include_once '../administrador/rodape.php';

