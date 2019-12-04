<?php

session_start();
session_destroy();
header("location:../login/logar.php");

