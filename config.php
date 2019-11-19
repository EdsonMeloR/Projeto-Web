<?php

    // ! CONFIGURAÇÕES PADRÕES DA APLICAÇÃO

    // * DEFINE HORÁRIO PRADRÃO DE BRASILIA

    date_default_timezone_get('America/Sao_Paulo');

    // * INFORMAÇÕES PARA CONEXÃO COM O SERVIDOR DE BANCO DE DADOS

    define ('IP_SERVER_DB', '127.0.0.1');
    define ('HOSTNAME','PC_HOME');
    define ('NOME_BANCO','prosperitydb');
    define ('USER_DB','root');
    define ('PASS_DB','');

    // * INICIA A SESSÃO DO USUARIO

    if(!isset($_SESSION))
    {
        session_start();
    }

    // * CARREGAR AS CLASSES DO PROJETO

    spl_autoload_register(function($name_class)
    {
        $server_str = $_SERVER['REQUEST_URI'];
        $caminho = (strpos($server_str, 'admin') !==false)?'class':'admin/class';
        $nome_arquivo = $caminho.DIRECTORY_SEPARATOR.$name_class.".php";
        if(file_exists($name_class))
        {
            require_once($nome_arquivo);
        }

    });    

?>