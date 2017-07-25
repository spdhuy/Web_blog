<?php
require './models/CategoryDB.php';

class CategoryController
{
    public function getAll()
    {
        $categoryDb = new CategoryDB();
        $categories = $categoryDb->getAll();
        include 'views/categories/list.php';
    }
    public function addCategory(){

        $categoryDb = new CategoryDB();
        $categoryDb->addCategory($_POST['idCagetory'],$_POST['name']);
        $this->getAll();
    }
}