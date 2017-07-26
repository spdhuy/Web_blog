<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require '../../controllers/CategoryController.php';
    $categoryController = new CategoryController();
    $categoryController->addCategory($_POST['idCagetory'],$_POST['name']);
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="text" name="idCagetory">
    <input type="text" name="name">
    <input type="Submit" value="Thêm" >
</form>