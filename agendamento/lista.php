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
            
            foreach ($ros as $linhas)
            {
            echo"<tr>";
            echo "<td>".$linhas->getIdagendamento(':idagendamento')."</td>";
            echo "<td>".$linhas->getCadastro_usuario(':cadastro_idusuario')."</td>";
            echo "<td>".$linhas->getData(':data')."</td>";
            echo "<td>".$linhas->getDescricao(':descricao')."</td>";
            echo "<td>".$linhas->getHora(':hora')."</td>";
            echo"<td><a href='../agendamento/editar.php?idagendamento=" . $linhas->getIdagendamento(':idagendamento') . "'>editar</a></td>";
            echo"<td><a href='../agendamento/excluir.php?idagendamento=" . $linhas->getIdagendamento(':idagendamento') . "'>excluir</a></td></tr>";
            echo "</tr>";
            
           }
            ?>
        </tbody>
    </table>
</body>

