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
        //* Razão Social
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
        //* Inscrição Estadual
        public function GetIncricaoEstadual()
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

        //* Métodos da classe

        //* Inserir cliente 
        Public function Insert()
        {
            $sql = new Sql();
            $resultado = $sql->select('CALL insert_cliente(:rzs, :cnpj, :email, :insc, :senha, :tel, :nomec)',
            array
            (
                ':rzs'=>$this->GetRazaoS(),
                ':cnpj'=>$this->GetCnpj(),
                'email'=>$this->GetEmail(),
                ':insc'=>$this->GetIncricaoEstadual(),
                ':senha'=>$this->GetSenha(),
                ':tel'=>$this->GetTelefone(),
                ':nomec'=>$this->GetNomeContato()
            ));
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }         
        }
        if(nae)
        if(nac)
        if(sc)

        //* Método 




































































        // public function insert()
        // {
        //     $sql = new Sql();
        //     $resultado = $sql->select("CALL insert_usuario(:nome, :cpf, :tel, :senha, :email, :nvl)",
        //     array
        //     (
        //         ':nome'=>$this->getNome(),
        //         ':cpf'=>$this->validaCPF(getCpf()),
        //         ':telefone'=>$this->getTelefone(),
        //         ':senha'=>md5($this->getSenha()),
        //         ':email'=>$this->getEmail(),
        //         ':nvl'=>$this->getNivel()
        //     ));
            // if(count($resultado)>0)
            // {
            //     $this->setData($resultado[0]);
            // }
        // }

        // //* Alterar Usuario
        // public function Alterar()
        // {
        //     $sql = new Sql();
        //     $sql->select("CALL update_usuario(:telefone, :email, :id)", 
        //     array
        //     (
        //         ':telefone'=>$this->getTelefone(),
        //         ':email'=>$this->getEmail(),
        //         ':id'=>$this->getId()
        //     ));
        // }

        // //* Efetuar Login
        // public function EfetuarLogin($_cpf, $_senha)
        // {
        //     $sql = new Sql();
        //     $_senhac = md5($_senha); //todo: Senha c = senha Criptografada
        //     $resultado = $sql->select('SELECT * FROM usuario WHERE Cpf = :Cpf AND Senha = :Senha',
        //     array
        //     (
        //         ':Cpf' => $_cpf,
        //         ':Senha' => $_senhac
        //     ));
        //     if(count($resultado)>0)
        //     {
        //         $this->setData($resultado[0]);
        //     }
        // }
        
        //* Listar Usuario





        // //* Gerar Lista adm
        // //* '::' chama um metodo estático da classe 
        // public static function getList()
        // {
        //     $sql = new Sql();
        //     return $sql->select('SELECT * FROM administrador');
        //     //* Realiza um busca no banco trazendo tudo que é administrador onde o criterio é nome.
        // }
        // //* Pesquisa por parte do nome
        // //todo: 'LIKE' junto ao '%'ed'%' retorna tudo que tenha 'ed' no nome inteiro como: 'Edson' e 'Eduardo' entre outros.
        // public static function search($nome_adm)
        // {
        //     $sql = new Sql();
        //     return $sql->select('SELECT * FROM administrador WHERE nome LIKE :nome', array(':nome'=>"%".$nome_adm."%"));
        // }
        // //* Concluir o login 
        // public function efetuarlogin($_login, $_senha)
        // {
        //     $sql = new SQL();
        //     $senhaMd5 = md5($_senha);
        //     $results = $sql->select('SELECT * FROM administrador WHERE login = :login AND senha = :senha', 
        //     array
        //     (
        //         ':login'=>$_login,
        //         ':senha'=>$senhaMd5
        //     ));
        //     if(count($results)>0)
        //     {
        //         $this->setData($results[0]);
        //     }
        // }












        

    }




?>