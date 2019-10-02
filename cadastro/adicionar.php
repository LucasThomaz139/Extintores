<?php
include_once '../class/Cadastro.class.php';
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="GET" action="adicionarok.php">
        nome:<input type="text" name="nome">
        telefone trabalho:<input type="number" name="telefonetra">
        telefone pessoal:<input type="number" name="telefonepe">
        Razão Social:<input type="text" name="razaosocial">
        cnpjt:<input type="number" name="cnpjt">
        Endereço:<input type="text" name="endereco">
        Email:<input type="email" name="email">
        Senha:<input type="password" name="senha">
        <input type="submit" value="enviar">
        </form>
    </body>
</html>

