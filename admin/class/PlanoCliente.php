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

        //* Data de termino do plano
        public function GetDataTer()
        {
            return $this->dataTermino;
        }

        public function SetDataTermino($value)
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
            $resultado = $sql->select('CALL insert_planocliente(:dataini, :dataterm, :desc, :idcli, :idplano)',
            array
            (
                ':dataini'=>$this->GetDataIni(),
                ':dataterm'=>$this->GetDataTer(),
                ':desc'=>$this->GetDesconto(),
                'idcli'=>$this->GetIdCliente(),
                ':idplano'=>$this->GetIdPlano()
            ));
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }   
        }

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

        //* Consultar Plano especifico
        public function ConsultarPlano($_id)
        {
            $sql = new Sql();
            $sql->select('SELECT * FROM planocliente WHERE idPlano = :id',
            array
            (
                ':id' = $_id
            ));
        }

        //* ------------------------- Construtor -----------------------------------
        public function __construct($_idPlanoCli, $_DataIni, $_DataTerm, $_Desconto, $_idCli, $_idPlano)
        {
            $this->idPlano = $_idPlanoCli;
            $this->dataInicio = $_DataIni;
            $this->dataTermino = $_DataTerm;
            $this->desconto = $_Desconto;
            $this->idCliente = $_idCli;
            $this->idPlano = $_idPlano;
        }

        //* Set Data
        public function SetData($data)
        {
            $this->SetId($data['idPlanoCliente']);
            $this->SetDataIni($data['DataInicio']);
            $this->SetDataTermino($data['DataTermino']);
            $this->SetDesconto($data['Desconto']);
            $this->
        }

    }



?>