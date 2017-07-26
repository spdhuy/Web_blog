<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/26/17
 * Time: 11:28 AM
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require '../../controllers/CategoryController.php';
    $categoryController = new CategoryController();
    $categoryController->editCategory($_POST['idCagetory'],$_POST['name']);
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="text" readonly="true" name="idCagetory">
    <input type="text" name="name">
    <input type="Submit" value="Sửa" >
</form>