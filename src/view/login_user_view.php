<?php include './src/view/head.php' ?>
<?php include './src/view/header.php' ?>

<div class="container">
    <form class="mt-4" action="<?= $action ?>" method="POST">
        <div class="form-group">

            <div class="form-group">
                <label for="email">Username</label>
                <input class="form-control <?= $emailClass ?>" value="<?= $email ?>" name="email" type="text">
                <div class="<?= $emailClassMessage ?>">
                    <?= $emailMessage ?>
                </div>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control <?= $passwordClass ?>" value="<?= $password ?>" name="password" type="password">
                <div class="<?= $passwordClassMessage ?>">
                    <?= $passwordMessage ?>
                </div>
            </div>
            <div class="form-group">
                <div class="<?= $ClassMessage ?>">

                    <?= $Message ?>
                </div>
            </div>
        </div>
        <div class="p-3 my-3  text-center">
            <button class="btn btn-primary mt-3" type="submit">Login</button>
        </div>
    </form>
</div>