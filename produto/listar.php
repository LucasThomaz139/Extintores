<?php
include_once '../administrador/topo.php';
include_once '../class/Produtos.class.php';
$listado = new Produtos();
$resultado = $listado->listas();
?>
<div  width='600px' style='margin-left: 30%; margin-right: 10%; margin-top: 10%'>
<table border="1">
            
                <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Status</th>
                        <th>Imagem</th>
                    
                </tr>                   
                <?php
                //var_dump($resultado);
                foreach($resultado as $listado){
                    echo"<tr>";
                    echo"<td>".$listado['idprodutos']."</td>";
                    echo"<td>".$listado['nome']."</td>";
                    echo"<td>".$listado['valor']."</td>";
                    echo"<td>".$listado['tipo']."</td>";
                    echo"<td>".$listado['descrisao']."</td>";
                    echo"<td>".$listado['quantidade']."</td>";
                    echo"<td>".$listado['status']."</td>";
                    echo"<td width='100px' heigth='100px'><img width='80px' heigth='80px'src='../imagem/".$listado['imagem']."'/></td>";
                    echo"<td><a href='../produto/editar.php?idprodutos=" . $listado ['idprodutos']. "'>editar</a></td>";
                    echo"<td><a href='../produto/excluir.php?idprodutos=" . $listado ['idprodutos']. "'>excluir</a></td></tr>";  
                }
                ?>           
</table>
</div>
<?php
include_once '../administrador/rodape.php';
 