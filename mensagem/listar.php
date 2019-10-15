<?php
include_once '../class/Mensagem.class.php';
$men= new Mensagem();
$nos=$men->lista();
print_r($nos);
?>
<table border="1">
   <thead> <tr>
        <th>Código</th>
        <th>Mensagem</th>
        <th>Avaliacao</th>
        
    </tr>
    
    <tbody>
        <?php
        foreach ($nos as $linha) {
            echo"<tr><td>".$linha->getIdmensagem(':idmensagem')."</td>";
            echo"<td>".$linha->getMensagem(':mensagem')."</td>";
            echo"<td>".$linha->getAvaliacao(':avaliacao')."</td>";
            echo"<td><a href='../mensagem/editar.php?idmensagem=".$linha->getIdmensagem(':idmensagem')."'>editar</a></td>";
            echo"<td><a href='../mensagem/excluir.php?idmensagem=".$linha->getIdmensagem(':idmensagem')."'>excluir</a></td></tr>";

        }
            
           
        
        ?>
    </tbody>
</table>


