<?php
include_once '../class/Produtos.class.php';
?>
<form method="GET" action="adicionarok.php">
    nome<input type="text" name="nome">
    Valor<input type="number" name="valor">
    Tipo<input type="text" name="tipo">
    descrição<input type="text" name="desccricao">
    quantidade<input type="number" name="quantidade">
    status <input type="text" name="status">
    imagem<input type="file" name="imagem">
    <input type="submit" value="enviar">
</form>

