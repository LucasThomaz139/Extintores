<?php

include_once '../class/Agendamento.class.php';
$age= new Agendamento();
$agencia=$age->lista();
?>
<body>

<h3 class="d">agendamento</h3>
    <table border="1">
        <thead>
           <tr>
               <th>código</th>
                <th>nome</th>
                <th>data</th>
                <th>descricao</th>
                <th>hora</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //var_dump($ros);
            foreach ($agencia as $age)
            {
            echo"<tr>";
            echo "<td>".$age['idagendamento']."</td>";
            echo "<td>".$age['cadastro_idusuario']."</td>";
            echo "<td>".$age['data']."</td>";
            echo "<td>".$age['descricao']."</td>";
            echo "<td>".$age['hora']."</td>";
            echo "<td>".$age['status']."</td>";
            echo"<td><a href='../agendamento/editar.php?idagendamento=" . $age ['idagendamento']. "'>editar</a></td>";
            echo"<td><a href='../agendamento/excluir.php?idagendamento=" . $age ['idagendamento']. "'>excluir</a></td></tr>";
            echo "</tr>";
            
           }
            ?>
        </tbody>
    </table>