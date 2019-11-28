<?php
ob_start();

include_once '../cliente/topo.php';
include_once '../class/Cadastro.class.php';

$cadastro=new Cadastro();
$cadastro->setCnpjt($_GET['cnpjt']);
$resultado=$cadastro->busca($cadastro);

//var_dump($resultado);
?>
<div  width='-50px' heigth='999px' style='margin-left: 310px;margin-right: 900px; margin-top: 10%;'>
<table   border="1">
   <thead> <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone do trabalho</th>
        <th>Telefone Pessoal</th>
        <th>Razão Social</th>
        <th>cnpjt</th>
        <th>Endereço</th>
        <th>Email</th>
        <th>Senha</th>
    </tr>
    
    <tbody>
        <?php
        foreach ($resultado as $linha){
            
            //var_dump("aaaaaa", $linha);
            echo"<tr><td>".$linha['idusuario']."</td>";
            echo"<td>".$linha['nome']."</td>";
            echo"<td>".$linha['telefonetra']."</td>";
            echo"<td>".$linha['telefonepe']."</td>";
            echo"<td>".$linha['razaosocial']."</td>";
            echo"<td>".$linha['cnpjt']."</td>";
            echo"<td>".$linha['endereco']."</td>";
            echo"<td>".$linha['email']."</td>";
            echo"<td>".$linha['senha']."</td>";
            echo"<td><a href='ediusu.php?idusuario=".$linha['idusuario']."'>editar</a></td>";
            
        }
        ?>
    </tbody>
</table>
</div>
<?php
include_once '../cliente/rodape.php';
include_once '../cliente/rodape.php';





