<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/26/17
 * Time: 8:33 AM
 */
require '../../controllers/CategoryController.php';
$categoryController = new CategoryController();
$categoryController->addCategory($_POST['idCagetory'],$_POST['name']);