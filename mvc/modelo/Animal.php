<?php
class Animal
{

    /** @var String */
    private $id;

    /**
     * Default constructor
     */
    public function __construct($id)
    {
        $this->id =$id;
    }

    /**
     * @return String
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $value
     */
    public function setId($value)    {
        $this->$id = $value;
    }

}
