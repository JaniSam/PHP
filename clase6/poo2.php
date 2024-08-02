<?php 
    class Persona{
        public $nombre;
        public $apellido;
        public $direccion;
        public $telefono;
        public $sexo;
        public function __construct($nom, $ap, $dir, $tel, $s){
            $this-> nombre= $nom;
            $this-> apellido = $ap;
            $this-> direccion =$dir;
            $this-> telefono = $tel;
            $this-> sexo = $s;
        }

        public function getDatos(){
            return "Nombre: $this->nombre <br>Apellidos: $this->apellido<br> Direccion: $this->direccion<br>Telefono: $this->telefono <br>Sexo: $this->sexo";
        }
    }
    class Alumno extends Persona{
        private $grado;
        private $turno;
        private $seccion;

        public function __construct($nom, $ap, $dir, $tel, $s,$gr, $tur, $sec){
            parent::__construct($nom, $ap, $dir, $tel, $s);
            $this->grado = $gr;
            $this->turno = $tur;
            $this->seccion = $sec;
        }

        public function getDatos(){
            return parent::getDatos()."<br>Grado: $this->grado <br> Turno: $this->turno <br>Seccion: $this->seccion";
        }

        
    }
    $alumno1= new Alumno("Janina","Samudio","J.Augusto","03214444","Femenino","Tercero","Tarde","1A");
    echo $alumno1->getDatos();
    $Alumnos = array(
        new Alumno("Rodrigo","Estigarribia","Itá","6025761","Masculino","Quinto","Noche","2A"),
        new Alumno("Ayelen","Piccolo","Itá","254555","Femenino","Quinto","Noche","2A"),
        new Alumno("Monica","Ñamandu","Caaguazu'i","5545555","Femenino","Quinto","Noche","2A")
    );
    echo "</br></br>";
    //echo $Alumnos[0]->getDatos();
    foreach ($Alumnos as $key) {
        echo "</br></br>";
        echo $key->getDatos();
    }

?>