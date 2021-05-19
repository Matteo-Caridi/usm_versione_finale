<?php include './src/view/head.php' ?>
<?php include './src/view/header.php' ?>

<div class="container">
   <!-- <form action="add_user_form.php" method="POST"> -->
   <form class="mt-4" action="<?= $action ?>" method="POST">
      <div class="form-group">
         <label for="">Nome</label>
         <!-- is-invalid  -->
         <input value="<?= $firstName ?>" class="form-control <?= $firstNameClass ?>" name="firstName" type="text">

         <div class="<?= $firstNameClassMessage ?>">
            <?= $firstNameMessage ?>
         </div>
      </div>

      <div class="form-group">
         <label for="">Cognome</label>
         <!-- is-invalid  -->
         <input value="<?= $lastName ?>" class="form-control <?= $lastNameClass ?>" name="lastName" type="text">
         <div class="<?= $lastNameClassMessage ?>">
            <?= $lastNameMessage ?>
         </div>
      </div>


      <div class="form-group">
         <label for="">Email</label>
         <!-- is-invalid  -->
         <input value="<?= $email ?>" class="form-control <?= $emailClass ?>" name="email" type="text">
         <div class="<?= $emailClassMessage ?>">
            <?= $emailMessage ?>
         </div>
      </div>


      <div class="form-group">
         <label for="">Data di nascita</label>
         <input class="form-control <?= $birthdayClass ?>" value="<?= $birthday ?>" name="birthday" type="date">
         <div class="<?= $birthdayClassMessage ?>">
            <?= $birthdayMessage ?>
         </div>
      </div>

      <div class="form-group">
         <label for=""><?= $passTitle ?></label>
         <input class="form-control <?= $passwordClass ?>" value="" name="password" type="password">
         <div class="<?= $passwordClassMessage ?>">
            <?= $passwordMessage ?>
         </div>
      </div>
      <!-- quando gli utenti vengono creati non hanno ancora un id, quindi non ha bisogno del campo nascosto -->
      <?php if (isset($userId)) { ?>
         <!-- invece quando sono in modifica di un utente -->

         <div class="form-group">
            <input type="hidden" name="userId" value="<?= $userId ?>" class="form-control" readonly>
         </div>

      <?php } ?>
      <div class="p-3 my-3  text-center">
         <button class="btn btn-primary mt-3" type="submit"><?= $submit ?></button>
         <button class="btn btn-primary mt-3"><a href="./list_users.php" style="color:white; text-decoration:none">Torna alla lista</a></button>
      </div>
   </form>
</div>

</body>

</html>