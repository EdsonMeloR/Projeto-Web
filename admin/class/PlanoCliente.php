<?php
    Class PlanoCliente
    {

        //* Atributos

        private $idPlanoCliente;
        private $dataInicio;
        private $dataTermino;
        private $desconto;
        private $idCliente;
        private $idPlano;

        //* Métodos

        //* Id
        public function GetId()
        {
            return $this->idPlanoCliente;
        }

        public function SetId($value)
        {
            $this->idPlanoCliente = $value;
        }

        //* Data de Inicio do Plano
        public function GetDataIni()
        {
            return $this->dataInicio;
        }

        public function SetDataIni($value)
        {
            $this->dataTermino = $value;
        }

        //* Desconto
        public function GetDesconto()
        {
            return $this->desconto;
        }

        public function SetDesconto($value)
        {
            $this->desconto = $value;
        }

        //* Id no Cliente
        public function GetIdCliente()
        {
            return $this->idCliente;
        }

        public function SetIdCliente($value)
        {
            $this->idCliente = $value;
        }

        //* Id Do Plano
        public function GetIdPlano()
        {
            return $this->idPlano; 
        }

        public function SetIdPlano($value)
        {
            $this->idPlano = $value;
        }

        //* -----------------------------------Métodos da classe----------------------------------
        //* Associar ao plano
        public function AssociarPlano()
        {
            $sql = new Sql();
            $resultado = $sql->select('CALL insert_plano')
        }

        //* Consultar Plano especifico
        //* Listar Planos do cliente
        public static function ListarPlanoCliente($_cliente)
        {
            $sql = new Sql();
            $sql->select('SELECT * From planocliente where IdCliente = :cliente',
            array
            (
                ':cliente' = $_cliente
            ));        
        }


    }



?>