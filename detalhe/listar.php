<?php
include_once '../administrador/topo.php';
include_once '../class/Detalhe.class.php';
$de= new Detalhe();
$den=$de->lista($de);
//var_dump($den);
?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<table border="1">
   <thead> <tr>
        <th>Código</th>
        <th>Produto</th>
        <th>Serviço</th>
        <th>agendamento</th>
        <th>Quantidade</th>
        <th>Detalhe</th>
        <th>Valor</th>
        
    </tr>
    
    <tbody>
        <?php
        foreach ($den as $de) {
            echo"<tr><td>".$de['iddetalhe']."</td>";
            echo"<td>".$de['produtos_idprodutos']."</td>";
            echo"<td>".$de['servico_idservico']."</td>";
            echo"<td>".$de['agendamento_idagendamento']."</td>";
            echo"<td>".$de['quantidade']."</td>";
            echo"<td>".$de['detalhe']."</td>";
            echo"<td>".$de['valor']."</td>";
            echo"<td><a href='../detalhe/editar.php?iddetalhe=".$de['iddetalhe']."'>editar</a></td>";
            echo"<td><a href='../detalhe/excluir.php?iddetalhe=".$de['iddetalhe']."'>excluir</a></td></tr>";

        }
            
           
        
        ?>
    </tbody>
</table></div>
<?php
include_once '../administrador/rodape.php';
