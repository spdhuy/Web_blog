<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cagetories</title>
</head>
<body>
<h1>List products</h1>
<div class="content">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th class="right">Description</th>
        </tr>
        <?php foreach ($categories as $category) { ?>
            <tr>
                <td><?php echo $category->idCagetory ?></td>
                <td><?php echo $category->name ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>