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

        public function SetIdTipoTransporte($value)
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

        public function DetalharNotaTranporte($_id)
        {
            $sql = new Sql();
            $sql->select('SELECT * FROM notatransporte WHERE id = :id',
            array
            (
                ':id' = $_id
            ));
        }
    }






?>