<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área Administrativa</title>
    <!-- ! Links de CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/icone.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>

<body class="alinhamento">

    <div class="box">

        <form action="op_adm.php" class="frm login">
            <!-- USUARIO -->

            <div class="field_forms">
                <label for="user_name">
                    <i class="icon fa-fauser"></i>
                    <span class="hidden">Usuário</span>
                </label>
                <input class="filed_form" type="text" name="txt_adm" placeholder="Usuario">
            </div>

            <!-- SENHA -->

            <div class="field_forms">
                <label for="user_name">
                    <i class="icon fa-fauser"></i>
                    <span class="hidden">Usuário</span>
                </label>
                <input class="filed_form" type="password" name="senha_adm" placeholder="Senha">
            </div>

            <!-- BOTÃO -->

            <div class="field_forms">
                <input type="submit" value="Fazer Login">
            </div>

        </form>
    </div>    
</body>
</html>