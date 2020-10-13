<?php
require_once('Vista.php');

class VistaHome extends Vista{

    private function contruye(){
        $basePerro = $this->modelo->getBasePerro();
        $array_perros = $basePerro->obtenerTodos();
       
        $this->ret .="";
        $this->ret .="<table>";
        $this->ret .= "<tr><th>Nombre</th><th>Color</th><th></th></tr>";
        foreach ($array_perros as $perro) {
            $this->ret .= "<tr>";
            $this->ret .= "<td>".$perro-> getNombre()."</td><td>".$perro-> getColor()."</td>";
            $this->ret .= "<td><form action='/mvc/controlador/Controlador.php' method='post'><input type=submit value='Ver'><input type='hidden' id='id' name='id' value='".$perro-> getId()."'><input type='hidden' id='action' name='action' value='".ActionEnum::INFO."'></form></td>";
            $this->ret .= "<td><form action='/mvc/controlador/Controlador.php' method='post'><input type=submit value='Editar'><input type='hidden' id='id' name='id' value='".$perro-> getId()."'><input type='hidden' id='action' name='action' value='".ActionEnum::EDIT."'></form></td>";
            $this->ret .= "</tr>";
        }
        $this->ret .="<table>";
        $this->ret .="";
    }
   
    public function mostrarPagina(){
        $this->contruye();
        echo $this->ret;
        
    }
}

?>