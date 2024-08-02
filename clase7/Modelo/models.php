<?php
    abstract class Persona{
        private $nombreApellido;
        private $cedula;
        private $fechaNacimiento;

        public function __construct($nomAp, $ci, $fc){
            $this->nombreApellido = $nomAp;
            $this->cedula = $ci;
            $this->fechaNacimiento =  $fc;
        }

        public function setNomAp($nomAp){
            $this->nombreApellido = $nomAp;
        }

        public function getNomAp(){
            return $this->nombreApellido;
        }

        public function setCedula($ci){
            $this->cedula = $ci;
        }

        public function getCedula(){
            return $this->cedula;
        }

        public function setFechaNaci($fc){
            $this->fechaNacimiento = $fc;
        }

        public function getFechaNaci(){
            return $this->fechaNacimiento;
        }

        public function getDatos(){
            return $this->nombreApellido. $this->cedula. $this->fechaNacimiento;
        }

        abstract public function getValor();
    }

    class Cliente extends Persona{
        
        private $telefono;
        private $direccion;

        public function __construct($nomAp, $ci, $fc, $tel, $dir){
            $this->nombreApellido = $nomAp;
            $this->cedula = $ci;
            $this->fechaNacimiento = $fc;
            $this->telefono = $tel;
            $this->direccion = $dir;
        }

        public function getValor(){
            return parent:: getNomAp(). $this->telefono .$this->direccion;
        }
        
        public function setTel($tel){
            $this->telefono = $tel;
        }

        public function getTel(){
            return $this->telefono;
        }

        public function setDireccion($dir){
            $this->direccion = $dir;
        }

        public function getDireccion(){
            return $this->direccion;
        }
    }

    $cli1 = new Cliente("Janina","6172896","19/11/2003","09874656321","J.Augusto Saldivar");
    
    echo $cli1->getValor();
?>