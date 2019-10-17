<?php
include_once '../class/Produtos.class.php';
$listado = new Produtos();
var_dump($listado);
$resultado = $listado->listas();
?>
<table>
            <thead>
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
            </thead>
            <tbody>
            
                <?php
                var_dump($resultado);
                foreach($resultado as $listado){
                    echo"<tr>";
                    echo"<td>".$listado['idprodutos']."</td>";
                    echo"<td>".$listado['nome']."</td>";
                    echo"<td>".$listado['valor']."</td>";
                    echo"<td>".$listado['tipo']."</td>";
                    echo"<td>".$listado['descricao']."</td>";
                    echo"<td>".$listado['quantidade']."</td>";
                    echo"<td>".$listado['status']."</td>";
                    echo"<td>".$listado['imagem']."</td>";
                    echo"<td><a href='../produto/editar.php?idprodutos=" . $listado ['idprodutos']. "'>editar</a></td>";
            echo"<td><a href='../agendamento/excluir.php?idagendamento=" . $listado ['idprodutos']. "'>excluir</a></td></tr>";
                echo"</tr>";
                
                }
                ?>
            </tbody>
                
           
</table>

 