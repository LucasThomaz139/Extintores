<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../class/Servico.class.php';
$ser=new Servico();
$noss=$ser->lista($ser);
?>
<table>
    <table>
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
                echo "<tr><td>".$ser->getIdservico(':idservico')."</td>";
                echo "<td>".$ser->getNome(':nome')."</td>";
                echo "<td>".$ser->getValor(':valor')."</td>";
                echo "<td>".$ser->getDescricao(':descricao')."</td>";
                echo"<td><a href='../servico/editar.php?idservico=".$ser->getIdservico('idservico')."'>editar</a></td>";
            echo"<td><a href='../servico/excluir.php?idservico=".$ser->getIdservico('idservico')."'>excluir</a></td></tr>";
            }
            ?>
               
        </tbody>
    </table>
</table>