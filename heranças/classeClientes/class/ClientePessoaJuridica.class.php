<head>
    <meta charset="utf-8">
</head>

<?php
    require_once "Cliente.class.php";

    class ClientePessoaJuridica extends Cliente {
        public $nomeFantasia;
        public $cnpj;

        public function setNomeFantasia($nomeFantasia){
            $this ->nomeFantasia = $nomeFantasia;
        }
        public function setCnpj($cnpj){
            $this ->cnpj = $cnpj;
        }
        public function verEndereco(){
            echo "<h1> Pessoa Jurídica </h1>";
            return  "{$this ->nomeFantasia} seu endereço completo: {$this ->endereco}  -  {$this ->bairro} e CPF {$this ->cnpj}";
        }
    }

?>