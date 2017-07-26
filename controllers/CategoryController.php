<?php


class CategoryController
{
    public function getAll()
    {
        require_once './models/CategoryDB.php';
        $categoryDb = new CategoryDB();
        $categories = $categoryDb->getAll();
        include './views/categories/list.php';
    }
    public function addCategory($id,$name){
        require_once '../../models/CategoryDB.php';
        $categoryDb = new CategoryDB();
        $categoryDb->addCategory($id,$name);
        header('Location: http://localhost:8080/Web_blog/');
    }
}