<?php
    require_once('config.php');

    if(issset($_POST['btn_cadastrar_user']))
    {
        $cliente = new Usuario()
    }


    // ? FAZER LOGIN PARA ÁREA DO ADMINISTRADOR

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