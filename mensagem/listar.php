<?php
include_once '../administrador/topo.php';
include_once '../class/Mensagem.class.php';
$men= new Mensagem();
$nos=$men->lista();
//print_r($nos);
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%'>
<table border="1">
   <thead> <tr>
        <th>Código</th>
        <th>Mensagem</th>
        <th>Avaliacao</th>
        
    </tr>
    
    <tbody>
        <?php
        foreach ($nos as $men) {
            echo"<tr><td>".$men['idmensagem']."</td>";
            echo"<td>".$men['mensagem']."</td>";
            echo"<td>".$men['avaliacao']."</td>";
            echo"<td><a href='../mensagem/editar.php?idmensagem=".$men['idmensagem']."'>editar</a></td>";
            echo"<td><a href='../mensagem/excluir.php?idmensagem=".$men['idmensagem']."'>excluir</a></td></tr>";

        }
            
           
        
        ?>
    </tbody>
</table>
</div>
<?php
include_once '../administrador/rodape.php';

