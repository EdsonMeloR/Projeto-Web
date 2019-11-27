<?php
    class Pedido
    {
        //* Atributos
        private $idPedido;
        private $situacao;
        private $datapedido;
        private $retirar;
        private $idUsuario;
        private $idCLiente;

        //* Métodos

        //* Id do Pedido
        public function GetIdPed()
        {
            return $this->idPedido;
        }

        public function SetIdPed($value)
        {
            $this->idPedido = $value;
        }

        //* Situação do pedido
        public function GetSituacao()
        {
            return $this->situacao;
        }

        public function SetSituacao($value)
        {
            $this->situacao = $value;
        }

        //* Data do Pedido

        public function GetDataPed()
        {
            return $this->datapedido;
        }

        public function SetDataPed($value)
        {
            $this->datapedido = $value;
        }

        //* Retirar Pedido ????
        public function GetRetirar()
        {
            return $this->retirar;
        }

        public function SetRetirar($value)
        {
            $this->retirar = $value;
        }

        //* Id do Usuario
        public function GetIdUser()
        {
            return $this->idUsuario;
        }

        public function SetIdUser($value)
        {
            $this->idUsuario = $value;
        }

        //* Id do Cliente

        public function GetIdCli()
        {
            return $this->idCLiente;
        }

        public function SetIdCli($value)
        {
            $this->idCLiente = $value;
        }

        //*------------------------------------ Métodos da classe------------------------------------

        //* Cadastrar Pedido
        public function Insert()
        {
            $sql = New Sql();
            $resultado = $sql->select('CALL insert_pedido(:situacao, :retirar, :iduser, :idcli)',
            array
            (
                ':situacao' = GetSituacao(),
                ':retirar' = GetRetirar(),
                ':iduser' = GetIdUser(),
                ':idcli' = GetIdCli()
            ));
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }            
        }

        //* Alterar siuação do pedido
        public function Alterar($_situacao, $_idped)
        {
            $sql = new Sql();
            $sql->select('CALL update_pedido(:situacao, :idpedido)',
            array
            (
                ':situacao' = $_situacao,
                ':idpedido' = $_idped
            ));
        }

        //* Consultar pedido 
        public function ConsultarPedido($_id)
        {
            $sql = new Sql();
            $sql->select('SELECT * FROM pedido WHERE idCliente = :id',
            array
            (
                ':id' = $_id
            ));
        }

             
    }
?>