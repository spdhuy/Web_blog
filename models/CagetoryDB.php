<?php
require_once 'Category.php';
/**
 * Created by PhpStorm.
 * User: nhatnk
 * Date: 7/24/17
 * Time: 10:59 AM
 */
class CategoryDB
{
    public function getAll(){
        $servername = 'localhost';
        $username = 'sa';
        $password = '12345';
        try {
            $conn = new PDO("mysql:host=$servername;dbname=PHPProject", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
        $query = "SELECT * FROM category ORDER BY id";
        $rows = $conn->query($query);
        $categories = [];
        foreach ($rows as $row) {
            $id = $row['id_cagetory'];
            $name = $row['name'];
            $category = new Category($id, $name);
            $categories.push($category);
        }
        return $categories;
    }
}