<?php
ob_start();
session_start();
session_destroy();

//var_dump("session", $_SESSION);
header("location:email.php");

?>