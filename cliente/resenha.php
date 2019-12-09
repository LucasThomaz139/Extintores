<?php
include_once '../cliente/topo.php';

?>
<body>
    <div  width='600px' style='margin-left: 30%; margin-top: 10%; display:block'>
    <form method="POST" action="recuperar.php">

        <label>Email</label>
        <input type="email" placeholder="email@gmail.com" name="email"/>
        <input type="submit" value="esqueci a senha">
       
    </form>
    </div>
</body>
<?php
include_once '../cliente/rodape.php';