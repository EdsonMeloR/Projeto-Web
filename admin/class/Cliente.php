<?php
    Class Cliente
    {
        //* Atributos

        private $id;
        private $razaosocial;
        private $cnpj;
        private $email;
        private $inscricaoestadual;
        private $senha;
        private $telefone;
        private $nomeContato;

        //* Métodos
        //* Id
        public function GetId()
        {
            return $this->id;
        }
        public function SetId($value)
        {
            $this->id = $value;
        }
        //* Razão Social ?????
        public function GetRazaoS()
        {
            return $this->razaosocial;
        }
        public function SetRazaoS($value)
        {
            $this->razaosocial = $value;
        }
        //* CNPJ
        public function GetCnpj()
        {
            return $this->cnpj;
        }
        public function SetCnpj($value)
        {
            $this->cnpj = $value;
        }
        //* Email 
        //??  Verificar se o email é real
        public function GetEmail()
        {
            return $this->email;
        }
        public function SetEmail($value)
        {
            $this->email = $value;
        }
        //* Inscrição Estadual????
        public function GetIncriçaoEstadual()
        {
            return $this->inscricaoestadual;
        }
        public function SetInscricaoEstadual($value)
        {
            $this->inscricaoestadual = $value;
        }
        //* Senha
        public function GetSenha()
        {
            return $this->senha;
        }
        public function SetSenha($value)
        {
            $this->senha = $value;
        }
        //* Telefone
        public function GetTelefone()
        {
            return $this->telefone;
        }
        public function SetTelefone($value)
        {
            $this->telefone = $value;
        }
        //* Nome Contato
        public function GetNomeContato()
        {
            return $this->nomeContato;
        }
        public function SetNomeContato($value)
        {
            $this->nomeContato = $value;
        }












        

    }




?>