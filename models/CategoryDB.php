<?php
require 'Category.php';
require 'DB.php';
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/25/17
 * Time: 4:33 PM
 */
class CategoryDB extends DB {
    /**
     * @return array
     */
    public function getAll(){
        $conn = $this->connect();
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
        $conn = $this->connect();
        $query = "INSERT INTO cagetory(id_category, name) VALUES ('$id','$name')";
        $conn->query($query);
    }
    public function editCategory($id,$name){
        $conn = $this->connect();
        $query = "update cagetory set name = '$name' WHERE id_category = '$id'";
        $conn->query($query);
    }
    public function deleteCategory($id){
        $conn = $this->connect();
        $query = "DELETE FROM cagetory WHERE id_category = '$id'";
        $conn->query($query);
    }
}
?>