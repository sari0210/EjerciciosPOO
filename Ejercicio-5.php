<?php
/**Ejercicio 5: 
Crear una clase Persona que tenga como atributos protegidos, el nombre y la edad. Definir como responsabilidades un método que cargue los datos personales y otro que los imprima. 
Plantear una segunda clase Empleado que herede de la clase Persona. 
Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo. Definir un objeto de la clase Empleado y tratar de modificar el atributo edad.
 */
  class Persona {
  protected $nombre;
  protected $edad;
  public function getDatosPersonales($nombre,$edad)
  {
    $this->nombre=$nombre;
    $this->edad=$edad;
  }
  public function imprimirDatosPersonales()
  {
    echo "Nombre:".$this->nombre."\n";
    echo "Edad:".$this->edad."\n";
  }
}
class Empleado extends Persona{
  protected $sueldo;
  public function cargarSueldo($sueldo)
  {
    $this->sueldo=$sueldo;
  }
  public function imprimirSueldo()
  {
    echo "Sueldo:".$this->sueldo."\n";
  }
}
$empleado=New Empleado();
echo "<h1>Ejercicio 5</h1>". "<br>";
$empleado->getDatosPersonales("Orlando",18);
$empleado->cargarSueldo(300);
echo "Datos personales y sueldo del empleado:\n";
$empleado->imprimirDatosPersonales();
$empleado->imprimirSueldo();
?>