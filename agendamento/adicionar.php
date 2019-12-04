<?php
include_once '../administrador/topo.php';
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
        <div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
        <form method="GET" action="../agendamento/adicionarok.php">
               
           
            cliente:<select style="border: 1px solid black; display:block" name="cadastro_idusuario">
                        <option value="">selecionar</option>
                <?php
                        foreach($liscadastro as $linha)
                        {
                            echo "<option value='{$linha->getIdusuario()}'>".$linha->getNome()."</option>";
                        }
                        ?>
                        </select><br>
                        <label>Data</label><input style="border: 1px solid black; display:block" type="date" name="data"/><br>
            <label>Hora</label><input style="border: 1px solid black; display:block" type="time" name="hora"/><br>
            Descrição<input style="border: 1px solid black; display:block" type="text" name="descricao"/><br>
                        
          <input style="border: 1px solid black;" type="submit" value="enviar">
            
        </form>
             </div>
<?php
include_once '../administrador/rodape.php';



