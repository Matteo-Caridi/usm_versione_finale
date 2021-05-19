https://www.edureka.co/blog/decrypt-md5-password-PHP/

- Aggiungere la password
  - [ ] aggiungere attributo password nel database
  - [ ] aggiungere campo password nel form
  - [ ] aggiungere proprietà password alla classe User

  - Impostare la mail come  chiave unica nella tabella degli utenti. 
  - how to set unique key in mysql 

<!-- - Quando crei un nuovo utente si cripta la password -->

- [ ] Implementare la schermata di logIn
    - [ ]  **login_user.php** controller
    - [ ]  form inserisco email/username / password
    - [ ]  implementare **UserModel::autenticate($username,$password):?User**
    - [ ]  se l'utente esiste accedo all'elenco degli utenti

<<<<<<< HEAD
    - [x] **UserModel::readOne($user_id)** (dati di un solo utente) 
  
  > FIX: argomenti di User nel costruttore (vedi sopra)
  
    - [ ] **User::update(User $user)** update (modifica)

 # Pagina con elenco utenti TASK-3
  PAGINE (controller)
  - a.[x] Elenco degli utenti **list_user.php**
  
  
  
  
  --------------------------------------------------
  
  qualcuno a premuto aggiungi
     - [ ] creo un istanza User
     - [ ] Effettuo la validazione è sanificazione dei valori dell'istanza di User
     - [ ] se tutto è ok salvo l'utente --> si va a una pagina di conferma
                 [ ] Istanza del model uso il metodo create 
     - [ ] se non è tutto ok rimango sul form e segnalo gli errori

     per ogni errore / campo
     *firstName "Mario" *lastName vuoto
     rimango nel form
     *firstName "MArio" *lasName 
      Risultato della validazione
                           - messaggio "campo obbligatorio"
      isValid = true       - isValid = false 
                           - code
      valore 
      ''
      "Mario"              - ''

  ---------------------------------------------------- 
  lezione 11/05/21
  
  Lista cose da fare:

    - [x] aggiungere la password 
    - [x] aggiungere attributo password nel db
    - [x] aggiungere input text password nel foarm
    - [x] aggiungere la proprietà password nella classe User 
    - [x] inserire username come mail
      - [x] verificare che non esistano due mail uguali
    - [x] impostare una chiave unica sull'email --> how to set unique key in mysql


    - [ ] metodo password_hash() per la criptazione ----> quando creiamo un nuovo utente si cripta la password
    - [ ] implementare la schermata di login
      - [ ] **login user** ----> è un controller
      - [ ] form dove inseriamo la mail (come username) e la password.
      - [ ] implementare **UserModel::autenticate($username, $password):?User**
      - [ ] se l'utente esiste accedo all'elenco degli utenti
=======
>>>>>>> 04d871ed19dd9363821369142102b4999f479bc5
