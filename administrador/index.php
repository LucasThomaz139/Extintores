<?php
session_start();
if(!isset($_SESSION['administrador']) && !isset($_SESSION['login']))
{
    header("location:../login/logar.php");
}
?>
<html>

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>home</title>

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">
        <link href="css/index.css" rel="stylesheet" media="all">


    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar2">
                <div class="logo">
                    <a  class="topo" href="#">Casas de Extintores
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

                                <a  class="js-arrow" href="#">pedidos</a>
                            </li>

                            <li id="sim">
                                <a class="js-arrow" href="../produto/listar.php">produtos</a>

                            </li>
                            <li id="sim">

                                <a class="js-arrow" href="../produto/adicionar.php">adicionar produtos</a>
                            </li> 


                            <li class="has-sub">
                                <a class="js-arrow" href="../cadastro/listar.php">cadastros</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="../cadastro/adicionar.php"> adicionar usuarios</a>


                            <li class="has-sub">
                                <a class="js-arrow" href="../servico/listar.php"> serviços</a>

                            </li> <li class="has-sub">
                                <a class="js-arrow" href="../servico/adicionar.php"> adicionar serviços</a>


                            <li class="has-sub">
                                <a class="js-arrow" href="../agendamento/lista.php">agendamento</a>

                            </li> 
                            <li class="has-sub">
                                <a class="js-arrow" href="../agendamento/adicionar.php"> adicionar agendamento</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="../mensagem/listar.php"> mensagem</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->
            <div class="esquerda">
                <h3 class="d">pedidos</h3>
                <table class="certa" border="1" >

                    <tr>
                        <td><p>nome do produto</p></td>
                        <td>quantidade de iens</td>
                        <td>valor</td>
                        <td>o nome do clientes</td>
                        <td>entrega</td>
                    </tr>
                    <tr>
                        <td><p>Cera Automotiva Importada Carros Pretos Tira Riscos Atacado</p></td>
                        <td><p>1</p></td>
                        <td><p>R$149</p></td>
                        <td><p>lucas da rosa Thomaz</p></td>
                        <td><p><a href="nao">não</a>
                                <a href="sim">sim</a></p></td>
                    </tr>
                    <tr>
                        <td><p>Produto Automotivo Protec Titanium Limpa Cristaliza Protege</p></td>
                        <td><p>1 </p></td>
                        <td><p>R$159.87</p></td>
                        <td><p>luan dos santos</p></td>
                        <td><p><a href="nao">não</a>
                                <a href="sim">sim</a></p></td>
                    </tr>
                    <tr>
                        <td><p>Super Kit De Produtos Para Lavagem A Seco De Carro Dry Limp</p></td>
                        <td><p>1</p></td>
                        <td><p>R$354,90</p></td>
                        <td><p>ana ribeiro</p></td>
                        <td><p><a href="nao">não</a>
                                <a href="sim">sim</a></p></td>
                    </tr>
                    <tr>
                        <td><p>Shampoo Automotivo Vonixx</p></td>
                        <td><p>1</p></td>
                        <td><p>R$50.87</p></td>
                        <td><p>andré lopes</p></td>
                        <td><p><a href="nao">não</a>
                                <a href="sim">sim</a></p></td>
                    </tr>
                    <tr>
                        <td><p>Aromatizador Carro Cheirinho Lote Atacado Revenda Artesanatotd></p></td>
                        <td><p>1</p></td>
                        <td><p>R$50.99</p></td>
                        <td><p>marco rodrigues de rodrigues filho</p></td>
                        <td><p><a href="nao">não</a>
                                <a href="sim">sim</a></p></td>
                    </tr>
                    <tr>
                        <td>Super Kit De Produtos Para 70 Lavagem A Seco Do Carro</td>
                        <td>1</td>
                        <td>R$250.99</td>
                        <td>junior thomaz</td>
                        <td><a href="nao">não</a>
                            <a href="sim">sim</a></td>
                    </tr>
                    <tr>
                        <td>sabão comum </td>
                        <td>1</td>
                        <td>R$15</td>
                        <td>rosane da rosa thomaz</td>
                        <td><a href="nao">não</a>
                            <a href="sim">sim</a></td>
                    </tr>
                    <tr>
                        <td>silicone alto brilhante</td>
                        <td>1</td>
                        <td>R$23.30</td>
                        <td>francisco ribeiro lopes</td>
                        <td><a href="nao">não</a>
                            <a href="sim">sim</a></td>
                    </tr>
                    <tr>
                        <td>silicone brilhante</td>
                        <td>1</td>
                        <td>R$12</td>
                        <td>renata simas trindrade</td>
                        <td><a href="nao">não</a></td>
                    </tr>
                    </ul>
                </table>
            </div>
            <!-- PAGE CONTAINER-->
            <div class="page-container2">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop2">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap2">
                                <div class="logo d-block d-lg-none">
                                    <a href="#">
                                        <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                    </a>
                                </div>
                                <div class="header-button2">
                                   

                                    <div class="header-button-item mr-0 js-sidebar-btn">
                                        <i class="zmdi zmdi-menu"></i>
                                    </div>
                                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <!-- <a href="#">
                                                     <i class="zmdi zmdi-account"></i>sai</a>-->
                                                <a href="login.html">
                                                    <i class="fas fa-sign-in-alt"></i>sair</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Configuração</a>
                                            </div>

                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-pin"></i>Localização</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-email"></i>Email</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                </header>

                <!-- Jquery JS-->
                <script src="vendor/jquery-3.2.1.min.js"></script>
                <!-- Bootstrap JS-->
                <script src="vendor/bootstrap-4.1/popper.min.js"></script>
                <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
                <!-- Vendor JS       -->
                <script src="vendor/slick/slick.min.js">
                </script>
                <script src="vendor/wow/wow.min.js"></script>
                <script src="vendor/animsition/animsition.min.js"></script>
                <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                </script>
                <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
                <script src="vendor/counter-up/jquery.counterup.min.js">
                </script>
                <script src="vendor/circle-progress/circle-progress.min.js"></script>
                <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                <script src="vendor/chartjs/Chart.bundle.min.js"></script>
                <script src="vendor/select2/select2.min.js">
                </script>
                <script src="vendor/vector-map/jquery.vmap.js"></script>
                <script src="vendor/vector-map/jquery.vmap.min.js"></script>
                <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
                <script src="vendor/vector-map/jquery.vmap.world.js"></script>

                <!-- Main JS-->
                <script src="js/main.js"></script>

                </body>

                </html>
                <!-- end document-->