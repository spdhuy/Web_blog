
<form action="?page=edit_category" method="post">
    Id:
    <input type="text" readonly="true" name="id" value="<?= $_GET['idCategory']?>">
    <br>
    Name:
    <input type="text" name="name" value="<?= $_GET['name']?>">
    <br>
    <input type="Submit" value="Sửa" >
</form>