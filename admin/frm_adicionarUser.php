<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        .valido 
        {
            border: 3px solid green;
        }

        .invalido 
        {
            border: 3px solid red;
        }

        .m_invalido
        {
            content: "\f00d";
            font-family: FontAwesome;
            font-size: 15px;
        }

    </style>
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Funções para validação de CPF e CNPJ -->

    <script>
        function verifica_cpf_cnpj(valor) {

            // Garante que o valor é uma string
            valor = valor.toString();

            // Remove caracteres inválidos do valor
            valor = valor.replace(/[^0-9]/g, '');

            // Verifica CPF
            if (valor.length === 11) {
                return 'CPF';
            }

            // Verifica CNPJ
            else if (valor.length === 14) {
                return 'CNPJ';
            }

            // Não retorna nada
            else {
                return false;
            }

        } // verifica_cpf_cnpj

        /*
        calc_digitos_posicoes

        Multiplica dígitos vezes posições

        @param string digitos Os digitos desejados
        @param string posicoes A posição que vai iniciar a regressão
        @param string soma_digitos A soma das multiplicações entre posições e dígitos
        @return string Os dígitos enviados concatenados com o último dígito
        */
        function calc_digitos_posicoes(digitos, posicoes = 10, soma_digitos = 0) {

            // Garante que o valor é uma string
            digitos = digitos.toString();

            // Faz a soma dos dígitos com a posição
            // Ex. para 10 posições:
            //   0    2    5    4    6    2    8    8   4
            // x10   x9   x8   x7   x6   x5   x4   x3  x2
            //   0 + 18 + 40 + 28 + 36 + 10 + 32 + 24 + 8 = 196
            for (var i = 0; i < digitos.length; i++) {
                // Preenche a soma com o dígito vezes a posição
                soma_digitos = soma_digitos + (digitos[i] * posicoes);

                // Subtrai 1 da posição
                posicoes--;

                // Parte específica para CNPJ
                // Ex.: 5-4-3-2-9-8-7-6-5-4-3-2
                if (posicoes < 2) {
                    // Retorno a posição para 9
                    posicoes = 9;
                }
            }

            // Captura o resto da divisão entre soma_digitos dividido por 11
            // Ex.: 196 % 11 = 9
            soma_digitos = soma_digitos % 11;

            // Verifica se soma_digitos é menor que 2
            if (soma_digitos < 2) {
                // soma_digitos agora será zero
                soma_digitos = 0;
            } else {
                // Se for maior que 2, o resultado é 11 menos soma_digitos
                // Ex.: 11 - 9 = 2
                // Nosso dígito procurado é 2
                soma_digitos = 11 - soma_digitos;
            }

            // Concatena mais um dígito aos primeiro nove dígitos
            // Ex.: 025462884 + 2 = 0254628842
            var cpf = digitos + soma_digitos;

            // Retorna
            return cpf;

        } // calc_digitos_posicoes

        /*
        Valida CPF

        Valida se for CPF

        @param  string cpf O CPF com ou sem pontos e traço
        @return bool True para CPF correto - False para CPF incorreto
        */
        function valida_cpf(valor) {

            // Garante que o valor é uma string
            valor = valor.toString();

            // Remove caracteres inválidos do valor
            valor = valor.replace(/[^0-9]/g, '');


            // Captura os 9 primeiros dígitos do CPF
            // Ex.: 02546288423 = 025462884
            var digitos = valor.substr(0, 9);

            // Faz o cálculo dos 9 primeiros dígitos do CPF para obter o primeiro dígito
            var novo_cpf = calc_digitos_posicoes(digitos);

            // Faz o cálculo dos 10 dígitos do CPF para obter o último dígito
            var novo_cpf = calc_digitos_posicoes(novo_cpf, 11);

            // Verifica se o novo CPF gerado é idêntico ao CPF enviado
            if (novo_cpf === valor) {
                // CPF válido
                return true;
            } else {
                // CPF inválido
                return false;
            }

        } // valida_cpf

        /*
        valida_cnpj

        Valida se for um CNPJ

        @param string cnpj
        @return bool true para CNPJ correto
        */
        function valida_cnpj(valor) {

            // Garante que o valor é uma string
            valor = valor.toString();

            // Remove caracteres inválidos do valor
            valor = valor.replace(/[^0-9]/g, '');


            // O valor original
            var cnpj_original = valor;

            // Captura os primeiros 12 números do CNPJ
            var primeiros_numeros_cnpj = valor.substr(0, 12);

            // Faz o primeiro cálculo
            var primeiro_calculo = calc_digitos_posicoes(primeiros_numeros_cnpj, 5);

            // O segundo cálculo é a mesma coisa do primeiro, porém, começa na posição 6
            var segundo_calculo = calc_digitos_posicoes(primeiro_calculo, 6);

            // Concatena o segundo dígito ao CNPJ
            var cnpj = segundo_calculo;

            // Verifica se o CNPJ gerado é idêntico ao enviado
            if (cnpj === cnpj_original) {
                return true;
            }

            // Retorna falso por padrão
            return false;

        } // valida_cnpj

        /*
        valida_cpf_cnpj

        Valida o CPF ou CNPJ

        @access public
        @return bool true para válido, false para inválido
        */
        function valida_cpf_cnpj(valor) {

            // Verifica se é CPF ou CNPJ
            var valida = verifica_cpf_cnpj(valor);

            // Garante que o valor é uma string
            valor = valor.toString();

            // Remove caracteres inválidos do valor
            valor = valor.replace(/[^0-9]/g, '');


            // Valida CPF
            if (valida === 'CPF') {
                // Retorna true para cpf válido
                return valida_cpf(valor);
            }

            // Valida CNPJ
            else if (valida === 'CNPJ') {
                // Retorna true para CNPJ válido
                return valida_cnpj(valor);
            }

            // Não retorna nada
            else {
                return false;
            }

        } // valida_cpf_cnpj

        /*
        formata_cpf_cnpj

        Formata um CPF ou CNPJ

        @access public
        @return string CPF ou CNPJ formatado
        */
        function formata_cpf_cnpj(valor) {

            // O valor formatado
            var formatado = false;

            // Verifica se é CPF ou CNPJ
            var valida = verifica_cpf_cnpj(valor);

            // Garante que o valor é uma string
            valor = valor.toString();

            // Remove caracteres inválidos do valor
            valor = valor.replace(/[^0-9]/g, '');


            // Valida CPF
            if (valida === 'CPF') {

                // Verifica se o CPF é válido
                if (valida_cpf(valor)) {

                    // Formata o CPF ###.###.###-##
                    formatado = valor.substr(0, 3) + '.';
                    formatado += valor.substr(3, 3) + '.';
                    formatado += valor.substr(6, 3) + '-';
                    formatado += valor.substr(9, 2) + '';

                }

            }

            // Valida CNPJ
            else if (valida === 'CNPJ') {

                // Verifica se o CNPJ é válido
                if (valida_cnpj(valor)) {

                    // Formata o CNPJ ##.###.###/####-##
                    formatado = valor.substr(0, 2) + '.';
                    formatado += valor.substr(2, 3) + '.';
                    formatado += valor.substr(5, 3) + '/';
                    formatado += valor.substr(8, 4) + '-';
                    formatado += valor.substr(12, 14) + '';

                }

            }

            // Retorna o valor 
            return formatado;

        } // formata_cpf_cnpj
    </script>

    <!-- Pressionando teclas -->
    <script>
        $(function() {

            // ## EXEMPLO 1
            // Aciona a validação a cada tecla pressionada
            var temporizador = false;
            $('.cpf_cnpj').keypress(function() 
            {     

                // O input que estamos utilizando
                var input = $(this);

                // Limpa o timeout antigo
                if (temporizador) {
                    clearTimeout(temporizador);
                }

                // Cria um timeout novo de 500ms
                temporizador = setTimeout(function() 
                {
                    // Remove as classes de válido e inválido
                    input.removeClass('valido');
                    input.removeClass('invalido'); 
                    input.removeClass('m_invalido');                    

                    // O CPF ou CNPJ
                    var cpf_cnpj = input.val();

                    // Valida
                    var valida = valida_cpf_cnpj(cpf_cnpj);

                    // Testa a validação
                    if (valida) 
                    {
                        input.addClass('valido');
                    } else 
                    {
                        input.addClass('invalido');
                        input.addClass('m_invalido');
                        
                    }
                }, 500);

            });
        });
    </script>

</head>

<body>

    <div class="form-principal">
        <form action="" class="form-contato" method="POST" tabindex="1">

            <span class="frm_titulo">Novo Usuário</span>

            <input type="text" class="input-contato" name="ins_neme_user" placeholder="Nome" required>

            <input class="cpf_cnpj" name="ins_cpf_user" placeholder="CPF" required> 
            <span class="m_invalido"> </span>

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