<?php
include_once '../administrador/topo.php';
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
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="GET" action="adicionarok.php">
    Produto:<select   style="border: 1px solid black; display:block" name="produtos_idprodutos">
                        <option value="">selecionar</option>
                <?php
                        foreach($lisproduto as $listados)
                        {
                            echo "<option value='" .$listados['idprodutos']."'>".$listados['nome']."</option>";
                        }
                        ?>
                        </select><br>
                        
    Serviços:<select style="display:block" name="servico_idservico">
                        <option value="">selecionar</option>
                <?php
                        foreach($bem as $listado)
                        {
                            echo "<option value='".$listado['idservico']."'>".$listado['nome']."</option>";
                        }
                        ?>
                        </select><br>
                        
    Agendamento:<select <select style="display:block" name="agendamento_idagendamento">
                        <option value="">selecionar</option>
                            <?php
                                foreach($bom as $age)
                                {
                                    echo "<option value='".$age['idagendamento']."'>".$age['data']."</option>";
                                }
                            ?>
                        </select><br>
                        quantidade<input style="border: 1px solid black; display:block" type="number" name="quantidade">
                        detalhe<input style="border: 1px solid black; display:block" type="text" name="detalhe">
                        valor<input style="border: 1px solid black; display:block" type="number" name="valor">
                        <input type="submit" value="enviar">
</form>
</div>
<?php
include_once '../administrador/rodape.php';

