<?php

include_once '../class/Produtos.class.php';
$pro= new Produtos();
$pro->setIdprodutos($_GET['idprodutos']);
$novo=$pro->verificador($pro);
//var_dump($novo);
?>
<form method="POST" action="editarok.php">
    nome<input type="text" name="nome" value="<?php echo $novo['nome']?>"/>
    Valor<input type="number" name="valor" value="<?php echo $novo['valor']?>" />
    Tipo<input type="text" name="tipo" value="<?php echo $novo['tipo']?>"/>
    descrição<input type="text" name="descrisao" value="<?php echo $novo['descrisao']?>"/>
    quantidade<input type="number" name="quantidade" value="<?php echo $novo['quantidade']?>"/> 
    status <input type="text" name="status" value="<?php echo $novo['status']?>"/>
    imagem <input type="file" name="i" value="<?php echo $novo['imagem']?>"/>
     <input type="hidden" name="idprodutos" value="<?php echo $novo['idprodutos'];?>"/>
    <input type="submit"/>
</form>
