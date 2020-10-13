<?php
require_once('Perro.php');
require_once('AbstractBaseDatos.php');

class BasePerro extends AbstractBaseDatos
{

    private $nombreTabla = "Perro";

    /**
     * Default constructor
     */
    public function __construct()
    {

    }

 

    /**
     * @param Perro $perro
     * @return Perro
     */
    public function obtenerPerro($perro)
    {
        
        return mock_perro();
    }

    /**
     * @param Perro $perro
     * @return Perro
     */
    public function obtenerPerroById($id)
    {
        $ret = null;
        $array = $this->mock_listado_perro();
        foreach($array as $perro){
            
            if($perro->getId() == $id){
                return $perro;
            }
        }
        return $ret;
    }

    public function modificarPerro($perro){
        $ret = null;
        $array = $this->mock_listado_perro();
        foreach($array as $perro_aux){
            
            if($perro_aux->getId() == $perro->getId()){
                return $perro;
            }
        }
        return $ret;
    }

    /**
     * @param Perro $perro
     * @return boolean
     */
    public function eliminar($perro)
    {
        // TODO implement here
        return false;
    }
    /**
     * @return Array
     */
    public function obtenerTodos()
    {
        $todos=[];

        return  $this->mock_listado_perro();
    }

    /**
     * 
     */
    /**
     * Implementa la función abstract de AbsractBaseDatos
     */
    protected function get($id='') {
        /*   $ret = $this->get_results_from_query("SELECT * FROM `clientes`");
           return $ret;*/
           $ret = NULL;
         
           if($id!= ''){
             $this->query ="SELECT *  FROM `$this->$nombreTabla` WHERE `id` = '$id'";
             $ret = $this->get_results_from_query("SELECT *  FROM `$this->$nombreTabla` WHERE `id` = '$id'");
           }else{
             $ret = $this->get_results_from_query("SELECT * FROM `$this->$nombreTabla`");
           }
          return $ret;
       }

    /**
     * 
     */
    protected function set(){

    }

    /**
     * 
     */
    protected function edit(){

    }

    /**
     * 
     */
    protected function delete(){

    }

    private function mock_listado_perro(){
        $lst = array();
        $a = new Perro("blanco", "Ehko","1");
        $b = new Perro("negro", "Kronos","2");
        $c = new Perro("marrón", "Oli","3");

        array_push ( $lst , $a );
        array_push ( $lst , $b );
        array_push ( $lst , $c );
   
        return $lst;
    }

    private function mock_perro(){
        return  mock_listado_perro()[0];
    }

}
