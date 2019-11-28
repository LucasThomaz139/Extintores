<?php

include_once '../cliente/topo.php';
include_once '../class/Empresa.class.php';
$emp=new Empresa();
$noss=$emp->lista();
?>
<div id="informacao" width='400px'>
    <table>
    <table>
        <tbody>
            <?php
            foreach ($noss as $emp) {
                echo "<tr><td>".$emp['informacao']."</td></tr>";
               
            }
            ?>
               
        </tbody>
    </table>
</table>
</div>
<?php
            include_once '../cliente/rodape.php';