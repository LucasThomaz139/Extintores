<?php
include_once "../class/Agendamento.class.php";
$agencia=new Agendamento();
$ros=$agencia->lista();

?>
<body>
    <table>
        <thead>
           <tr>
               <th>código</th>
                <th>nome</th>
                <th>data</th>
                <th>descricao</th>
                <th>hora</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //var_dump($ros);
            foreach ($ros as $agencia)
            {
            echo"<tr>";
            echo "<td>".$agencia['idagendamento']."</td>";
            echo "<td>".$agencia['cadastro_idusuario']."</td>";
            echo "<td>".$agencia['data']."</td>";
            echo "<td>".$agencia['descricao']."</td>";
            echo "<td>".$agencia['hora']."</td>";
            echo"<td><a href='../agendamento/editar.php?idagendamento=" . $agencia ['idagendamento']. "'>editar</a></td>";
            echo"<td><a href='../agendamento/excluir.php?idagendamento=" . $agencia ['idagendamento']. "'>excluir</a></td></tr>";
            echo "</tr>";
            
           }
            ?>
        </tbody>
    </table>
</body>

