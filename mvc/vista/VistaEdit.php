<?php
require_once('Vista.php');

class VistaEdit extends Vista{


    private function contruye(){
        $perro = $this->modelo;
        $this->ret .= "<h1>PAGINA EDITAR</h1>";
        $this->ret .= "<form action='/mvc/controlador/Controlador.php' method='post'><input type='hidden' id='id' name='id' value='".$perro-> getId()."'><input type='hidden' id='action' name='action' value='".ActionEnum::GUARDAR."'>";
        
        $this->ret .= "<label for='nombre'>Nombre:</label><input type='text' id='nombre' name='nombre' value='".$perro->getNombre()."'/>";
        $this->ret .= "<label for='color'>Color:</label><input type='text' id='color' name='color' value='".$perro->getColor()."'/>";
        $this->ret .="<br><input type=submit value='Editar'>";
        
        $this->ret .= "</form>";


    }
   
    public function mostrarPagina(){
        $this->contruye();
        echo $this->ret;
        
    }
}

?>