<?php
include_once '../administrador/topo.php';
include_once '../class/Produtos.class.php';
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="POST" action="adicionarok.php" enctype="multipart/form-data">
    nome<input style="border: 1px solid black; display:block" type="text" name="nome">
    Valor<input style="border: 1px solid black; display:block" type="number" name="valor">
    Tipo<input style="border: 1px solid black; display:block" type="text" name="tipo">
    descrição<input style="border: 1px solid black; display:block" type="text" name="descricao">
    quantidade<input style="border: 1px solid black; display:block" type="number" name="quantidade">
    status <input style="border: 1px solid black; display:block" type="text" name="status">
    imagem<input style=" display:block" type="file" name="i">
    <input type="submit" value="enviar">
</form></div>
<?php
include_once '../administrador/rodape.php';