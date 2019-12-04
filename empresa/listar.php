<?php

include_once '../administrador/topo.php';
include_once '../class/Empresa.class.php';
$emp=new Empresa();
$noss=$emp->lista();
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%'>
    <table>
    <table>
        <tbody>
            <?php
            foreach ($noss as $emp) {
                echo "<tr><td>".$emp['informacao']."</td>";
                echo"<td><a href='../empresa/editar.php?id=".$emp['id']."'>editar</a></td>";
            echo"<td><a href='../empresa/excluir.php?id=".$emp['id']."'>excluir</a></td></tr>";
            }
            ?>
               
        </tbody>
    </table>
</table>
</div>
<?php
            include_once '../administrador/rodape.php';