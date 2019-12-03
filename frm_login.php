<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Cliente</title>
    <!-- ! Links de CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../img/icone.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>

<body class="alinhamento">

    <div class="box">

        <form action="op_cliente.php" class="frm login" method="post">
            <!-- USUÁRIO -->

            <h1 style="font-family:Arial; 
            font-size: 2em; 
            text-align:center; 
            font-weight:bold; 
            padding-bottom:0.7em;">Área do Cliente</h1>

            <div class="field_forms">
                <label for="user_name">
                    <i class="icon fa fa-user"></i>
                    <span class="hidden">Usuário</span>
                </label>
                <input class="filed_form" type="text" name="cnpj" placeholder="CNPJ">
            </div>

            <!-- SENHA -->

            <div class="field_forms">
                <label for="user_name">
                    <i class="icon fa fa-lock"></i>
                    <span class="hidden">Senha</span>
                </label>
                <input class="filed_form" type="password" name="senha" placeholder="Senha">
            </div>

            <!-- BOTÃO LOGIN -->

            <div class="field_forms">
                <input type="submit" value="Fazer Login" name="btn_login">
            </div>

            <!-- BOTÃO CADASTRAR -->
            
            <p class="text--center ">
                Não possui uma conta?
                <a href="frm_cliente.php">
                    Criar conta
                </a>
            </p>
        </form>    
        
    </div>  
    
    <p class="copyright">
        Copyright © ShellCode 2019. Todos os direitos reservados.
    </p>
</body>
</html>