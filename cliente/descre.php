<?php

include_once '../cliente/topo.php';
include_once '../class/Produtos.class.php';
$listado = new Produtos();
$listado->setIdprodutos($_GET['idprodutos']);
$retorno=$listado->listar($listado);
//var_dump("retorno",$retorno)

?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%'>
    <a href="index.php"> <button href="index.php"><-voltar</button></a>
    <table border="1">

        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Tipo</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            
            <th>Imagem</th>
        </tr>                   
        <?php
        //var_dump($resultado);
        foreach($retorno as $listado) {
            
            echo"<tr>";
            echo"<td>" . $listado['idprodutos'] . "</td>";
            echo"<td>" . $listado['nome'] . "</td>";
            echo"<td>" . $listado['valor'] . "</td>";
            echo"<td>" . $listado['tipo'] . "</td>";
            echo"<td>" . $listado['descrisao'] . "</td>";
            echo"<td>" . $listado['quantidade'] . "</td>";
          
            echo"<td><img width='50px' heigth='50px'src='../imagem/" . $listado['imagem'] . "'/></td></tr>";
        }
        ?>           
    </table>
   <a href="index.php"> <button href="index.php"><-voltar</button></a>
</div>
<?php
include_once '../cliente/rodape.php';


