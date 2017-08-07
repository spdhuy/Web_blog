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
                <td><form action="" method="get">
                        <input type="hidden" name="page" value="<?php echo 'delete_category' ?>">
                        <input type="hidden" name="id" value="<?php echo $category->getIdCategory() ?>">
                        <input type="Submit" value="Xoa" >
                    </form>
                </td>
                <td><form action="" method="get">
                        <input type="hidden" name="page" value="<?php echo 'edit_category' ?>">
                        <input type="hidden" name="idCategory" value="<?php echo $category->getIdCategory() ?>">
                        <input type="hidden" name="name" value="<?php echo $category->getName() ?>">
                        <input type="Submit" value="Sua" >
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <form action="" method="get">
        <input type="hidden" name="page" value="<?php echo 'add_category' ?>">
        <input type="Submit" value="Thêm" >
    </form>
</div>
</body>
</html>