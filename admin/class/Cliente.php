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

        //* ----------------------------------------Métodos da classe--------------------------------------------------

        //* Inserir cliente 
        Public function Insert()
        {
            $sql = new Sql();
            $resultado = $sql->select('CALL insert_cliente(:rzs, :cnpj, :email, :insc, :senha, :tel, :nomec)',
            array
            (
                ':rzs'=>$this->GetRazaoS(),
                ':cnpj'=>$this->GetCnpj(),
                ':email'=>$this->GetEmail(),
                ':insc'=>$this->GetIncricaoEstadual(),
                ':senha'=>md5($this->GetSenha()),
                ':tel'=>$this->GetTelefone(),
                ':nomec'=>$this->GetNomeContato()
            ));
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }         
        }

        //* Atualizar dados cliente
        public function Alterar($_tel, $_nomec, $_email, $_razs)
        {
            $sql = new Sql();
            $sql->query('CALL update_cliente(:tel, :nomec, :email, :rzsoc)',
            array
            (
                ':tel'=>$this->$_tel,
                ':nomec'=>$this->$_nomec,
                ':email'=>$this->$_email,
                ':rzsoc'=>$this->$_razs
            ));
        }

        //! REVISAR
        //* Efetuar Login
        public function EfetuarLogin($_cnpj, $_senha)
        {
            $sql = new Sql();
            $_senhac = md5($_senha); //todo: Senha c = senha Criptografada
            $resultado = $sql->select('SELECT * FROM cliente WHERE Cnpj = :Cnpj AND Senha = :Senha',
            array
            (
                ':Cnpj' => $_cnpj,
                ':Senha' => $_senhac
            ));
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }
        }

        //* --------------------------------------Métodos de acesso-------------------------------
        
        //* Passa dados aos Atributos
        public function setData($data)
        {   
            $this->SetId($data['IdCliente']);
            $this->SetRazaoS($data['RazaoSocial']);
            $this->SetCnpj($data['Cnpj']);
            $this->setEmail($data['Email']);
            $this->SetInscricaoEstadual($data['Inscricao_estadual']);           
            $this->setSenha($data['Senha']);
            $this->SetTelefone($data['Telefone']);
            $this->SetNomeContato($data['NomeContato']);
        }

        //* Construtor 
        public function __construct($_idcli="",$_rz="", $_email="", $_incr="", $_senha="", $_telefone="",$_nomec="", $_cnpjc="")
        {
            $this->id = $_idcli;
            $this->razaosocial = $_rz;
            $this->email = $_email;
            $this->inscricaoestadual = $_incr;
            $this->senha = $_senha;
            $this->telefone = $_telefone;
            $this->nomeContato = $_nomec;
            $this->cnpj = $_cnpjc;
        }
    }
?>