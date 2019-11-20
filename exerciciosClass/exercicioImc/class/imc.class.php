<?php

    class Verifica {
        //atributos
        public $altura;
        public $peso;
        public $nome;
        public $sexo;
        
        //metodos
        
        //set
        public function setAltura ($altura){
            $this->altura = $altura;
        }
        public function setPeso ($peso){
            $this->peso = $peso;
        }
        public function setNome ($nome){
            $this->nome = $nome;
        }
        public function setSexo ($sexo){
            $this->sexo = $sexo;
        }

        //get
        public function getAltura (){
            return $this ->altura;
        }
        public function getPeso(){
            return $this ->peso;
        }
        public function getNome(){
            return $this ->nome;
        }
        public function getSexo(){
            return $this ->sexo;
        }

        public function checagem (){

            $imc = ($this -> peso / ($this -> altura * $this -> altura));  

            if ($this -> sexo == "masculino"){
                if ($imc >= 43){
                    echo "{$this->nome} você está com obesidade mórbida";
                }
                else if ($imc >= 30 & $imc <= 39.9){
                    echo "{$this->nome} você está com obesidade moderada";
                }
                else if ($imc >= 25 & $imc <= 29.9){
                    echo "{$this->nome} você está com obesidade leve";
                }
                else if ($imc >= 20 & $imc <= 24.9){
                    echo "{$this->nome} você está normal";
                }
                else if ($imc <= 20){
                    echo "{$this->nome} você está Abaixo do normal";
                }
            }
            else  {
                if ($imc >= 39){
                    echo "{$this->nome} você está com obesidade mórbida";
                }
                else if ($imc >= 29 & $imc <= 38.9){
                    echo "{$this->nome} você está com obesidade moderada";
                }
                else if ($imc >= 24 & $imc <= 28.9){
                    echo "{$this->nome} você está com obesidade moderada";
                }
                else if ($imc >= 19 & $imc <= 23.9){
                    echo "{$this->nome} você está com obesidade leve";
                }
                else if ($imc <= 19){
                    echo "{$this->nome} você está abaixo do peso normal";
                }
            }
      

        }
    
    
    }
