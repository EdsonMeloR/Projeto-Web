<?php
    class Plano
    {
    
        //* Atributos
        
        private $id;
        private $nomePlano;
        private $descricaoPlano;
        private $valorPlano;
        private $duracaoPlano;
        private $limitePedido;

        //* Métodos 

        //* Id        
        public function getId()
        {
            return $this->id;
        }

        public function setId($value)
        {
            $this->id = $value;
        }
        
        //* Nome plano
        public function getNomePlano()
        {
            return $this->nomePlano;
        }

        public function setNomePlano($value)
        {
            $this->nomePlano = $value;
        }
        
        //* Descrição do plano
        public function getDescricaoPlano()
        {
            return $this->descricaoPlano;
        }

        public function setDescricaoPlano($value)
        {
            $this->descricaoPlano = $value;
        }
        
        //* Valor do plano
        public function getValorPlano()
        {
            return $this->valorPlano;
        }

        public function setValorPlano($value)
        {
            $this->valorPlano = $value;
        }
        
        //* Duração do plano
        public function getDuracaoPlano()
        {
            return $this->duracaoPlano;
        }

        public function setDuracaoPlano($value)
        {
            $this->duracaoPlano = $value;
        }

        //* Limete De Pedido
        public function getLimitePedido()
        {
            return $this->limitePedido;
        }

        public function setLimitePedido($value)
        {
            $this->limitePedido = $value;
        }

        //* --------------------------------------Métodos da classe----------------------------------------

        //* Gerar Listar De planos
        public  static function ListaPlanos()
        {
            $sql = new Sql();
            return $sql->select("SELECT * FROM plano order by idPlanos");
        }

        //* -------------------------------------------Métodos Construtores-------------------------------------

        public function __construct($_nomePlano="", $_descricaoPlano="", $_valorPlano="", $_duracaoPlano="", $_limitePedido="")
        {
            $this->nomePlano = $_nomePlano;
            $this->descricaoPlano = $_descricaoPlano;
            $this->valorPlano = $_valorPlano;
            $this->duracaoPlano = $_duracaoPlano;
            $this->limitePedido = $_limitePedido;
        }
        
        //* Armazena valores nas variaveis
        
        public function setData($data)
        {
            $this->setId($data['idPlano']);
            $this->setNomePlano($data['NomePlano']);
            $this->setDescricaoPlano($data['DescricaoPlano']);
            $this->setValorPlano($data['ValorPlano']);
            $this->setDuracaoPlano($data['DuracaoPlano']);
            $this->setLimitePedido($data['LimitePedidos']);
        }
    }
?>