<div  width='600px' style='margin-left: 30%; margin-top: 10%'><option>lista do pedidos</option>
<?php
include_once '../administrador/topo.php';
include_once '../class/Usuariovendas.class.php';
include_once '../class/Vendas.class.php';
$objvendas=new vendas();


$objvendas->id_usuario=$_GET['id_usuario'];
$retorno=$objvendas->listar();
?>
  <div  width='600px' style='margin-left: 30%; margin-top: 10%'><option>Listar vendas</option>
    <table border="1">
        <thead>
             <th>código</th>
                <th>Agendamento</th>
                <th>Serviço</th>
                <th>Pagamento</th>
                <th>Cartão</th>
                <th>Quantidade</th>
                 
        <tbody>
            <?php
            foreach($retorno as $linha){
           echo"<tr>";
            echo "<td>".$linha['id']."</td>";
            echo "<td>".$linha['agendamento']."</td>";
            echo "<td>".$linha['servico']."</td>";
            echo "<td>".$linha['descricao']."</td>";
            echo "<td>".$linha['pagamento']."</td>";
            echo "<td>".$linha['cartao']."</td>";
            echo "<td>".$linha['quantidade']."</td>";
            echo"<td><a href='../vendausuario/vernomes.php?id=".$linha['id']."'>ver nomes</a></td>";
            echo"</tr>";
            }
            ?>
        </tbody>

    </table></div>
<?php
include_once '../administrador/rodape.php';
?></div>
