Integrare la UserSession al al vostro script

- [x] Inserire la password criptata
- [x] [UserSession](src/service/UserSession.php)

# Crud degli interessi

User n --- m Interesse

- [x] Creare la tabella Interesse(InteresseId,nome)
- [x] Creare la tabella User_Interesse(UserId,InteresseId)

- Creare il CRUD (InteresseModel)

# Modificare il CRUD degli utenti 

- [x] Form Permettere di selezionare un interesse
- [x] UserModel modificare le query/metodi inserendo l'interesse
      
      - [x] CREATE USER - Come ottenere id di un utente appena creato ?
      - [x] Inserire nella tabella User_Interesse UserId appena creato e InteresseId selezionato

  
      - [ ] EDIT USER - Devo trovare l'interesse compilato dall'utente in fase di iscrizione già selezionato [selecthtml](https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_select)

      - [ ] DELETE USER - cancellare il suo riferimento anche nella tabella
      User_Interesse

      - [ ] DELETE Interesse - cancellare il suo riferimento anche nella tabella
      User_Interesse

      - EDIT USER - Cambio id di riferimento nella tabella User_Interesse

      
       



Interesse
  - InteresseId
  - nome

- 

user_interesse



#