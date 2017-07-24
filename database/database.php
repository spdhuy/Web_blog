<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/24/17
 * Time: 3:17 PM
 */
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

?>