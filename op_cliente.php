<?php
    require_once('config.php');    

    // ? FAZER LOGIN PARA ÁREA DO CLIENTE

    if(isset($_POST['btn_login_cliente']))
    {
        $cliente = new Cliente();            
        $cliente->EfetuarLogin
        (
            $_POST['login_cliente'],
            $_POST['senha_cliente']
        );
        var_dump($cliente);
        if($cliente->getId() > 0)
        {
            // header('location:admin/principal.php');
        }
    }  

    // ? INICIALIZANDO E FINALIZANDO SESSÃO DA ÁREA CLIENTE


    // ? ADICIONAR NOVO CLIENTE NO BANCO DE DADOS
    
    if(isset($_POST['btn_cadastrar']))
    {
        $cliente = new Cliente
        (
            $_POST['txt_nome'],
            $_POST['txt_email'],
            $_POST['txt_cnpj'],
            $_POST['txt_telefone'],
            $_POST['txt_senha']
        );
        $cliente->Insert();
        if($cliente->getId()!=null)
        {
            header('location:login_cliente.php');            
        }
    }

?>