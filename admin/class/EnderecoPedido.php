<?php
    class EnderecoPedido
    {
        //* Atributos
        private $idEndereco;
        private $idPedido;
        private $idTipoEndereco;

        //* Métodos
        //* Id Endereço
        public function GetIdEndereco()
        {
            return $this->idEndereco;
        }
        public function SetEndereco($value)
        {
            $this->idEndereco = $value;
        }
        //*  Id Pedido
        public function GetIdPedido()
        {
            return $this->idPedido;
        }
        public function SetIdPedido($value)
        {
            $this->idPedido = $value;
        }
        //* Id Tipo endereço
        public function GetIdTipoEndereco()
        {
            return $this->idTipoEndereco;
        }
        public function Set($value)
        {
            $this->idTipoEndereco = $value;
        }

        //* ---------------------------------------Métodos da classe-----------------------------------------------
        public function Insert()
        {
            $sql = new Sql();
            $sql->select('CALL ')
        }


    }








?>