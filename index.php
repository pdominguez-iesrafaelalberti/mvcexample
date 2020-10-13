<?php
require_once('mvc/modelo/Modelo.php');
require_once('mvc/vista/VistaHome.php');
require_once('mvc/controlador/ControladorInformacion.php');
require_once('mvc/controlador/ActionEnum.php');

$model = Modelo::Instance();
$view = new VistaHome($model);


$controller = new ControladorInformacion($model, $view, ActionEnum::HOME);
$controller->ejecuta();

?>

