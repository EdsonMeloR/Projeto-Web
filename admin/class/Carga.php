<?php
    class Carga
    {
        //* Atributos
        private $idCarga;
        private $idTipo;
        private $idPedido;
        private $peso;
        private $largura;
        private $altura;
        private $comprimento;
        private $nomeProduto;
        private $detalhesProduto;
        private $valorProduto;
        private $quantidade;

        //* Métodos

        //* Id da carga
        public function GetIdCarga()
        {
            return $this->idCarga;
        }

        public function SetIdCarga($value)
        {
            $this->idCarga = $value;
        }

        //* Id do tipo de carga
        public function GetIdTipo()
        {
            return $this->idTipo;
        }

        public function SetIdTipo($value)
        {
            $this->idTipo = $value;
        }

        //* Id do pedido
        public function GetIdPedido()
        {
            return $this->idPedido;
        }

        public function SetIdPedido($value)
        {
            $this->idPedido = $value;
        }

        //* Peso
        public function GetPeso()
        {
            return $this->peso;
        }

        public function SetPeso($value)
        {
            $this->peso = $value;
        }

        //* Largura
        public function GetLargura()
        {
            return $this->largura;
        }

        public function SetLargura($value)
        {
            $this->largura = $value;
        }

        //* Altura
        public function GetAltura()
        {
            return $this->altura;
        }

        public function SetAltura($value)
        {
            $this->altura = $value;
        }

        //* Comprimento 
        public function GetComprimento()
        {
            return $this->comprimento;
        }

        public function SetComprimento($value)
        {
            $this->comprimento = $value;
        }

        //* Nome do produto
        public function GetNomeProd()
        {
            return $this->nomeProduto;
        }

        public function SetNomeProd($value)
        {
            $this->nomeProduto = $value;
        }

        //* Detalhe do Produto
        public function GetDetalheProd()
        {
            return $this->detalhesProduto;
        }

        public function SetDetalhesProd($value)
        {
            $this->detalhesProduto = $value;
        }

        //* Valor Do produto
        public function GetValorProd()
        {
            return $this->valorProduto;
        }

        public function SetValorProd($value)
        {
            $this->valorProduto = $value;
        }

        //* Quantidade
        public function GetQuantidade()
        {
            return $this->quantidade;
        }

        public function SetQuantidade($value)
        {
            $this->quantidade = $value;
        }

        //* Métodos 
        public function Insert()
        {
            $sql = new Sql();
            $resultado = $sql->select('CALL insert_carga(:idtipo, :idpedido, :peso, :largura, :altura, :comprimento, :nome, :detalhe, :quantidade)',
            array
            (
                ':idtipo' = GetIdTipo(),
                ':idpedido' = GetIdPedido(),
                ':peso' = GetPeso(),
                ':largura' = GetLargura(),
                ':altura' = GetAltura(),
                ':comprimento' = GetComprimento(),
                ':nome' = GetNomeProd(),
                ':detalhe' = GetDetalheProd(),
                ':quantidade' = GetQuantidade()
            ));
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }
            // (_idtipo int,_idpedido int,_peso decimal(10,4),_largura decimal(10,2),_altura decimal(10,2)
 			// 				,_comprimento decimal(10,2),_nomeproduto varchar(45), _detalhesproduto varchar(45),_valor decimal(10,2),_quantidade int)

        }



    } 






































?>