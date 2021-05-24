<?php include './src/view/head.php' ?>
<?php include './src/view/header.php' ?>


<div class="container">

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data di nascita</th>
            <th width="1%">Action</th>
        </tr>
        <?php foreach ($model->readAll() as $user) { ?>
            <tr>
                <td width="1%"><?= $user->getUserId() ?></td>
                <td><?= $user->getFirstName() ?></td>
                <td><?= $user->getLastName() ?></td>
                <td><?= $user->getBirthday() ?></td>
                <td class="text-nowrap">
                    <a href="edit_user.php?user_id=<?= $user->getUserId() ?>" class="btn btn-secondary">Edit </a>
                    <a href="delete_user.php?user_id=<?= $user->getUserId() ?>" class="btn btn-danger">Delete </a>
                </td>
            </tr>
        <?php } ?>

    </table>
    <div class="p-3 my-3  text-center">
        <a class="btn btn-primary" href="./add_user_form.php">Add new user</a>
        <a class="btn btn-primary" href="./logout.php">Logout</a>
    </div>

</div>