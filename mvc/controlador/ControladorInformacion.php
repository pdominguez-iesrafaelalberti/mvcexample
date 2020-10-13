<?php
require_once('Controlador.php');
class ControladorInformacion extends Controlador{
    public function __construct(Modelo $modelo, Vista $vista, $accion)
    {
       parent::__construct($modelo, $vista, $accion);
    }
    public function ejecuta(){
        $this->vista->mostrarPagina();
    }


}

?>