<?php
include_once '../class/Produtos.class.php';
$pro=new Produtos();
$pro->setNome($_GET['nome']);
$pro->setValor($_GET['valor']);
$pro->setTipo($_GET['tipo']);
$pro->setDescricao($_GET['descricao']);
$pro->setQuantidade($_GET['quantidade']);
$pro->setStatus($_GET['status']);
$nome=$_FILES["imagem"]["name"];
$nometemporario=$_FILES["imagem"]["tmp_name"];
$destino="../imagem/".$nome;
if(move_uploaded_file($nometemporario,$destino)){
    echo "enviada com sucesso ";
}
$pro->setImagem($nome);
$eu=$pro->adicionar($pro);
if ($eu) {
    echo "sucesso";    
}


