<?php
    class Cliente{
        var $nombre;
        var $edad;
        var $ciudad;

        public function __construct(){

        }
    }

    #objeto a json
    $cliente1 = new Cliente();

    $cliente1->name = "Pepe";
    $cliente1->edad = "20";
    $cleinte1->ciudad = "J.Augusto Saldivar";

    #convertir el objeto a json
    $clienteJson = json_encode($cliente1);

    echo $clienteJson;