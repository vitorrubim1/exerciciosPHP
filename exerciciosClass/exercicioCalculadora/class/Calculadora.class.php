<?php

    class Calcula {
        //ATRIBUTOS
        public $valor1;
        public $valor2;
        public $operacao;


        //METODOS

        //SET's
        public function setValor1 ($valor1){
            $this -> valor1 = $valor1;
        }

        public function setValor2 ($valor2){
            $this -> valor2 = $valor2;
        }

        public function setOperacao ($operacao){
            $this -> operacao = $operacao;
        }

        //GET's
        public function getValor1(){
            return $this -> valor1;
        }
        
        public function getValor2(){
            return $this -> valor2;
        }

        public function getOperacao(){
            return $this -> operacao;
        }
        
        public function Conta (){
            if ($this -> operacao == "adicao"){
                //adicao
                return $this->valor1 + $this->valor2; 
            }
            else if ($this -> operacao == "subtracao"){
                //subtracao
                return $this->valor1 - $this->valor2;
            }
            else if ($this -> operacao == "divisao"){
                //divisao
                return $this->valor1 / $this->valor2;
            }
            else {
                //multiplicacao
                return $this->valor1 * $this->valor2;
            }
        }
    }

?>