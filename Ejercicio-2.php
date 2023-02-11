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
        $this->$nombre =$nombre;
        $this->$edad =$edad;
    }
    public function imprimirDatosPersonales(){
       echo "Mi nombre es". $this->nombre . "\n";
        echo "Mi edad es". $this->edad . "\n";
    }  
}
 class Empleado extends Persona{
    public $sueldo;
    
    public function cargarSueldo($sueldo){
        $this->$sueldo =$sueldo;
        
    }

    public function imprimirSueldo(){ 
        echo "Mi sueldo es de". $this->sueldo . "dolares". "\n";
    }

    }

//$objeto = new Persona
//$objeto-> $getDatosPersonales("Jorge","24");
//$objeto->imprimirDatosPersonales();

/**El error que produce el objeto de la clase persona dice que hay un error de syntaxis ya 
 * que no se puede hacer una instancia de una clase abstracta */
$empleado = new Empleado();
$empleado->getDatosPersonales("Leo",35);
$empleado->cargarSueldo(900);
$empleado->imprimirDatosPersonales();
$empleado->imprimirSueldo();


?>