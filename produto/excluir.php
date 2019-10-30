<?php

include_once '../class/Produtos.class.php';
$pro=new Produtos();
$pro->setIdprodutos($_GET["idprodutos"]);
$pormo=$pro->excluir($pro);

