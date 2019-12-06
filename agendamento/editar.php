<?php
   include_once '../administrador/topo.php';
    include_once '../class/Agendamento.class.php';
    include_once '../class/Cadastro.class.php';

    $agencia = new Agendamento();
    $agencia->setIdagendamento($_GET['idagendamento']);
    $novo=$agencia->verificador($agencia);
    
    //var_dump($novo);
   
    $usuario=new Cadastro();
    $eu=$usuario->listas();
    
    //var_dump($eu);
    ?>
<div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
<form method="POST" action="../agendamento/editarok.php">
    cliente<select style="border: 1px solid black; display:block" name="cadastro_idusuario">
                <option value="">selecionar</option>
                <?php
                    foreach($eu as $usuario)
                    {
                        echo "<option value='{$usuario->getIdusuario()}'>".$usuario->getNome()."</option>";
                    }
                ?>
            </select>
   Data: <input style="border: 1px solid black; display:block" type="date" name="data" value="<?php echo $novo['data']?>"/>
   descrição:<textarea style="border: 1px solid black; display:block" type="text" name="descricao" ><?php echo $novo['descricao']?></textarea>
    Hora:<input style="border: 1px solid black; display:block" type="time" name="hora" value="<?php echo $novo['hora']?>"/>
    <input style="border: 1px solid black;" type="hidden" name="idagendamento" value="<?php echo $novo['idagendamento']?>"/>
    <input style="border: 1px solid black;"  type="submit"/>
    
</form>
 </div>
<?php
include_once '../administrador/rodape.php';

