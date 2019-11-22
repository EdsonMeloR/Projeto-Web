<?php

    class Usuario
    {

        // ! ATRIBUTODS DA CLASSE USUARIO

        private $id;
        private $nome;
        private $cpf;
        private $telefone;
        private $senha;
        private $email;
        private $nivel;

        // ! METODOS DA CLASSE USUARIO

        // * ID

        public function getId()
        {
            return $this->id;
        }

        public function setId($value)
        {
            $this->id = $value;
        }

        // * NOME
        
        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($value)
        {
            $this->nome = $value;
        }

        // * CPF
        
        public function getCpf()
        {
            return $this->cpf;
        }

        public function setCpf($value)
        {
            $this->cpf = $value;
        }

        // * TELEFONE
        
        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($value)
        {
            $this->telefone = $value;
        }

        // * SENHA
        
        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($value)
        {
            $this->senha = $value;
        }

        // * EMAIL
        
        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($value)
        {
            $this->email = $value;
        }

        // * NIVEL
        
        public function getNivel()
        {
            return $this->nivel;
        }

        public function setNivel($value)
        {
            $this->nivel = $value;
        }

        //* CONTRUTOR DAS VARIAVEIS

        public function __construct($_nome="", $_cpf="", $_telefone="", $_senha="", $_email="", $_nivel="")
        {
            $this->nome = $_nome;
            $this->cpf = $_cpf;
            $this->telefone = $_telefone;
            $this->senha = $_senha;
            $this->email = $_email;
            $this->nivel = $_nivel;
        }
        
        //* PEGA VALORES PARA AS VARIAVEIS

        public function setData($data)
        {
            $this->setId($data['']);
            $this->setCpf($data['']);
            $this->setTelefone($data['']);
            $this->setSenha($data['']);
            $this->setEmail($data['']);
            $this->setNivel($data['']);
        }
        public function insert()
        {
            $sql = new Sql();
            $resultado = $sql->select("CALL insert_usuario(:nome, :cpf, :tel, :senha, :email, :nvl)",
            array
            (
                ':nome'=>$this->getNome(),
                ':cpf'=>$this->validaCPF(getCpf()),
                ':telefone'=>$this->getTelefone(),
                ':senha'=>md5($this->getSenha()),
                ':email'=>$this->getEmail(),
                ':nvl'=>$this->getNivel()
            ));
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }
        }
        function validaCPF($cpf = null) 
        {

            //* Verifica se um número foi informado
            if(empty($cpf))
            {
                return false;
            }
        
            //* Elimina possivel mascara como '.' e '-'
            $cpf = preg_replace("/[^0-9]/", "", $cpf);
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
            
            //* Verifica se o numero de digitos informados é igual a 11 
            if (strlen($cpf) != 11) {
                return false;
            }
            //* Verifica se nenhuma das sequências invalidas abaixo 
            //* foi digitada. Caso afirmativo, retorna falso
            else if 
            ($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') 
            {
                return false;
            }
            //* Calcula os digitos verificadores para verificar se o
            //* CPF é válido
             
             else 
             {    
                for ($t = 9; $t < 11; $t++) 
                {
                    for ($d = 0, $c = 0; $c < $t; $c++) 
                    {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) 
                    {
                        return false;
                    }
                }
                return true;
            }
        }
//         -- DELIMITER $$
// -- USE `prosperitydb`$$
// -- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_usuario`(_nome varchar(60),_cpf char(11),_telefone varchar(11),
// -- 								_senha varchar(60), _email varchar(60),_nivel int)
// -- begin
// -- 	insert into usuario (Nome,Cpf,Telefone,Senha,Email,Niveis_idNiveis)
// --     values (_nome,_cpf,_telefone,_senha,_email,_nivel);    
// --     select * from usuario where idUsuario = last_insert_id();
// -- end$$
    }
    
    

?>