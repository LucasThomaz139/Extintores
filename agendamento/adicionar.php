<?php
include_once '../class/Agendamento.class.php';
include_once '../class/Cadastro.class.php';
$listado=new cadastro();
$liscadastro=$listado->lista($listado);
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="GET" action="../agendamento/adicionarok.php">
               
           
            cliente:<select  name="cadastro_idusuario">
                        <option value="">selecionar</option>
                <?php
                        foreach($liscadastro as $linha)
                        {
                            echo "<option value='{$linha->getIdusuario()}'>".$linha->getNome()."</option>";
                        }
                        ?>
                        </select><br>
                        <label>Data</label><input type="date" name="data"/><br>
            <label>Hora</label><input type="time" name="hora"/><br>
            Descrição<input type="text" name="descricao"/><br>
                        
          <input type="submit" value="enviar">
            
        </form>
    </body>
</html>

