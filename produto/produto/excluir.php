<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
   header("location:listar.php");   

include_once '../administrador/topo.php';
include_once '../class/Produtos.class.php';
$pro=new Produtos();
$pro->setIdprodutos($_GET["idprodutos"]);
$re= $pro->excluir($pro);
if ($re) {
}
 else {
    var_dump($pro);
}
include_once '../administrador/rodape.php';
?></div>
