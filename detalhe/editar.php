<?php

include_once '../class/Detalhe.class.php';
include_once '../class/Produtos.class.php';
include_once '../class/Servico.class.php';
include_once '../class/Agendamento.class.php';
$de=new Detalhe();
$de->setIddetalhe($_GET['iddetalhe']);
$den=$de->verificador($de);
//var_dump($de);

$listados=new Produtos();
$lisproduto=$listados->listas($listados);

$listado=new Servico();
$bem=$listado->lista();

$age= new Agendamento();
$bom=$age->lista();
?>
<form method="POST" action="editarok.php">
    Produto:<input type="text" disabled value="<?php echo $den['produtos_idprodutos'] ?>"/><select  name="produtos_idprodutos">
                        <option value="">selecionar</option>
                <?php
                        foreach($lisproduto as $listados)
                        {
                            echo "<option value='".$listados['idprodutos']."'>".$listados['nome']."</option>";
                        }
                        ?>
                        </select><br>
                        
    Serviços:<input type="text" disabled value="<?php echo $den['servico_idservico'] ?>"/><select  name="servico_idservico">
                        <option value="">selecionar</option>
                <?php
                        foreach($bem as $listado)
                        {
                            echo "<option value='".$listado['idservico']."'>".$listado['nome']."</option>";
                        }
                        ?>
                        </select><br>
                        
    Agendamento:<input type="text" disabled value="<?php echo $den['agendamento_idagendamento'] ?>"/><select  name="agendamento_idagendamento">
                        <option value="">selecionar</option>
                            <?php
                                foreach($bom as $age)
                                {
                                    echo "<option value='".$age['idagendamento']."'>".$age['data']."</option>";
                                }
                            ?>
                        </select><br>
                        quantidade<input type="number" name="quantidade" value="<?php echo $den['quantidade']?>"/>
                        detalhe<input type="text" name="detalhe" value="<?php echo $den['detalhe']?>"/>
                        valor<input type="number" name="valor" value="<?php echo $den['valor']?>"/>
                        <input type="hidden" name="iddetalhe" value="<?php echo $den['iddetalhe'];?>"/>
                        <input type="submit" value="enviar">