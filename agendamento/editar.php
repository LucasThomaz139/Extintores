<?php

    include_once '../class/Agendamento.class.php';
    include_once '../class/Cadastro.class.php';

    $agencia=new Agendamento();
    $agencia->setIdagendamento($_GET['idagendamento']);
    $novo=$agencia->verificador($agencia);
    
    //var_dump($novo);
   
    $usuario=new Cadastro();
    $eu=$usuario->lista($usuario);
    ?>
<form method="POST" action="../agendamento/editarok.php">
    cliente<select  name="Cadastro_idusuario">
                <option value="">selecionar</option>
                <?php
                    foreach($eu as $usuario)
                    {
                        echo "<option value='{$usuario->getIdusuario()}'>".$usuario->getNome()."</option>";
                    }
                ?>
            </select>
   Data: <input type="date" name="data" value="<?php echo $novo['data']?>"/>
    descrição:<input type="text" name="descricao" value="<?php echo $novo['descricao']?>"/>
    Hora:<input type="text" name="hora" value="<?php echo $novo['hora']?>"/>
    <input type="hidden" name="idagendamento" value="<?php echo $novo['idagendamento'];?>"/>
    <input type="submit"/>
    
</form>

