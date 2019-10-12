<?php

include_once '../class/Agendamento.class.php';
include_once '../class/Cadastro.class.php';
$agencia=new Agendamento();
$agencia->setIdagendamento($_GET['idagendamento']);
$novo=$agencia->verificador($agencia);
$usuario=new Cadastro();
$eu=$usuario->lista($usuario);
?>
<form method="POST" action="editarok.php">
    cliente<select  name="Cadastro_usuario">
                        <option value="">selecionar</option>
                        <?php
                        foreach($eu as $linhas)
                        {
                            echo "<option value='$linhas->getIdusuario()'>$linhas->getNome()</option>";
                        }
                        ?>
            </select>
    Data<input type="text" name="data" value="<?php echo $eu->data;?>"><br>
    Descricao<input type="text" name="descricao" value="<?php echo $eu->descricao;?>"><br>
    Hora<input type="text" name="hora" value="<?php echo $eu->hora;?>"><br>
    <input type="hidden" name="idagendamento" value="<?php echo $eu->idagendamento;?>"><br>
    <input type="submit"/>
    
</form>

