<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prosperity Log Transportes</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icone.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
</head>
<body>
    <!-- * MENU -->
    <header class="topo">

        <!-- TODO: LOGO DA PROSPERITY LOG -->
        <div class="logo-home">
            <a href="#primeira" style="width: 12vh ;height: 12vh;">
                <img src="img/logo_menu.png" alt="Logo Prosperity Log">
            </a>
        </div>
    
        <nav id="menu">
            <ul>
                <li><a href="index.php#segunda">Quem somos</a></li>
                <li><a href="index.php#terceira">Serviços</a></li>
                <li><a href="#planos.php">Planos</a></li>
                <li><a href="index.php#quinta">Localização</a></li>
                <li><a href="index.php#sexta">Contato</a></li>
            </ul>
        </nav>

        <div class="btn-login">
            <a href="area_cliente.php" class="fa fa-user"></a>
        </div>
    </header>  
    
    <main>
        <!--Conteúdo 4 - Localização-->
    <section class="quarta parallax eltitulo" id="quarta">
        <h1>P L A N O S</h1>
    </section>

    <section class="conteudos_planos" style="background: rgb(150, 95, 200);">  
        <p>Com os planos da Prosperity Log, nossos clientes tem mais controle sobre
           suas mercadorias 
        </p>

        <div class="planos" id="tabela_planos"> 
            <div class="plano">
                <h3>Basico <span>$150</span> </h3>
                <a class="login_user" href="login_cliente.php">Fazer Login</a>
                <ul>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                </ul>
            </div> 
            
            <div class="plano">
                <h3>Medio <span>$230</span> </h3>
                <a class="login_user" href="login_cliente.php">Fazer Login</a>
                <ul>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                </ul>
            </div>

            <div class="plano">
                <h3>Empresarial <span>$450</span> </h3>
                <a class="login_user" href="login_cliente.php">Fazer Login</a>
                <ul>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                    <li> <b></b> Descrição </li>
                </ul>
            </div>
 
        </div>

    </section>
    </main>

    <!-- Footer - Rodapé -->
    <footer class="rodape">
        <br>
        <div class="area_adm">
            <a href="admin/login.php" class="adm">
                <span>
                    Área Administrativa
                </span>
            </a>
        </div>    
        <br>                       
        <span class="cop">
            Copyright © ShellCode 2019. Todos os direitos reservados.
        </span>
    </footer>
</body>
</html>