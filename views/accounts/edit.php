
<form action="?page=edit_account" method="post">
    Username:
    <input type="text"  name="username" value="<?= $_GET['username']?>" readonly="true">
    <br>
    Password:
    <input type="text" name="password" value="<?= $_GET['password']?>">
    <br>
    Fullname:
    <input type="text" name="fullname" value="<?= $_GET['fullname']?>">
    <br>
    Phone:
    <input type="text" name="phone" value="<?= $_GET['phone']?>">
    <br>
    Address:
    <input type="text" name="address" value="<?= $_GET['address']?>">
    <br>
    Age:
    <input type="text" name="age" value="<?= $_GET['age']?>">
    <br>
    Gender:
    <input type="text" name="gender" value="<?= $_GET['gender']?>">
    <br>
    Description:
    <input type="text" name="description" value="<?= $_GET['description']?>">
    <br>
    Avatar:
    <input type="text" name="avatar" value="<?= $_GET['avatar']?>">
    <br>
    <input type="Submit" value="Sửa" value="<?= $_GET['name']?>">
</form>