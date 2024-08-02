<?php
    //PascalCase - ClaseFunciones
    class Automovil{
        //publico o privado
        #atributos
        private $color;
        private $motor;
        private $marca;
        private $modelo;

        //ambito/scope global o local
        //constructor
        public function __construct($c, $m, $mar, $mod){
            $this->color = $c;
            $this->motor = $m;
            $this->marca = $mar;
            $this->modelo = $mod;
        }
        
        #funciones 
        public function getDatos(){
            return $this->color. $this->motor. $this->marca. $this->modelo;
        }

        public function setColor($col){
            return $this->color = $col;
        }

        public function setMarca($marca){
            return $this->marca = $marca;
        }

        public function getColor(){
            return $this->color;
        }
    }

    //crear 3 objetos del tipo automovil
    $auto1 = new Automovil("Verde","1.8","Toyota","Hilux");

    $auto2 = new Automovil("Azul","1.2","BMW","M3");

    $auto3 = new Automovil("Gris","1,6","Audi","R8");
?>

    <h2>Imprimir los Colores Disponibles</h2>

<?php
    echo "Auto 1: ".$auto1->getColor();
    echo "<br>Auto 2: ".$auto2->getColor();
    echo "<br>Auto 3: ".$auto3->getColor();

    
?>
