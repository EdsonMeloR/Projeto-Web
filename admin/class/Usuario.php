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
            $this->setId($data['IdUsuario']);
            $this->setNome($data['Nome']);
            $this->setCpf($data['Cpf']);
            $this->setTelefone($data['Telefone']);
            $this->setSenha($data['Senha']);
            $this->setEmail($data['Email']);
            $this->setNivel($data['idNiveis']);
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


        public function Alterar()
        {
            $sql = new Sql();
            $sql->select("CALL update_usuario(:telefone,:email,:)");
        }

        public function FazerLogin($_cpf, $_senha)
        {
            $sql = new Sql();
            $_senhaCript = md5($_senha);
            $resultado = $sql->select('SELECT * FROM usuario WHERE Cpf = :Cpf AND Senha = :Senha',
                array
                (
                    ':Cpf' => $_cpf,
                    ':Senha' => $_senhaCript
                )
            );

            if(count($resultado) > 0 )
            {
                $this->setData($resultado[0]);
            }
        }

    }
    
    

?>