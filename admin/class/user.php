<?php

    # CRIANDO CLASSE PARA USUARIO

    class User
    {
        # ATRIBUTOS DA CLASSE USUARIO

        private $id
        private $nome
        private $email
        private $cpf
        private $login
        private $senha
        private $foto

        // SET / GET - ID

        public function setId($value)
        {
            $this->id = $value;
        }

        public function getId()
        {
            return $this->id;
        }

        // SET / GET - NOME

        public function setNome($value)
        {
            $this->nome = $value;
        }

        public function getNome()
        {
            return $this->nome;
        }

        // SET / GET - EMAIL

        public function setEmail($value)
        {
            $this->email = $value;
        }

        public function getEmail()
        {
            return $this->Email;
        }

        // SET / GET - CPF

        public function setCpf($value)
        {
            $this->cpf = $value;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        // SET / GET - LOGIN

        public function setLogin($value)
        {
            $this->login = $value;
        }

        public function getLogin()
        {
            return $this->login;
        }

        // SET / GET - SENHA
        
        public function setSenha($value)
        {
            $this->senha = $value;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        // SET / GET - FOTO

        public function setFoto($value)
        {
            $this->foto = $value;
        }

        public function getFoto()
        {
            return $this->foto;
        }

        # METODOS DA CLASSE USUARIO

        public function loadByid($_id)
        {
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM usuarios WHERE id = :id", array(':id'=>$_id));
            if(count($results)>0)
            {
                $this->setData($results[0]);
            }
        }

        public function getList()        
        {
            $sql = new Sql();
            return $sql->select("SELECT * FROM usuario ORDER BY nome");
        }

        public function search($nome_user)
        {
            $sql = new Sql();
            return $sql->select("SELECT * FROM usuario WHERE nome LIKE :nome",array(":nome""".$nome_user.))
        }

    }

?>