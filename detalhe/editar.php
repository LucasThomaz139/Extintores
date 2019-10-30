<?php

include_once '../class/Detalhe.class.php';
include_once '../class/Produtos.class.php';
include_once '../class/Servico.class.php';
include_once '../class/Agendamento.class.php';
$de=new Detalhe();
$de->setIddetalhe($_GET['iddetalhe']);
$den=$de->verificador($de);
var_dump($de);

$listados=new Produtos();
$lisproduto=$listados->listas($listados);
$listado=new Servico();
$bem=$listado->lista();
$age= new Agendamento();
$bom=$age->lista();
?>
<form method="POST" action="editarok.php">
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
                        quantidade<input type="number" name="quantidade" value="<?php echo $den['quantidade']?>"/>
                        detalhe<input type="text" name="detalhe" value="<?php echo $den['detalhe']?>"/>
                        valor<input type="number" name="valor" value="<?php echo $den['valor']?>"/>
                        <input type="hidden" name="iddetalhe" value="<?php echo $den['iddetalhe'];?>"/>
                        <input type="submit" value="enviar">