<?php
include_once '../class/Produtos.class.php';
?>
<form method="POST" action="adicionarok.php" enctype="multipart/form-data">
    nome<input type="text" name="nome">
    Valor<input type="number" name="valor">
    Tipo<input type="text" name="tipo">
    descrição<input type="text" name="descricao">
    quantidade<input type="number" name="quantidade">
    status <input type="text" name="status">
    imagem<input type="file" name="i">
    <input type="submit" value="enviar">
</form>

