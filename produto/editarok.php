<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 header("Location:listar.php");
include_once '../administrador/topo.php';
include_once '../class/Produtos.class.php';
$pro= new Produtos();
$pro->setIdprodutos($_POST['idprodutos']);
$pro->setNome($_POST['nome']);
$pro->setValor($_POST['valor']);
$pro->setTipo($_POST['tipo']);
$pro->setDescricao($_POST['descrisao']);
$pro->setQuantidade($_POST['quantidade']);
$pro->setStatus($_POST['status']);
$nome=$_FILES["i"]["name"];
//$nometemporario=$_FILES["i"]["tmp_name"];
//$destino="../imagem/".$nome;
//if(move_uploaded_file($nometemporario,$destino)){
//    echo "enviada com sucesso ";
//}
$pro->setImagem($_POST['i']);
$re=$pro->salvar($pro);

include_once '../administrador/rodape.php';
?></div>