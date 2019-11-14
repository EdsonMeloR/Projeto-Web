<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prosperity Log Transportes</title>

    <!-- * LINK PARA O CSS E ICONE DO SITE -->
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
                <li><a href="#segunda">Quem somos</a></li>
                <li><a href="#terceira">Serviços</a></li>
                <li><a href="#quarta">Planos</a></li>
                <li><a href="#quinta">Localização</a></li>
                <li><a href="#sexta">Contato</a></li>
            </ul>
        </nav>

        <div class="btn-login">
            <a href="login.php" class="fa fa-user"></a>
        </div>
    </header>    

    <!-- ==================================================================================================== -->
    <main>

        <!--Conteúdo 1 - Inicio-->
        <section class="primeira parallax eltitulo" id="primeira">
            <h1>
                P R O S P E R I T Y   L O G
                <p>Excelência e confiabilidade em transportes</p>
            </h1>            
        </section>        

    <!-- ==================================================================================================== -->

        <!--Conteúdo 2 - Quem somos-->
    <section class="segunda parallax eltitulo" id="segunda">    
        <h1>Q U E M  S O M O S</h1>
        <br>
    </section>

    <section class="conteudos" style="background-color: rgb(83, 107, 184);">
        <p class="txt_pri">
        Fundada em 2011 por profissionais com larga experiência na modalidade de transporte rodoviário, para atuar no seguimento de transporte de cargas, a 
        PROSPERITYLOG TRANSPORTES LTDA é uma empresa moderna e apta para atender plenamente as necessidades de nossos clientes e suas empresas.
        </p>

        <p class="txt_sec">

        Diferenciais       
        Flexibilidade em alocação de recursos, conforme necessidades e expectativas dos clientes
        Gerenciamento dedicado das operações
        Processos administrativos padronizados
        Controle sistêmicos adequados e customizados para interfaces.
        
        MISSÃO       
        Contribuir para o sucesso dos nossos clientes e colaboradores, gerando valor e soluções em transporte, distribuição e sustentabilidade do negócio.

        VISÃO        
        Ser a melhor empresa de transporte rodoviário de cargas do Brasil, aproximando clientes dos fornecedores e contribuindo positivamente para um país melhor.

        VALORES        
        Satisfação do cliente
        Valorização e respeito às pessoas
        Responsabilidade social
        Respeito ao Meio Ambiente
        </p>

        <input type="submit" value="Ver Mais" class="ver_mais">

        <input type="submit" value="Ver Menos" class="ver_menos">

        
    </section>

    <!-- ==================================================================================================== -->

        <!--Conteúdo 3 - Planos-->
    <section class="terceira parallax eltitulo" id="terceira">
        <h1>S E R V I Ç O S</h1>
        <br>
    </section>
    <section class="conteudos" style="background: rgb(155, 69, 69);">
        <p>A Prosperity Log trabalha com diversos tipos de transportes</p>
        <br>
        <!--  BLOCOS -->
        <article class="servicos radius">

            <div class="servico">
                <h3>Transporte de Carga e Distribuição</h3>
                <br>
                <img src="img/1920/model1.png" alt="">
            </div> 
                    
            <div class="servico">
                <h3>Entregas Urgentes</h3>
                <br>
                <img src="img/1920/model2.png" alt="">
            </div> 
            
            <div class="servico">
                <h3>Operador Logistico</h3>
                <br>
                <img src="img/1920/model3.png" alt="">
            </div> 

        </article>
        
    </section> 

    <!-- ==================================================================================================== -->

        <!--Conteúdo 4 - Localização-->
    <section class="quarta parallax eltitulo" id="quarta">
        <h1>P L A N O S</h1>
    </section>

    <section class="conteudos" style="background: rgb(150, 95, 200);">
        <p>A Prosperity Log oferece diversos planos para nossos clientes, visando
           melhorar a experiência para eles;
           Confira abaixo nossos planos
        </p>        
        <div class="btn_ver_planos">
            <a href="planos.php"></a>
        </div> 

        <input type="submit" value="Ver Planos" class="ver_planos" onclick="ver_planos()">
    </section>

    <!-- ==================================================================================================== -->

        <!--Conteúdo 5 - Contato-->
        <section class="quinta parallax eltitulo" id="quinta">
            <h1>L O C A L I Z A Ç Ã O</h1>
            <br>
        </section>
        <section class="conteudo_mapa" style="background: rgb(39, 39, 39);">
            <p>A Prosperity Log encontra-se na Vila Carmosina</p> 
            <div style="overflow:hidden;width: 100%;position: relative;">
                <iframe width="100%" height="550px" src="https://maps.google.com/maps?width=1920&amp;height=550&amp;hl=en&amp;q=Rua%3A%20Francisco%20Velho%20175+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>                
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <br />
            
        </section>

    <!-- ==================================================================================================== -->

        <!--Conteúdo 5 - Sobre-->
        <section class="sexta parallax eltitulo" id="sexta">
            <h1>C O N T A T O</h1>
        </section>

        <section class="conteudos" style="background: rgb(39, 39, 39);">
            <p>Entre em contato conosco!</p> 
            <div class="form-principal">
                <form action="" class="form-contato" method="POST" tabindex="1">
                    <input type="text" class="input-contato" name="" placeholder="Nome" required>

                    <input type="text" class="input-contato" name="" placeholder="Email" required>

                    <input type="text" class="input-contato" name="" placeholder="Telefone" required>

                    <textarea class="txt_area" name="" placeholder="Deixe sua menssagem" required></textarea>

                    <input type="submit" class="btn_form" value="Enviar">
                </form>                                
            </div>            
         </section>

    </main>
    <!-- ==================================================================================================== -->

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
         


    <!-- ! JAVA SCRIPT -->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>

        // ! EFEITO E EXIBIÇAÕ DO PARALAX

        // ! VER MAIS: QUEM SOMOS

        $(document).ready(function()
        {  
            $('.ver_menos').hide(),
            $('.txt_sec').hide();

            $('.ver_mais').click(function()
            {
                $('.ver_mais').hide(),
                $('.txt_sec').slideDown("slow"),
                $('.ver_menos').show();                
            });

            $('.ver_menos').click(function()
            {
                $('.ver_menos').hide(),
                $('.txt_sec').slideUp("slow"),
                $('.ver_mais').show();                
            });                       
            
        });

        // ! VER MAIS: PLANOS

        function ver_planos()
        {
            window.location.href = "planos.php"
        }

                
    </script>
</body>
</html>