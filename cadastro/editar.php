<?php
include_once '../administrador/topo.php';
include_once'../class/Cadastro.class.php';
$cadastrando=new Cadastro();
$cadastrando->setIdusuario($_GET['idusuario']);
$retorno=$cadastrando->verificador($cadastrando);

?>
 <div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
 <form method="POST" action="../cadastro/editarok.php">
    nome:<input style="border: 1px solid black; display:block" type="text" name="nome" value="<?php echo $retorno->getNome()?>">
    telefone trabalho:<input  style="border: 1px solid black; display:block" type="number" name="telefonetra" value="<?php echo $retorno->getTelefonetra()?>">
    telefone pessoal:<input style="border: 1px solid black; display:block" type="number" name="telefonepe" value="<?php echo $retorno->getTelefonepe()?>">
    telefone pessoal:<input style="border: 1px solid black; display:block" type="text" name="razaosocial" value="<?php echo $retorno->getRazaosocial()?>">
    telefone pessoal:<input style="border: 1px solid black; display:block" type="text" name="cnpjt" value="<?php echo $retorno->getCnpjt()?>">
    endereço:<input style="border: 1px solid black; display:block" type="text" name="endereco" value="<?php echo $retorno->getEndereco()?>">
    email:<input style="border: 1px solid black; display:block" type="email" name="email" value="<?php echo $retorno->getEmail()?>">
    <input style="border: 1px solid black; display:block" type="hidden" name="idusuario" value="<?php echo $retorno->getIdusuario()?>"/>
    <input style="border: 1px solid black; display:block" type="submit"/>
 </form>
 </div>
<?php
include_once '../administrador/rodape.php';

