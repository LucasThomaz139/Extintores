<?php
session_start();
include_once '../cliente/topo.php';
include_once '../class/Agendamento.class.php';
include_once '../class/Cadastro.class.php';
$listado=new Agendamento();
$cliente=$listado[$_SESSION['idusuario']];
$liscadastro=$listado->lista("WHERE agendamento.cadastro_idusuario=$cliente");
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
        <form method="GET" action="agendarok.php">
              Nome do cliente: 
           <select>
               <option>selecione</option>
            <?php
            
                        
                            echo "<option value='{$cliente[':idusuario']}'>".$cliente[':nome']."</option>";
                        
            ?>
                
                        </select><br>
                        <label>Data</label><input style="border: 1px solid black; display:block" type="date" name="data"/><br>
            <label>Hora</label><input style="border: 1px solid black; display:block" type="time" name="hora"/><br>
            Descrição<input style="border: 1px solid black; display:block" type="text" name="descricao"/><br>
                        
          <input style="border: 1px solid black;" type="submit" value="enviar">
            
        </form>
             </div>
<?php
include_once '../cliente/rodape.php';