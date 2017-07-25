<?php
require_once './controllers/CagetoryController.php.php';
$productController = new CategoryController();
$productController->getAll();