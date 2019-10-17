<?php



include_once'../class/Cadastro.class.php';
$cadastrando=new Cadastro();
$cadastrando->setIdusuario($_GET['idusuario']);
$retorno=$cadastrando->verificador($cadastrando);

?>
 
 <form method="POST" action="../cadastro/editarok.php">
    nome:<input type="text" name="nome" value="<?php echo $retorno->getNome()?>">
    telefone trabalho:<input type="number" name="telefonetra" value="<?php echo $retorno->getTelefonetra()?>">
    telefone pessoal:<input type="number" name="telefonepe" value="<?php echo $retorno->getTelefonepe()?>">
    telefone pessoal:<input type="text" name="razaosocial" value="<?php echo $retorno->getRazaosocial()?>">
    telefone pessoal:<input type="text" name="cnpjt" value="<?php echo $retorno->getCnpjt()?>">
    endereço:<input type="text" name="endereco" value="<?php echo $retorno->getEndereco()?>">
    email:<input type="email" name="email" value="<?php echo $retorno->getEmail()?>">
    Senha:<input type="password" name="senha" value="<?php echo $retorno->getSenha()?>">
    <input type="hidden" name="idusuario" value="<?php echo $retorno->getIdusuario()?>"/>
    <input type="submit"/>
 </form>
 

