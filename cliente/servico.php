<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../cliente/topo.php';
include_once '../class/Servico.class.php';
$ser=new Servico();
$noss=$ser->lista();
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%'>
<table>
    <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Descricao</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($noss as $ser) {
                echo "<tr><td>".$ser['idservico']."</td>";
                echo "<td>".$ser['nome']."</td>";
                echo "<td>".$ser['valor']."</td>";
                echo "<td>".$ser['descricao']."</td>";
                
            }
            ?>
               
        </tbody>
    </table>
</table>
</div>
<?php
            include_once '../cliente/rodape.php';

