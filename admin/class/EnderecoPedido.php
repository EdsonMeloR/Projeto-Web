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
        public function SetIdEndereco($value)
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
        public function SetIdTipoEndereco($value)
        {
            $this->idTipoEndereco = $value;
        }

        //* ---------------------------------------Métodos da classe-----------------------------------------------
        public function Insert()
        {
            $sql = new Sql();
            $resultado = $sql->select('CALL insert_pedidosenderecos(:idend ,:idped ,:idtipoend)',
            array
            (
                ':idend' = $this->GetIdEndereco(),
                ':idped' = $this->GetIdPedido(),
                ':idtipoend' = $this->GetIdTipoEndereco()
            ));
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }
        }
        //*-----------------------------------Construtores-----------------------------------
        public function SetData($data)
        {
            $this->SetIdEndereco($data['IdEndereco']);
            $this->SetIdPedido($data['idPedido']);
            $this->SetIdTipoEndereco($data['idTiposEnderecos']);
        }
        public function __construct($_idend="",$_idPed="", $_idTipoEnd="")
        {
            $this->idEndereco = $_idend;
            $this->idPedido = $_idPed;
            $this->idTipoEndereco = $_idTipoEnd;
        }
    }
?>