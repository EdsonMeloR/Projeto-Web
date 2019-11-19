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

        // ! CONTRUTOR DAS VARIAVEIS

        public function __construct($_nome="", $_cpf="", $_telefone="", $_senha="", $_email="", $_nivel="")
        {
            $this->nome = $_nome;
            $this->cpf = $_cpf;
            $this->telefone = $_telefone;
            $this->senha = $_senha;
            $this->email = $_email;
            $this->nivel = $_nivel;
        }
        
        
        // ! PEGA VALORES PARA AS VARIAVEIS

        public function setData($data)
        {
            $this-setId($data['']);
            $this-setCpf($data['']);
            $this-setTelefone($data['']);
            $this-setSenha($data['']);
            $this-setEmail($data['']);
            $this-setNivel($data['']);
        }
    }

?>