<?php
require_once('Animal.php');

class Perro extends Animal
{

    /** @var String */
    private static $patas = 4;

    /** @var String */
    private $color;

    /** @var String */
    private $nombre;


    /**
     * Default constructor
     */
    public function __construct($color, $nombre, $id)
    {
        parent:: __construct($id);
        $this->color = $color;
        $this->nombre = $nombre;
    }


   


    /**
     * 
     */
    public function Ladrar()
    {
        return "GUAU!";
    }

    /**
     * @return String
     */
    public function getPatas()
    {
        return $this->patas;
    }

    /**
     * @return String
     */
    public function getColor()
    {
        // TODO implement here
        return  $this->color ;
    }

    /**
     * @param String $value
     */
    public function setColor($value)
    {
        $this->color  = $value;
    }

    /**
     * @return String
     */
    public function getNombre()
    {
       return $this->nombre;
    }

    /**
     * @param String $value
     */
    public function setNombre($value)
    {
        $this->nombre = $value;
    }

}
