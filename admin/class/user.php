<?php

    # CRIANDO CLASSE PARA USUARIO

    class User
    {
        # ATRIBUTOS DA CLASSE USUARIO

        private $id;
        private $nome;
        private $email;
        private $cpf;
        private $login;
        private $senha;
        private $foto;

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

        //  =====================================================================================================================
        # METODOS DA CLASSE USUARIO

        // Método - Procurar por ID.
        public function loadByid($_id)
        {
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM usuarios WHERE id = :id", array(':id'=>$_id));
            if(count($results)>0)
            {
                $this->setData($results[0]);
            }
        }

        // Método - Gerar lista de usuários.
        public function getList()        
        {
                $sql = new Sql();
                return $sql->select("SELECT * FROM usuario ORDER BY nome");
        }

        // Método - Procurar usuário por uma letra ou nome.
        public function search($nome_user)
        {
                $sql = new Sql();
                return $sql->select("SELECT * FROM usuario WHERE nome LIKE :nome",array(":nome"=>"%".$nome_user."%"));
        }

        // Método - Autenticação do usuário/login.
        public function efetuarLogin($_login,$senha_cript)
        {
            $sql = new Sql();
            $senha_cript = md5($senha_cript);
            $results = $sql->select("SELECT * FROM usuario WHERE login = :login and senha = :senha",
            array(':login'=>$_login,":senha"=>$senha_cript));
        if(count($results)>0)
            {
                $this->setData($results[0]);
            }
        }

        // Método - Cadastrando usuário novo no sistema.
        public function insert()
        {
        $sql = new Sql();
        $results = $sql->select("CALL sp_user_insert(:nome, :email, :login, :senha)",
        array(
            ":nome"=>$this->getNome(),
            ":email"=>$this->getEmail(),
            ":login"=>$this->getLogin(),
            ":senha"=>md5($this->getSenha())
        ));
            if(count($results)>0)
            {
                $this->setData($results[0]);
            }
        }

        // Método - Atualizando dados do usuário.
        public function update($_id,$_nome, $_email, $_login)
        {
            $sql = new Sql();
            $sql->query("UPDATE usuario SET nome =:nome, email = :email, login = :login WHERE id = :id",
            array(
                ":id"->$_id,
                ":nome"->$_nome,
                ":login"->$_login,
                ":email"->$_email
            ));
        }

        // Método - Arquivar usuário
        public function arquivar()
        {

        }

        // Método construtor
        public function _construct($_nome="",$_email="",$_login="",$_senha="")
        {
            $this->nome =$_nome;
            $this->email =$_email;
            $this->login =$_login;
            $this->senha =$_senha;
        }

        // Método - Data
        public function Data($data)
        {
            $this->setId($data['id']);
            $this->setId($data['nome']);
            $this->setId($data['email']);
            $this->setId($data['login']);
            $this->setId($data['senha']);
        }
    }

?>