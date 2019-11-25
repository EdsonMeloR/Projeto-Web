<?php

    // ! A CLASSE SQL HERDOU TODOS OS ATRIBUTOS DA PDO
    class Sql extends PDO
    {
        // * ATRIBUTO DA CLASSE

        private $cn;

        public function __construct()
        {
            $this->cn = new PDO("mysql:host=localhost;dbname=prosperitydb",'root','');   
        }

        public function setParams($comando, $parametros = array())
        {
            foreach($parametros as $key =>$value)
            {
                $this->setParams($comando, $key, $value);
            }
        }

        public function setParam($cmd, $key, $value)
        {
            $cmd->bindParam($key, $value);
        }

        public function query( $comandoSql, $params =array())
        {
            $cmd = $this->cn->prepare($comandoSql);
            $this->setParams($cmd, $params);
            $cmd->execute();
            return $cmd;            
        }

        public function select($comandoSql, $params = array())
        {
            $cmd = $this->query($comandoSql, $params);
            return $cmd->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>