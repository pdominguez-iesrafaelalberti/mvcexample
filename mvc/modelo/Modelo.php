<?php
require_once('BasePerro.php');
class Modelo {

    private static $instance = null;
    /**
     * @var BasePerro
     */
    protected $baseperro;

    private function __construct(){
        $this->baseperro = new BasePerro();
    }
    public static function Instance(){
        if (!isset(Modelo::$instance)){
            Modelo::$instance = new Modelo();
        }
        return Modelo::$instance;
    }

    public function getBasePerro(){
        return $this->baseperro;
    }

}


?>