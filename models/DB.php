<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/26/17
 * Time: 11:24 AM
 */
class DB{
    public function connect(){
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
        return $conn;
    }
}