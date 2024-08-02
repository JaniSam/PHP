<?php 
    require 'Animal.php';
    class Perro extends Animal{
        var $nombre;
        var $edad;

        public function __construct($peso, $especie, $nombre, $edad){
            $this->peso = $peso;
            $this->especie = $especie;
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function setNombre($nom){
            $this->nombre = $nom;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setEdad($nom){
            $this->edad = $edad;
        }

        public function getEdad(){
            return $this->edad;
        }
        
        public function getEdadAnimal(){
            return $this->edad*7;
        }

        public function to_String(){
            return parse::__construct($this->especie.$this->peso). "El nombre del perro es: ". $this->nombre. " y tiene: ". $this->edad. " años";
        }
    }
