<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/24/17
 * Time: 3:20 PM
 */
class Category{
 private $id_category;
 private $name;

    /**
     * Category constructor.
     * @param $id_category
     * @param $name
     */
    public function __construct($id_category, $name)
    {
        $this->id_category = $id_category;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param mixed $id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
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