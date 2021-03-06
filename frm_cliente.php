<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área Administrativa</title>
    <!-- ! Links de CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../img/icone.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>

<body class="alinhamento">

    <div class="box">

        <form action="op_cliente.php" class="frm login" method="POST">
         <!-- CPF -->
         <div class="field_forms">
                <label for="user_name">
                    <i class="icon fa fa-lock"></i>
                    <span class="hidden">Usuário</span>
                </label>
                <input class="filed_form" type="text" name="txt_cnpj" placeholder="CNPJ">           </div>
        <!-- USUÁRIO -->
        <div class="field_forms">
            <label for="user_name">
                <i class="icon fa fa-user"></i>
                <span class="hidden">Usuário</span>
            </label>
            <input class="filed_form" type="text" name="txt_razao" placeholder="Razao Social">
        </div>

        <!-- EMAIL -->
        <div class="field_forms">
            <label for="user_name">
                <i class="icon fa fa-envelope"></i>
                <span class="hidden">Usuário</span>
            </label>
            <input class="filed_form" type="text" name="txt_email" placeholder="Email">
        </div>

        <!-- Inscrição Estadual -->
        <div class="field_forms">
            <label for="user_name">
                <i class="icon fa fa-envelope"></i>
                <span class="hidden">Usuário</span>
            </label>
            <input class="filed_form" type="text" name="txt_inscr" placeholder="Incricao Estadual">
        </div>
        <!-- SENHA -->
        <div class="field_forms">
            <label for="user_name">
                <i class="icon fa fa-lock"></i>
                <span class="hidden">Usuário</span>
            </label>
            <input class="filed_form" type="password" name="txt_senha" placeholder="Senha">
        </div>
        <!-- TELEFONE -->
        <div class="field_forms">
            <label for="user_name">
                <i class="icon fa fa-phone"></i>
                <span class="hidden">Usuário</span>
            </label>
            <input class="filed_form" type="text" name="txt_telefone" placeholder="Telefone">
        </div>
           
        <!-- Nome Contato -->
        <div class="field_forms">
            <label for="user_name">
                <i class="icon fa fa-phone"></i>
                <span class="hidden">Usuário</span>
            </label>
            <input class="filed_form" type="text" name="txt_nomec" placeholder="Nome de Contato">
        </div>
            <!-- BOTÃO -->
            <div class="field_forms">
                <input type="submit" value="Cadastrar-se" name="btn_cadastrar">                
            </div>
        </form>    
    </div>  
    
    <p class="copyright">
        Copyright © ShellCode 2019. Todos os direitos reservados.
    </p>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- * SCRIPT DE VALIDAÇÃO DE CPF E CNPJ-->

    <script>
        
    </script>
</body>
</html>