<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<?php
 ob_start();
//include_once '../administrador/topo.php';
include_once '../class/Servico.class.php';
$ser = new Servico();
$ser->setIdservico($_GET["idservico"]);
//var_dump($ser);
$acabou = $ser->excluir($ser);
var_dump($acabou);
if($acabou){
    header("Location:listar.php");
}

//include_once '../administrador/rodape.php';
?>
</div>

