<?php
    class Entrega   
    {
        //* Atributos
        private $idEntrega;
        private $assinatura;
        private $rg;
        private $data;
        private $status;
        private $idNotaTransporte;
        //* Métodos
        //* Id Entrega
        public function GetidEntrega()
        {
            return $this->idEntrega;
        }
        public function SetidEntrega($value)
        {
            $this->idEntrega = $value;
        }
        //* Assinatura
        public function GetAssinatura()
        {
            return $this->assinatura;
        }
        public function SetAssinatura($value)
        {
            $this->assinatura = $value;
        }
        //* Rg
        public function GetRg()
        {
            return $this->rg;
        }
        public function SetRg($value)
        {
            $this->rg = $value;
        }
        //* Data Entrega
        public function GetDataEntr()
        {
            return $this->data;
        }
        public function SetDataEntr($value)
        {
            $this->data = $value;
        }
        //* Status
        public function GetStatus()
        {
            return $this->status;
        }
        public function SetStatus($value)
        {
            $this->status = $value;
        }
        //* Id Nota Transporte
        public function GetIdNotaTranporte()
        {
            return $this->idNotaTransporte;
        }
        public function SetIdNotaTranporte($value)
        {
            $this->idNotaTransporte = $value;
        }
        //* -------------------------- Métodos da classe-----------------------------
        public function ListarEntrega($_id)
        {
            $sql = new Sql();
            $sql->select('SELECT * FROM entrega WHERE id = :id',
            array
            (
                ':id' = $_id
            ));
        }
        //* ---------------------Construtor ----------------------------------
        public function setData($data)
        {   
            $this->SetidEntrega($data['IdEntrega']);
            $this->SetAssinatura($data['Assinatura']);
            $this->SetRg($data['Rg']);
            $this->setDataEntr($data['Data']);
            $this->SetStatus($data['Status']);           
            $this->SetIdNotaTranporte($data['idNotaTransporte']);
        }

        //* Construtor 
        public function __construct($_ass="", $_rg="", $_data="", $_status="", $_idnotatrans="",$_nomec="", $_cnpjc="")
        {
            $this->assinatura = $_ass;
            $this->rg = $_rg;
            $this->data = $_data;
            $this->status = $_status;
            $this->idNotaTransporte = $_idnotatrans;
        }
    }
?>