  <head>
      <meta charset="utf-8">
  </head>


  <?php

    class Cliente
    {
        public $endereco;
        public $bairro;

        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }

        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }

        public function verEndereco()
        {
            echo "<h1> Cliente Comum </h1>";
            return  "Endereço completo: {$this->endereco}  -  {$this->bairro}";
        }
    }

    ?>