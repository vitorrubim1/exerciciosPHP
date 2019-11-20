<?php

    class Verifica {
        //ATRIBUTOS
        public $valor;

        //METODOS

        //SET
        public function setValor ($valor){
            $this->valor = $valor;
        }

        //GET
        public function getValor (){
            return $this ->valor;
        }


        public function checagem () {

            if (strlen($this -> valor) > 1){
                echo "Digite apenas um caracter";
            }
            else if (!is_numeric($this -> valor)){
                if ($this ->valor == "a" || $this ->valor == "e" || $this ->valor == "i" || $this ->valor == "o" || $this ->valor == "u" ){
                    echo "A letra digitada é vogal";
                }
                else {
                    echo "A letra digitada é uma consoante";
                }
            }   
            else if ($this -> valor % 2 == 0) {
                echo "Este número é par";
            }
            else {
                echo "Este número é impar";
            }       
            
        }
    }

?>

