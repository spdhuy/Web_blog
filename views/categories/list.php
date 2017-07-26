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
            <th class="right">action</th>
        </tr>
        <?php foreach ($categories as $category) { ?>
            <tr>
                <td><?php echo $category->getIdCategory() ?></td>
                <td><?php echo $category->getName() ?></td>
                <td><form action="./views/categories/delete.php" method="post">
                        <input type="hidden" name="idCagetory" value="<?php echo $category->getIdCategory() ?>">
                        <input type="Submit" value="Xoa" >
                    </form>
                </td>
                <td><form action="./views/categories/edit.php" method="post">
                        <input type="hidden" name="idCagetory" value="<?php echo $category->getIdCategory() ?>">
                        <input type="hidden" name="name" value="<?php echo $category->getName() ?>">
                        <input type="Submit" value="Sua" >
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="./views/categories/addPage.php">Them moi</a>
</div>
</body>
</html>