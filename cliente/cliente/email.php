<?php
include_once '../cliente/topo.php';
?>
<body>
    <div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
    <form method="POST" action="emailok.php">

        <label>Email</label>
        <input type="email" placeholder="email@gmail.com" name="email"/>
        <label>Senha</label>
        <input type="password" name="senha"/><br>
        <input type="submit" value="entrar">
        
    </form>
    </div>    
</body>

<?php
include_once '../cliente/rodape.php';
