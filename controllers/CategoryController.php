<?php


class CategoryController
{
    public function getAll()
    {
        require_once './models/CategoryDB.php';
        $categoryDb = new CategoryDB();
        $categories = $categoryDb->getAll();
        require './views/categories/list.php';
    }
    public function addCategory(){
        require_once './models/CategoryDB.php';
        if(isset($_POST['id'])&&isset($_POST['name'])){
            $id=$_POST['id'];
            $name = $_POST['name'];
            $categoryDb = new CategoryDB();
            $categoryDb->addCategory($id,$name);
            header('Location: http://localhost:8080/Web_blog/');
        }else
        require ('./views/categories/addPage.php');
    }
    public function editCategory(){
        require_once './models/CategoryDB.php';
        if(isset($_POST['id'])&&isset($_POST['name'])){
            $id=$_POST['id'];
            $name = $_POST['name'];
            $categoryDb = new CategoryDB();
            $categoryDb->editCategory($id,$name);
            header('Location: http://localhost:8080/Web_blog/');
        }else
        require ('./views/categories/edit.php');
    }
    public function deleteCategory(){
        require_once './models/CategoryDB.php';
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $categoryDb = new CategoryDB();
            $categoryDb->deleteCategory($id);

            header('Location: http://localhost:8080/Web_blog/');
        }
    }
}