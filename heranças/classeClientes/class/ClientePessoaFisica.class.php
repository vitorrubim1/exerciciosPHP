<head>
    <meta charset="utf-8">
</head>

<?php
    require_once "Cliente.class.php";

    class ClientePessoaFisica extends Cliente {
        public $nome;
        public $cpf;

        public function setNome($nome){
            $this ->nome = $nome;
        }

        public function setCpf($cpf){
            $this ->cpf = $cpf;
        }

        public function verEndereco(){
            echo "<h1> Pessoa Física </h1>";
            return  "{$this ->nome} seu endereço completo: {$this ->endereco}  -  {$this ->bairro} e CPF {$this ->cpf}";
        }
        
    }

?>