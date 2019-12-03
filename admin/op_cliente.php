<?php
    require_once('../config.php');    

    // ? FAZER LOGIN PARA ÁREA DO CLIENTE

    if(isset($_POST['btn_login_cliente']) && isset($_POST['login_cliente']))
    {
        $cliente = new Cliente();            
        $cliente->FazerLogin
        (
            $_POST['login_cliente'],
            $_POST['senha_cliente']
        );

        if($cliente->getId() > 0)
        {
            header('location:principal.php');
        }
    }  

    // ? INICIALIZANDO E FINALIZANDO SESSÃO DA ÁREA CLIENTE


    // ? ADICIONAR NOVO CLIENTE NO BANCO DE DADOS
    
    if(isset($_POST['frm_btn_cadastrar_cliente']))
    {
        $new_cliente = new Cliente
        (
            $_POST['frm_nome_cliente'],
            $_POST['frm_email_cliente'],
            $_POST['frm_cnpj_cliente'],
            $_POST['frm_telefone_cliente'],
            $_POST['frm_senha_cliente'],
        );

        $new_cliente->Insert();
        if($new_cliente->getId()!=null)
        {
            header('location:login_user.php');            
        }
    }

?>