<?php 
    class Animal{
        private $peso;
        private $especie;

        public function __contruct($peso, $especie){
            $this->peso = $peso;
            $this->especie = $especie;
        }

        public function setPeso($peso){
            $this->peso = $peso;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setEspecie($especie){
            $this->especie = $especie;
        }

        public function getEspecie(){
            return $this->especie;
        }

        public function getValor(){
            return $this->peso . $this->especie;
        }

    }

    