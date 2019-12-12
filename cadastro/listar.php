<?php
include_once '../administrador/topo.php';
include_once '../class/Cadastro.class.php';
$listando=new Cadastro();
$resultado = $listando->listas();
?>
<div  width='600px' style='margin-left: 23%; margin-top: 10%'>
<table border="1" width="1%" height="200%">
   <thead align="center"> 
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone do trabalho</th>
        <th>Telefone Pessoal</th>
        <th>Razão Social</th>
        <th>cnpjt</th>
        <th>Endereço</th>
        <th>Email</th>
        </thead>
    
   
    
    <tbody align="center">
        <?php
        foreach ($resultado as $linha){
            echo"<tr><td>".$linha->getIdusuario(':idusuario')."</td>";
            echo"<td>".$linha->getNome(':nome')."</td>";
            echo"<td>".$linha->getTelefonetra(':telefonetra')."</td>";
            echo"<td>".$linha->getTelefonepe(':telefonepe')."</td>";
            echo"<td>".$linha->getRazaosocial(':razaosocial')."</td>";
            echo"<td>".$linha->getCnpjt(':cnpjt')."</td>";
            echo"<td>".$linha->getEndereco(':endereco')."</td>";
            echo"<td>".$linha->getEmail(':email')."</td>";
            echo"<td><a href='../cadastro/editar.php?idusuario=".$linha->getIdusuario(':Idusuario')."'>editar</a></td>";
            echo"<td><a href='../cadastro/excluir.php?idusuario=".$linha->getIdusuario(':Idusuario')."'>excluir</a></td></tr>";
           
        }
        ?>
    </tbody>
</table>
</div>
<?php
include_once '../administrador/rodape.php';
