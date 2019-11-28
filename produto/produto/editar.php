<?php
include_once '../administrador/topo.php';
include_once '../class/Produtos.class.php';
$pro= new Produtos();
$pro->setIdprodutos($_GET['idprodutos']);
$novo=$pro->verificador($pro);
//var_dump($novo);
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="POST" action="editarok.php">
    Nome    <input style="border: 1px solid black; display:block" type="text" name="nome" value="<?php echo $novo['nome']?>"/>
    Valor   <input style="border: 1px solid black; display:block" type="number" name="valor" value="<?php echo $novo['valor']?>" />
    Tipo    <input style="border: 1px solid black; display:block" type="text" name="tipo" value="<?php echo $novo['tipo']?>"/>
    Descrição<input style="border: 1px solid black; display:block" type="text" name="descrisao" value="<?php echo $novo['descrisao']?>"/>
    Quantidade <input style="border: 1px solid black; display:block" type="number" name="quantidade" value="<?php echo $novo['quantidade']?>"/> 
    Status  <input style="border: 1px solid black; display:block" type="text" name="status" value="<?php echo $novo['status']?>"/>
    Imagem  <input style="display:block" type="file" name="i" value="<?php echo $novo['imagem']?>"/><br>
     <input style="border: 1px solid black" type="hidden" name="idprodutos" value="<?php echo $novo['idprodutos'];?>"/><br>
    <input style="border: 1px solid black" type="submit"/>
</form></div>
<?php
include_once '../administrador/rodape.php';