<?php 
class Carro
{
// Propiedades o atributos
public $marca = "Ford";
public $año = 2015; 

// Método
public function encender ()
      {
      echo "Carro encendido"; 
      }
}

$fiesta = new carro ();
$fiesta->encender();