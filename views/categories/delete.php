<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/26/17
 * Time: 11:27 AM
 */
require '../../controllers/CategoryController.php';
$categoryController = new CategoryController();
$categoryController->deleteCategory($_POST['idCagetory']);