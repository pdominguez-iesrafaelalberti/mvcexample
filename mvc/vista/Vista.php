<?php

abstract class Vista
{
     /**
     *
     * @var Modelo
     */
    protected $modelo;
    protected $ret;

    /**
     * Default constructor
     */
    public function __construct($modelo)
    {
       $this->modelo = $modelo;
       $this->ret = "";
    }

    /**
     * 
     */
    abstract function mostrarPagina();

}
