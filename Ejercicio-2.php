<?php
/**Crear una clase abstracta Persona que tenga como atributos el nombre y la edad.
 *
Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.
Plantear una segunda clase Empleado que herede de la clase Persona.
Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo.
Definir un objeto de la clase Persona y ver que error produce. También crear un objeto de la clase Empleado
 y llamar a sus métodos
 */
 abstract class Persona {
    public $nombre;
    public $edad;
    public function getDatosPersonales($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    public function imprimirDatosPersonales(){
       echo "Nombre : ".$this->nombre. "\n";
        echo "Edad: ".$this->edad. "\n";
    }
}
 class Empleado extends Persona{
    public $sueldo;
    public function cargarSueldo($sueldo){
        $this->sueldo =$sueldo;
    }
    public function imprimirSueldo(){
        echo "Sueldo : ".$this->sueldo. "dolares". "\n";
    }
    }

    /**El error que produce el objeto de la clase persona dice que hay un error de syntaxis ya
    que no se puede hacer una instancia de una clase abstracta */

    //Nota extra: solo se puede hacer herencia de la clase abstracta

//$objeto = new Persona();
//echo $objeto-> getDatosPersonales("Jorge",24);
//echo $objeto->imprimirDatosPersonales();

 $objeto = new Empleado();
 echo "Informacion del empleado". "<br>";
 echo $objeto->getDatosPersonales("Mario", 34);
 echo $objeto->cargarSueldo(900);
 echo $objeto->imprimirDatosPersonales();
 echo $objeto->imprimirSueldo();
?>