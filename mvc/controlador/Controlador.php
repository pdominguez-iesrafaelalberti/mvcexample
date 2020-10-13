<?php

require_once('ActionEnum.php');

Controlador::handleRequest();

abstract class Controlador
{
       /**
     *
     * @var BasePerro
     */
    protected $modelo;
    protected $vista;
    protected $accion;


    public function __construct(Modelo $modelo, Vista $vista, $accion)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
        $this->accion = $accion;
    }
    
    static function handleRequest()   
    {  
        $action = isset($_POST['action']) ? $_POST['action'] : NULL;  
        switch ($action)   
        {   
            case ActionEnum::INFO:
                require_once('../vista/VistaInfo.php');
                require_once('ControladorInformacion.php');
                require_once('../modelo/Modelo.php');
                require_once('../modelo/BasePerro.php');
              
                //Capturo el ID
                $id = isset($_POST['id']) ? $_POST['id'] : NULL;
                
                //Obtengo desde el modelo
                $perro = Modelo::Instance()->getBasePerro()->obtenerPerroById($id);
                $vista = new VistaInfo($perro);
                
                $controller = new ControladorInformacion(Modelo::Instance(), $vista, ActionEnum::INFO);
                $controller->ejecuta();


                break;
            
            case ActionEnum::EDIT:
                require_once('../vista/VistaEdit.php');
                require_once('ControladorInformacion.php');
                require_once('../modelo/Modelo.php');
                require_once('../modelo/BasePerro.php');
              
                //Capturo el ID
                $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        
                //Obtengo desde el modelo
                $perro = Modelo::Instance()->getBasePerro()->obtenerPerroById($id);
                $vista = new VistaEdit($perro);
                
                $controller = new ControladorInformacion(Modelo::Instance(), $vista, ActionEnum::INFO);
                $controller->ejecuta();

                break;
          case ActionEnum::GUARDAR:
             //Capturo el ID
             $id = isset($_POST['id']) ? $_POST['id'] : NULL;
             $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
             $color = isset($_POST['color']) ? $_POST['color'] : NULL;

            echo "Se ha guardado el id ". $id;
          

            break;
        
        }

    }

    public abstract function ejecuta();

}
?>