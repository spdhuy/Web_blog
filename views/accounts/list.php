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
            <th>username</th>
            <th>password</th>
            <th>fullname</th>
            <th>phone</th>
            <th>address</th>
            <th>email</th>
            <th>age</th>
            <th>gender</th>
            <th>description</th>
            <th>avatar</th>
            <th class="right">action</th>
        </tr>
        <?php foreach ($accounts as $account) { ?>
            <tr>
                <td><?php echo $account->getUsername() ?></td>
                <td><?php echo $account->getPassword() ?></td>
                <td><?php echo $account->getFullname() ?></td>
                <td><?php echo $account->getPhone() ?></td>
                <td><?php echo $account->getAddress() ?></td>
                <td><?php echo $account->getEmail() ?></td>
                <td><?php echo $account->getAge() ?></td>
                <td><?php echo $account->getGender() ?></td>
                <td><?php echo $account->getDescription() ?></td>
                <td><?php echo $account->getAvatar() ?></td>
                <td><form action="" method="get">
                        <input type="hidden" name="page" value="<?php echo 'delete_account' ?>">
                        <input type="hidden" name="id" value="<?php echo $account->getUsername() ?>">
                        <input type="Submit" value="Xoa" >
                    </form>
                </td>
                <td><form action="" method="get">
                        <input type="hidden" name="page" value="<?php echo 'edit_account' ?>">
                        <input type="hidden" name="idCategory" value="<?php echo $account->getUsername() ?>">
                        <input type="hidden" name="name" value="<?php echo $account->getPassword() ?>">
                        <input type="hidden" name="fullname" value="<?php echo $account->getFullname() ?>">
                        <input type="hidden" name="phone" value="<?php echo $account->getPhone() ?>">
                        <input type="hidden" name="address" value="<?php echo $account->getAddress() ?>">
                        <input type="hidden" name="age" value="<?php echo $account->getAge() ?>">
                        <input type="hidden" name="gender" value="<?php echo $account->getGender() ?>">
                        <input type="hidden" name="description" value="<?php echo $account->getDescription() ?>">
                        <input type="hidden" name="avatar" value="<?php echo $account->getAvatar() ?>">
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