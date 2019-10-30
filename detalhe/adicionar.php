<?php
include_once '../class/Detalhe.class.php';
include_once '../class/Produtos.class.php';
include_once '../class/Agendamento.class.php';
include_once '../class/Servico.class.php';
$listados=new Produtos();
$lisproduto=$listados->listas($listados);
$listado=new Servico();
$bem=$listado->lista();
$age= new Agendamento();
$bom=$age->lista();
?>
<form method="GET" action="adicionarok.php">
    Produto:<select  name="produtos_idprodutos">
                        <option value="">selecionar</option>
                <?php
                        foreach($lisproduto as $listados)
                        {
                            echo "<option value='{ $listados->getIdprodutos()}'>".$listados['nome']."</option>";
                        }
                        ?>
                        </select><br>
                        
    Serviços:<select  name="servico_idservico">
                        <option value="">selecionar</option>
                <?php
                        foreach($bem as $listado)
                        {
                            echo "<option value='{ $listado->getIdservico()}'>".$listado['nome']."</option>";
                        }
                        ?>
                        </select><br>
                        
    Agendamento:<select  name="agendamento_idagendamento">
                        <option value="">selecionar</option>
                            <?php
                                foreach($bom as $age)
                                {
                                    echo "<option value='{ $age->getIdagendamento()}'>".$age['data']."</option>";
                                }
                            ?>
                        </select><br>
                        quantidade<input type="number" name="quantidade">
                        detalhe<input type="text" name="detalhe">
                        valor<input type="number" name="valor">
                        <input type="submit" value="enviar">
</form>

