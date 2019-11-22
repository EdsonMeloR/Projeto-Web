<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        .valido 
        {
            border: 10px solid green;
        }

        .invalido 
        {
            border: 10px solid red;
        }
        
    </style>
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        
        <!-- Funções para validação de CPF e CNPJ -->
        <script src="js/valida_cpf_cnpj.js"></script>
        
        <!-- EXEMPLOS -->
        
        <!-- Pressionando teclas -->
        <script src="js/metodo1.js"></script>
</head>
<body>

<input class="cpf_cnpj">

<div class="form-principal">
    <form action="" class="form-contato" method="POST" tabindex="1">

        <span class="frm_titulo">Novo Usuário</span>

        <input type="text" class="input-contato" name="ins_neme_user" placeholder="Nome" required>

        <input class="cpf_cnpj" name="ins_cpf_user" placeholder="CPF" required>

        <input type="text" class="input-contato" name="ins_telefone_user" placeholder="Telefone" required>

        <input type="text" class="input-contato" name="ins_email_user" placeholder="Email" required>

        <input type="text" class="input-contato" name="ins_senha_user" placeholder="Senha" required>

        <input type="text" class="input-contato" name="ins_ConfirmaSenha_user" placeholder="Confirmar Senha" required>

        <input type="submit" class="btn_form" value="Enviar">
    </form>
</div>

<div class="lista_user">
    <table class="flat-table flat-table-1">
	    <thead>
            <th>Id</th>
		    <th>Nome</th>
		    <th>Telefone</th>
		    <th>Email</th>
            <th>CPF</th>
            <th>Nivel</th>
	    </thead>
	    <tbody>
		    <tr>
			    <td>1002</td>
			    <td>Carlos Eduardo Souza</td>
			    <td>22070854</td>
                <td>cadu.edu@gmail.com</td>
                <td>12345698708</td>
                <td>Operador</td>
		    </tr>
		    
	    </tbody>
    </table>
</div>
    
</body>
</html>


