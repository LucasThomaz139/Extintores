<?php
include_once '../class/Detalhe.class.php';
include_once '../class/Produtos.class.php';
include_once '../class/Agendamento.class.php';
include_once '../class/Cadastro.class.php';
$pro= new Produtos();
$ret=$pro->lista($pro);
$cas= new Cadastro();
$bem=$cas->lista($cas);
$age= new Agendamento();
$bom=$age->lista();
?>
<form method="GET" action="adicionarok.php">
    Produto:<select  name="produto_idprodutos">
                        <option value="">selecionar</option>
                <?php
                        foreach($ret as $linha)
                        {
                            echo "<option value='{$linha->getIdprodutos()}'>".$linha->getNome()."</option>";
                        }
                        ?>
                        </select><br>
                        
    Serviços:<select  name="cadastro_idcadastro">
                        <option value="">selecionar</option>
                <?php
                        foreach($bem as $linha)
                        {
                            echo "<option value='{$linha->getIdcadastro()}'>".$linha->getNome()."</option>";
                        }
                        ?>
                        </select><br>
                        
    Agendamento:<select  name="agendamento_idagendamento">
                        <option value="">selecionar</option>
                <?php
                        foreach($bom as $linha)
                        {
                            echo "<option value='{$linha->getIdagendamento()}'>".$linha->getData()."</option>";
                        }
                        ?>
                        </select><br>
                        quantidade<input type="number" name="quantidade">
                        detalhe<input type="text" name="detalhe">
                        valor<input type="number" name="valor">
                        <input type="submit" value="enviar">
</form>

