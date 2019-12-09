<?php
session_start();
if(!isset($_SESSION['administrador']) && !isset($_SESSION['login']))
{
    header("location:../login/logar.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>adm</title>

    <!-- Fontfaces CSS-->
    <link href="../administrador/css/font-face.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../administrador/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../administrador/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../administrador/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../administrador/css/theme.css" rel="stylesheet" media="all">
     <link href="../administrador/css/index.css" rel="stylesheet" media="all">
    

</head>

<body class="animsition">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar2">
                <div class="logo">
                    <a class="topo" href="#">Casas de Extintores
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar1">
                    <div class="account2">
                        <h4 class="name">Casas de Extintores</h4>
                       <a href="../login/logar.php">Sign out</a>
                        <a href="../login/deslogar.php">
                            <i class="js-arrow" class="fas fa-sign-in-alt"></i>sair</a>


                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li id="sim">

                                <a  class="js-arrow" href="../detalhe/listar.php">Detalhe</a>
                            </li>
                            <li id="sim">

                                <a  class="js-arrow" href="../detalhe/adicionar.php">Adicionar detalhe</a>
                            </li>

                            <li id="sim">
                                <a class="js-arrow" href="../produto/listar.php">Produtos</a>

                            </li>
                            <li id="sim">

                                <a class="js-arrow" href="../produto/adicionar.php">Adicionar produtos</a>
                            </li> 


                            <li class="has-sub">
                                <a class="js-arrow" href="../cadastro/listar.php">Cadastros</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="../cadastro/adicionar.php"> Adicionar usuarios</a>


                            <li class="has-sub">
                                <a class="js-arrow" href="../servico/listar.php"> Serviços</a>

                            </li> <li class="has-sub">
                                <a class="js-arrow" href="../servico/adicionar.php"> Adicionar serviços</a>


                            <li class="has-sub">
                                <a class="js-arrow" href="../agendamento/lista.php">Agendamento</a>

                            </li> 
                            <li class="has-sub">
                                <a class="js-arrow" href="../agendamento/adicionar.php"> Adicionar agendamento</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="../mensagem/listar.php"> Mensagem</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="../mensagem/adicionar.php"> Adicionar mensagem</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="../empresa/listar.php"> Informação da empresa</a>
                            
                            </li>
                             <li class="has-sub">
                                <a class="js-arrow" href="../empresa/adicionar.php"> Adicionar empresa</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
        <!-- END MENU SIDEBAR-->
        