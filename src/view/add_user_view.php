<?php

use sarassoroberto\usm\model\InteresseModel;



include './src/view/head.php' ?>
<?php include './src/view/header.php' ?>

<div class="container">

   <?php if (isset($msg)) : ?>

      <div class="alert alert-danger m-4"><?= $msg ?></div>

   <?php endif ?>

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
         <label for="">email</label>
         <!-- is-invalid  -->
         <input value="<?= $email ?>" class="form-control <?= $emailClass ?>" name="email" type="text">
         <div class="<?= $emailClassMessage ?>">
            <?= $emailMessage ?>
         </div>
      </div>


      <div class="form-group">
         <label for="">data di nascita</label>
         <input class="form-control <?= $birthdayClass ?>" value="<?= $birthday ?>" name="birthday" type="date">
         <div class="<?= $birthdayClassMessage ?>">
            <?= $birthdayMessage ?>
         </div>
      </div>


      <div class="form-group">
         <p>Interesse</p>
         <br>
         <div class="d-flex justify-content-center ">
            <?php
            $int = new InteresseModel();
            $interesse = $int->readAll();
            foreach ($interesse as $int) { ?>

               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="interesse" value="<?= $int->getInteresseId() ?>" id="<?= $int->getInteresseId() ?>" <?= $int->getInteresseId() === $inter['InteresseId'] ? 'checked' : '' ?> required>
                  <label class="form-check-label" for="<?= $int->getInteresseId() ?>">
                     <!-- <?= $int->getInteresseId() ?> -->
                     <?= $int->getNome() ?>
                  </label>
               </div>

            <?php } ?>
         </div>
      </div>





      <div class="form-group" <?= $type ?>>
         <label for="">password</label>
         <input class="form-control <?= $passwordClass ?>" value="<?= $password ?>" name="password" type="password">
         <div class="<?= $passwordClassMessage ?>">
            <?= $passwordMessage ?>
         </div>
      </div>



      <?php if (isset($userId)) { ?>
         <!-- quando gli utenti vengono creati non hanno ancora un id, quindi non ha bisogno del campo nascosto -->
         <!-- invece quando sono in modifica di un utente -->
         <!-- <div class="form-group mt-4 p-4 border border-danger">-->
         <!-- <label class="text-danger">
                  Questo campo ?? visibile motivi didattici in realt?? dovrebbe essere un <b>input[type=hidden]</b> <br> 
                  serve a inviare via POST, il valore dello <b>userId</b> dell'istanza di User da aggiornare sul database<br>
               </label> -->
         <!-- <label class="d-block text-bold">id dell'utente che sto modificando</label> -->
         <input type="hidden" name="userId" value="<?= $userId ?>" class="form-control">
         <!-- </div>-->

      <?php } ?>

      <div class="p-3 my-3  text-center">
         <button class="btn btn-primary mt-3" type="submit"><?= $submit ?></button>
         <button class="btn btn-primary mt-3"><a href="./list_users.php" style="color:white; text-decoration:none">Torna alla lista</a></button>
      </div>