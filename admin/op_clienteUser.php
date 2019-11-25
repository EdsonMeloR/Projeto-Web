<?php
    require_once('../config.php');    

    // ? FAZER LOGIN PARA ÁREA DO ADMINISTRADOR

    if(isset($_POST['btn_login_adm']) && isset($_POST['txt_adm']))
    {
        $AdmLogin = new Usuario();    
        var_dump($AdmLogin);
        $AdmLogin->FazerLogin
        (
            $_POST['txt_adm'],
            $_POST['senha_adm']
        );

        if($AdmLogin->getId() > 0)
        {
            // header('location:principal.php');
        }
    }

    // if(isset($_POST['btn_cadastrar']))
    // {
    //     $adm = new Administrador
    //     (
    //         $_POST['txt_nome'],
    //         $_POST['txt_email'],
    //         $_POST['txt_login'],
    //         $_POST['txt_senha']
    //     );
    //     $adm->insert();
    //     if($adm->getId()!=null)
    //     {
    //         header('location:principal.php?link=3&msg=ok');
    //         var_dump($adm);
    //     }
    // }

    // * INICIALIZANDO E FINALIZANDO SESSÃO DA ÁREA ADMINISTRATIVA


    // ? ADICIONAR NOVO USUARIO NO BANCO DE DADOS


    // ? LISTAR TODOS OS USUARIO DO BANCO DE DADOS
    

?>