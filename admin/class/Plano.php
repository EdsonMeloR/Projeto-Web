<?php

    class Plano
    {
    
        // ! ATRIBUTOS DA CLASSE PLANO
        
        private $id;
        private $nomePlano;
        private $descricaoPlano;
        private $valorPlano;
        private $duracaoPlano;
        private $limitePedido;

        // ! METODOS DA CLASSE PLANO
        
        // * ID
        
        public function getId()
        {
            return $this->id;
        }

        public function setId($value)
        {
            $this->id = $value;
        }
        
        // * NOME PLANO

        public function getNomePlano()
        {
            return $this->nomePlano;
        }

        public function setNomePlano($value)
        {
            $this->nomePlano = $value;
        }
        
        // * DESCRIÇÃO DO PLANO

        public function getDescricaoPlano()
        {
            return $this->descricaoPlano;
        }

        public function setDescricaoPlano($value)
        {
            $this->descricaoPlano = $value;
            
        }
        
        // * VALOR DO PLANO

        public function getValorPlano()
        {
            return $this->valorPlano;
        }

        public function setValorPlano($value)
        {
            $this->valorPlano = $value;
        }
        
        // * DURAÇÃO DO PLANO

        public function getDuracaoPlano()
        {
            return $this->duracaoPlano;
        }

        public function setDuracaoPlano($value)
        {
            $this->duracaoPlano = $value;
        }
        
        // * LIMITE DO PEDIDO

        public function getLimitePedido()
        {
            return $this->limitePedido;
        }

        public function setLimitePedido($value)
        {
            $this->limitePedido = $value;
        }
        
        // ! CONSTRUTOR DAS VARIÁVEIS
        
        public function __construct($_nomePlano="", $_descricaoPlano="", $_valorPlano="", $_duracaoPlano="", $_limitePedido="")
        {
            $this->nomePlano = $_nomePlano;
            $this->descricaoPlano = $_descricaoPlano;
            $this->valorPlano = $_valorPlano;
            $this->duracaoPlano = $_duracaoPlano;
            $this->limitePedido = $_limitePedido;
        }
        
        // ! PEGA VALORES PARA AS VARIAVEIS
        
        public function setData($data)
        {
            $this->setId($data['']);
            $this->setNomePlano($data['']);
            $this->setDescricaoPlano($data['']);
            $this->setValorPlano($data['']);
            $this->setDuracaoPlano($data['']);
            $this->setLimitePedido($data['']);
        }
        
    }

?>