<?php
require '../models/CategoryDB.php';

class ProductController
{
    public function getAll()
    {
        $categoryDb = new CategoryDB();
        $categories = $categoryDb->getAll();
        include '../views/categories/list.php';
    }
}