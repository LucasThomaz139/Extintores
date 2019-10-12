<?php
include_once "../class/Agendamento.class.php";
$agencia=new Agendamento();
$resultados = $agencia->lista($agencia);
var_dump($resultados);
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
            
            foreach ($resultados as $linhas)
            {
            echo"<tr>";
            echo "<td>".$linhas->getIdagendamento()."</td>";
            echo "<td>".$linhas->getCadastro_usuario()."</td>";
            echo "<td>".$linhas->getData()."</td>";
            echo "<td>".$linhas->getDescricao()."</td>";
            echo "<td>".$linhas->getHora()."</td>";
            echo "</tr>";
            
           }
            ?>
        </tbody>
    </table>
</body>

