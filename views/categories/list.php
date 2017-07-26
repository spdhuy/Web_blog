<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cagetories</title>
</head>
<body>
<h1>List category</h1>
<div class="content">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th class="right">Description</th>
        </tr>
        <?php foreach ($categories as $category) { ?>
            <tr>
                <td><?php echo $category->getIdCategory() ?></td>
                <td><?php echo $category->getName() ?></td>
            </tr>
        <?php } ?>
    </table>
    <form action="./views/categories/add.php" method="post">
        <input type="text" name="idCagetory">
        <input type="text" name="name">
        <input type="Submit" value="Thêm" >
    </form>
</div>
</body>
</html>