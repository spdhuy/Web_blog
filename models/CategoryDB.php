<?php
require 'Category.php';
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/25/17
 * Time: 4:33 PM
 */
class CategoryDB{
    /**
     * @return array
     */
    public function getAll(){
        $servername = 'localhost';
        $username = 'sa';
        $password = '12345';
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$servername;dbname=PHPProject", $username, $password);
        }
        catch(PDOException $e)
        {
            $error_message = $e->getMessage();
            include('database_error.php');
            exit();
        }
        $query = "SELECT * FROM cagetory";
        $rows = $conn->query($query);
        $categories = [];
        foreach ($rows as $row) {
            $id = $row['id_category'];
            $name = $row['name'];
            $category = new Category($id, $name);
            $categories[] = $category;
        }
        return $categories;
    }
    public function addCategory($id,$name){
        $servername = 'localhost';
        $username = 'sa';
        $password = '12345';
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$servername;dbname=PHPProject", $username, $password);
        }
        catch(PDOException $e)
        {
            $error_message = $e->getMessage();
            include('database_error.php');
            exit();
        }
        $query = "INSERT INTO cagetory(id_category, name) VALUES ($id,$name)";
        $conn->query($query);
    }
}
?>