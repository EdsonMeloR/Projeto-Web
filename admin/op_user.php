<?php
     

    // ? FAZER LOGIN PARA ÁREA DO ADMINISTRADOR

    if(isset($_POST['btn_login_adm']) && isset($_POST['txt_adm']))
    {
        if(isset($_POST['senha_adm']))
        {
            header("location:principal.php?link=");
        }
    }

    // * INICIALIZANDO E FINALIZANDO SESSÃO DA ÁREA ADMINISTRATIVA


    // ? ADICIONAR NOVO USUARIO NO BANCO DE DADOS


    // ? LISTAR TODOS OS USUARIO DO BANCO DE DADOS
    

?>