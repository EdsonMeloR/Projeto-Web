<?php

    if(isset($_POST['btn_login_adm']) && isset($_POST['txt_adm']))
    {
        if(isset($_POST['senha_adm']))
        {
            header("location:principal.php?link=");
        }
    }
?>