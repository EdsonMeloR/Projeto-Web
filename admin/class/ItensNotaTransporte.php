<?php
    class ItensNotaTransporte
    {
        //* Atributos
        private $idCarga;
        private $idNotaTranporte;
        //* Métodos
        //* Id Carga
        public function GetidCarga()
        {
            return $this->idCarga;
        }
        public function SetidCarga($value)
        {
            $this->idCarga = $value;
        }
        //* Id Nota transporte
        public function GetIdNotaTransporte()
        {
            return $this->idNotaTranporte;
        }
        public function SetIdNotaTransporte($value)
        {
            $this->idNotaTranporte = $value;
        }
        //* ----------------------------Métodos ------------------------
        public function ListarItem()
        {
            $sql = Sql();
            $sql->select('SELECT * FROM itensnotatransporte WHERE idNotaTransporte = :id',
            array
            (
                ':id' = GetIdNotaTransporte
            ));
        }
        public function setData($data)
        {   
            $this->SetidCarga($data['idCarga']);
            $this->SetIdNotaTransporte($data['idNotaTransporte']);
            
        }

        //* Construtor 
        public function __construct($_carga="", $_notatrans="")
        {
            $this->idCarga = $_carga;
            $this->idNotaTranporte = $_notatrans;
        }
        
    }













?>