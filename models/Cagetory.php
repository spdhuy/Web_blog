<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/24/17
 * Time: 3:20 PM
 */
class Category{
 private $idCagetory;
 private $name;
 public function  __constuct($idCagetory,$name){
     $this->_idCagetory = $idCagetory;
     $this->_name = $name;
 }

    /**
     * @return mixed
     */
    public function getIdCagetory()
    {
        return $this->idCagetory;
    }

    /**
     * @param mixed $idCagetory
     */
    public function setIdCagetory($idCagetory)
    {
        $this->idCagetory = $idCagetory;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}