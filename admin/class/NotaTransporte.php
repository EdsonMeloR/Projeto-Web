<?php
    class NotaTransporte
    {
        //* Atributos
        private $idNotaTranporte;
        private $idVeiculo;
        private $idMotorista;
        private $idTipoFrete;
        private $distancia;
        private $valorFrete;
        private $dataEmissao;

        //* Métodos

        //* Nota de tranporte
        public function GetIdNotaTransporte()
        {
            return $this->idNotaTranporte;
        }
        public function SetIdNotaTransporte($value)
        {
            $this->idNotaTranporte = $value;
        }

        //* id Veiculo
        public function GetIdVeiculo()
        {
            return $this->idVeiculo;
        }

        public function SetIdVeiculo($value)
        {
            $this->idVeiculo = $value;
        }

        //* Id do Motorista
        public function GetIdMotorista()
        {
            return $this->idMotorista;
        }

        public function SetIdMotoriste($value)
        {
            $this->idMotorista = $value;
        }        

        //* Id tipo transporte 
        public function GetIdtipoFrete()
        {
            return $this->idTipoFrete;
        } 

        public function SetIdTipoFrete($value)
        {
            $this->idTipoFrete = $value;
        }

        //* Distancia
        public function GetDistancia()
        {
            return $this->distancia;
        }

        public function SetDistancia($value)
        {
            $this->idTipoFrete = $value;
        }

        //* Valor do Frete
        public function GetValorFrete()
        {
            return $this->valorFrete;
        }

        public function SetValorFrete($value)
        {
            $this->valorFrete = $value;
        }

        //* Data Emissao
        public function GetDataEmissao()
        {
            return $this->dataEmissao;
        }

        public function SetDataEmissao($value)
        {
            $this->dataEmissao = $value;
        }

        //* Métodos da classe

        public function ListarNotaTransporte($_id)
        {
            $sql = new Sql();
            return $sql->select('SELECT * FROM notatranporte WHERE idNotaTransporte = :id',
            array
            (
                ':id' = $_id
            ));
        }

        //* Detalhar Nota Transporte
        //! Revisar----------------------------------------
        public function DetalharNotaTranporte($_id)
        {
            $sql = new Sql();
            $sql->select('SELECT * FROM notatransporte WHERE id = :id',
            array
            (
                ':id' = $_id
            ));
        }
        public function setData($data)
        {   
//             `idNotaTransporte` INT(11) NOT NULL AUTO_INCREMENT,
// --   `idVeiculo` INT(11) NOT NULL,
// --   `idMotorista` INT(11) NOT NULL,
// --   `idTiposFretes` INT(11) NOT NULL,
// --   `Observacoes` VARCHAR(255) NULL DEFAULT NULL,
// --   `ValorPedagios` DECIMAL(10,2) NOT NULL,
// --   `Distancia` DECIMAL(10,3) NOT NULL,
// --   `DataEntrega` DATE NULL DEFAULT NULL,
// --   `ValorFrete` DECIMAL(10,2) NOT NULL,
            $this->SetIdNotaTransporte($data['IdNotaTransporte']);
            $this->SetIdVeiculo($data['idVeiculo']);
            $this->SetIdMotoriste($data['idMotorista']);
            $this->SetIdTipoFrete($data['idTipoFretes']);
            $this->SetDistancia($data['Distancia']);           
            $this->SetValorFrete($data['ValorFrete']);
            $this->SetDataEmissao($data['DataEntrega']);
        }

        //* Construtor 
        public function __construct($_idvei="", $_idmot="", $_idtipofrete="", $_distancia="", $_valor="",$_dataemis="")
        {
            $this->idVeiculo = $_idvei;
            $this->idMotorista = $_idmot;
            $this->idTipoFrete = $_idtipofrete;
            $this->distancia = $_distancia;
            $this->valorFrete = $_valor;
            $this->dataEmissao = $_dataemis;
        }
    }






?>