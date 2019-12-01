<?PHP
    class Endereco
    {
        //* Atributos
        private $idEndereco;
        private $logradouro;
        private $cep;
        private $numero;
        private $complemento;
        private $referencia;
        private $idCliente;

        //* Métodos
        //* Id Endereços
        public function GetIdEnd()
        {
            return $this->idEndereco;
        }
        public function SetIdEnd($value)
        {
            $this->idEndereco = $value;
        }
        //* logradouro
        public function GetLogradouro()
        {
            return $this->logradouro;
        }
        public function Setlogradouro($value)
        {
            $this->logradouro = $value;
        }
        //* Cep
        public function GetCep()
        {
            return $this->cep;
        }
        public function SetCep($value)
        {
            $this->cep = $value;
        }
        //* Numero
        public function GetNumero()
        {
            return $this->numero;
        }
        public function SetNumero($value)
        {
            $this->numero = $value;
        }
        //* Complemento
        public function GetComplemento()
        {
            return $this->complemento;
        }
        public function SetComplemento($value)
        {
            $this->complemento = $value;
        }
        //* Referencia
        public function GetReferencia()
        {
            return $this->referencia;
        }
        public function SetReferencia($value)
        {
            $this->referencia = $value;
        }
        //* Id Cliente
        public function GetIdCliente()
        {
            return $this->idCliente;
        }
        public function SetIdCliente($value)
        {
            $this->idCliente = $value;
        }

        //* Métodos da classe
        //* Inserir endereço
        public function Insert()
        {
            $sql = new Sql();
            $resultado = $sql->select('CALL insert_endereco(:log, :cep, :num, :comp, :ref, :idcli)',
            array
            (
                ':log' = GetLogradouro(),
                ':cep' = GetCep(),
                ':num' = GetNumero(),
                ':comp' = GetComplemento(),
                ':ref' = GetReferencia(),
                ':idcli' = GetIdCliente()
            )); 
            if(count($resultado)>0)
            {
                $this->setData($resultado[0]);
            }           			
        }
        //* Alterar endereço
        public function Alterar($_log, $_cep, $_num, $_comp, $_ref, $_idend)
        {
            $sql = new Sql();
            $sql->select('CALL update_endereco(:log, :cep, :num, :comp, :ref, :idend)',
            array
            (
                ':log'=$_log,
                ':cep' = $_cep,
                ':num' = $_num,
                ':comp'= $_comp,
                ':ref' = $_ref,
                'idend' = $_idend
            ));
        }
        //* Construtor e set data
        public function setData($data)
        {   
            $this->SetId($data['IdEndereci']);
            $this->Setlogradouro($data['logradouro']);
            $this->SetCep($data['cep']);
            $this->SetNumero($data['numero']);           
            $this->SetComplemento($data['complemento']);
            $this->SetReferencia($data['referencia']);
            $this->SetIdCliente($data['idCliente']);
        }

        //* Construtor 
        public function __construct($_log="", $_cep="", $_num="", $_comp="", $_ref="",$_idcli="")
        {
            $this->logradouro = $_log;
            $this->cep = $_cep;
            $this->numero = $_num;
            $this->complemento = $_comp;
            $this->referencia = $_ref;
            $this->idCliente = $_idcli;
        }        
    }
?>