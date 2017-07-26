<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/24/17
 * Time: 3:20 PM
 */
class Category{
 private $idCategory;
 private $name;
 public function __construct($idCategory,$name){
     $this->idCategory = $idCategory;
     $this->name = $name;
 }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @param mixed $idCagetory
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
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