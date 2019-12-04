<?php
ob_start();
session_start();
include_once '../cliente/topo.php';
include_once '../class/Cadastro.class.php';

$cadastro=new Cadastro();
$cadastro->setCnpjt($_POST['cnpjt']);
//var_dump("ccc",$cadastro);


if(!isset($_SESSION['idusuario']))
{
   
    $resultado = $cadastro->busca($cadastro);
?>
<div  width='-50px' heigth='999px' style='margin-left: 310px;margin-right: 900px; margin-top: 10%;'>
<table   border="1">
   <thead> <tr>
        <th>Código</th>
        <th>Nome</th>
       <th>Endereço</th>
       <th>Email</th>
        <th>logar</th>
       
    </tr>
    
    <tbody>
        <?php
        foreach ($resultado as $cadastro){
            
            //var_dump("aaaaaa", $cadastro);
            echo"<tr><td>".$cadastro['idusuario']."</td>";
            echo"<td>".$cadastro['nome']."</td>";
            echo"<td>".$cadastro['endereco']."</td>";
            echo"<td>".$cadastro['email']."</td>";
            echo"<td><a href='email.php?idusuario=".$cadastro['idusuario']."'>logar</a></td>";
            
        }
        ?>
    </tbody>
</table>
</div>
<?php
}
else
    {
    $resultado = $cadastro->busca($cadastro);
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
       
    </tr>
    
    <tbody>
        <?php
        foreach ($resultado as $cadastro){
            
            //var_dump("aaaaaa", $cadastro);
            echo"<tr><td>".$cadastro['idusuario']."</td>";
            echo"<td>".$cadastro['nome']."</td>";
            echo"<td>".$cadastro['telefonetra']."</td>";
            echo"<td>".$cadastro['telefonepe']."</td>";
            echo"<td>".$cadastro['razaosocial']."</td>";
            echo"<td>".$cadastro['cnpjt']."</td>";
            echo"<td>".$cadastro['endereco']."</td>";
            echo"<td>".$cadastro['email']."</td>";
           
            echo"<td><a href='ediusu.php?idusuario=".$cadastro['idusuario']."'>editar</a></td>";
            
        }
        ?>
    </tbody>
</table>
</div>
<?php
}
include_once '../cliente/rodape.php';
include_once '../cliente/rodape.php';





