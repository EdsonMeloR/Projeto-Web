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

        //* Inserir Carga
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
        }

        //* Atualizar Carga
        public function Alterar($_peso, $_largura, $_altura, $_comprimento, $_nome, $_detalhe, $_quantidade, $_id, $_idtipo, $_valor)
        {
            $sql = new Sql();
            $sql->select('CALL update_carga(:peso, :largura, :altura, :comprimento, :nome, :detalhe, :quantidade, :id, :idtipo, :valor)',
            array
            (
                ':peso' = $_peso,
                ':largura' = $_largura,
                ':altura'= $_altura,
                ':comprimento'= $_comprimento,
                ':nome'= $_nome,
                ':detalhe'= $_detalhe,
                ':quantidade'= $_quantidade,
                ':id'= $_id,
                ':idtipo'= $_idtipo,
                ':valor'= $_valor
            ));
        }

        //* Listar cargas
        public static function ListarCarga($_id)
        {
            $sql = new Sql();
            return $sql->select('SELECT * FROM carga WHERE idPedido = :id',
            array
            (
                ':id'= $_id
            ));
        }     


    } 






































?>