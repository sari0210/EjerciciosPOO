<?php
/**Ejercicio 4: 
Crear una clase Cabecera Pagina, que contenga 3 métodos, el primer método que obtenga
 el título, color y fuente de la página, 
 el segundo método que indique como desea que aparezca el título si centrado, derecha o izquierda y
 el tercer método que imprima todas las propiedades.
 */
class CabeceraPagina {
    private $titulo;
    private $color;
    private $fuente;
    private $alineacionTitulo;
    public function propiedadesCabecera($titulo, $color, $fuente) {
      $this->titulo = $titulo;
      $this->color = $color;
      $this->fuente = $fuente;
    }
    public function alineacionTitulo($alineacionTitulo) {
      $this->alineacionTitulo = $alineacionTitulo;
    }
    public function imprimirPropiedades() {
      echo "Título: " . $this->titulo . "<br>";
      echo "Color: " . $this->color . "<br>";
      echo "Fuente: " . $this->fuente . "<br>";
      echo "Alineación del título: " . $this->alineacionTitulo . "<br>";
    }
  }
  $cabecera = new CabeceraPagina();
  echo "<h1>Ejercicio 4</h1>". "<br>";
  $cabecera->propiedadesCabecera("Ejercicios", "negro", "Roboto");
  $cabecera->alineacionTitulo("justificado");
  $cabecera->imprimirPropiedades();
?>