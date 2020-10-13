<?php
require_once('Vista.php');

class VistaInfo extends Vista{


    private function contruye(){
        $perro = $this->modelo;
        echo "<h1>PAGINA INFO</h1>";
       echo "<h2>Nombre:". $perro->getNombre()."</h2>";
       echo "<h3>Color:". $perro->getColor()."</h3>";
       echo "<h4>ID:". $perro->getId()."</h4>";
    }
   
    public function mostrarPagina(){
        $this->contruye();
        echo $this->ret;
        
    }
}

?>