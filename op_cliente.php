<?php
    require_once('config.php');    

    // * Cadastrar Cliente  
    if(isset($_POST['btn_cadastrar']))
    {
        $cliente = new Cliente
        (
            0,
            $_POST['txt_razao'],
            $_POST['txt_email'],
            $_POST['txt_inscr'],
            $_POST['txt_senha'],
            $_POST['txt_telefone'],
            $_POST['txt_nomec'],
            $_POST['txt_cnpj'] 
        );
        $cliente->Insert();
        if($cliente->getId()!=null)
        {
           header('location:frm_login.php');
        }
        // else
        // {
        //     echo('<script>function funcao1(){
        //     alert("Eu sou um alert!");}
        //     </script>');
        // }

        //* Efetuar login e iniciar sessão
        if(isset($_POST['btn_login']))
        {
            $cliente = new Cliente();            
            $cliente->EfetuarLogin
            (
                $_POST['cnpj'],
                $_POST['senha']
            );
            if($cliente->GetId()>0)
            {
                $_SESSION['logado'] = true;
                $_SESSION['id_cli'] = $cliente->GetId();
                $_SESSION['cnpj'] = $cliente->GetCnpj();
                $_SESSION['senha'] = $cliente->GetSenha();
                header('location:frm_login.php');          
            }
        }
        
        //* Encerrar a sessão
        if(isset($_GET['sair']))
        {
            if($_GET['sair'])
            {
                $_SESSION['logado'] = false;
                $_SESSION['id_cli'] = null;
                $_SESSION['cnpj'] = null;
                $_SESSION['senha'] = null;
                header('location:index.php');
                exit;
            }            
        }       
    }
?>