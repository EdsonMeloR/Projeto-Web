<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área administrativa</title>

    <link rel="stylesheet" href="css/principal_estilo.css">
    <link rel="shortcut icon" href="img/administrador.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>

    <div class="page-wrapper chiller-theme toggled">

        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="principal.php">Área Administrativa</a>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/idead.jfif" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            Lucas Henrique
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- * sidebar-header  -->

                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- * sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Gerenciar Usuários</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-user"></i>
                                <span>Usuários</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="principal.php?link=2">Adicionar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="principal.php?link=3">Listar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Gerenciar Site</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-image"></i>
                                <span>Banners</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="principal.php?link=">Adicionar</a>
                                    </li>
                                    <li>
                                        <a href="principal.php?link=">Listar</a>
                                    </li>                                   
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-truck"></i>
                                <span>Serviços</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="principal.php?link=">Adicionar</a>
                                    </li>
                                    <li>
                                        <a href="principal.php?link=">Listar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- * sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">                
                <a href="../index.php">
                    <i class="fa fa-home"></i>
                </a>
                <a href="op_adm.php?sair=true">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>

        <!-- * sidebar-wrapper  -->
        <main class="page-content">
            <div class="conteudo_frm">
            
                <?php

                // ! CHAMANDOS OS FORMULÁRIOS
                if(isset($_GET['link']))
                {
                    $link = $_GET['link'];
                    $pag[1] = "home_principal.php";

                    // * LINKS PARA USUARIO
                    $pag[2] = "adicionar_users.php";
                    $pag[3] = "lista_user.php";

                    // * LINKS PARA BANNER
                    $pag[4] = "adicionar_banner.php";
                    $pag[5] = "lista_banner.php";

                    // * LINKS PARA SERVIÇOS
                    $pag[6] = "adicionar_servico.php";
                    $pag[7] = "lista_servico.php";

                    if(!empty($link))
                    {
                        if(file_exists($pag[$link]))
                        {
                            include $pag[$link];
                        }

                        else
                        {
                            include $pag[1];
                        }                        
                    }

                    else
                    {
                        include "home_principal.php";
                    }

                }

                ?>                
            </div>
        </main>
        <!-- * page-content" -->
    </div>
    <!-- * page-wrapper -->


    <!-- ! JAVA SCRIPT - JQUERY -->

    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

    <script>
        $(".sidebar-dropdown > a").click(function () 
        {
            $(".sidebar-submenu").slideUp(200);
            if 
            (
                $(this)
                    .parent()
                    .hasClass("active")
            ) 
            {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } 
            else 
            {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function () 
        {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function () 
        {
            $(".page-wrapper").addClass("toggled");
        });
    </script>

</body>

</html>