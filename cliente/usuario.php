<?php
include_once '../cliente/topo.php';
include_once '../class/Cadastro.class.php';
?>
<html>
    <head>
        <title></title>
       
        <meta charset="UTF-8">
    </head>
    <body>
        <div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
            <form method="GET" action="usuariook.php">
        nome:<input style="border: 1px solid black; display:block" type="text" name="nome">
        telefone trabalho:<input style="border: 1px solid black; display:block" type="number" name="telefonetra">
        telefone pessoal:<input style="border: 1px solid black; display:block" type="number" name="telefonepe">
        Razão Social:<input style="border: 1px solid black; display:block" type="text" name="razaosocial">
        cnpjt:<input style="border: 1px solid black; display:block" type="number" name="cnpjt">
        Endereço:<input style="border: 1px solid black; display:block" type="text" name="endereco">
        Email:<input style="border: 1px solid black; display:block" type="email" name="email">
        Senha:<input style="border: 1px solid black; display:block" type="password" name="senha">
        <div class="g-recaptcha" data-sitekey="6Lc_VcQUAAAAABRKc-SGjoJovkYu3raz68Rt05pk"></div>  

        <input style="border: 1px solid black;" type="submit" value="enviar">
        </form>
           </div>
        

     <script src="https://www.google.com/recaptcha/api.js" async defer>
     </script>
            
      
       

            <?php
include_once '../cliente/rodape.php'; 

