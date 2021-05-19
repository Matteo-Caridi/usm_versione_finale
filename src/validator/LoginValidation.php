<?php

namespace sarassoroberto\usm\validator;

use sarassoroberto\usm\entity\User;

class LoginValidation
{



    public const EMAIL_ERROR_FORMAT_MSG = '';
    public const EMAIL_ERROR_REQUIRED_MSG = 'La mail è obbligatoria';
    public const EMAIL_ERROR_NONE_MSG = '';

    public const PASS_ERROR_FORMAT_MSG = '';
    public const PASS_ERROR_REQUIRED_MSG = 'La password è obbligatoria';
    public const PASS_ERROR_NONE_MSG = '';


    private $email;
    private $password;
    private $errors = []; // Array<ValidationResult>;
    private $isValid = true;



    public function __construct($password, $email)
    {
        $this->password = $password;
        $this->email = $email;
        $this->validate();
    }

    private function validate()
    {


        $this->errors['email']  = $this->validateEmail();
        $this->errors['password'] = $this->validatePassword();
    }

    public function getIsValid()
    {
        $this->isValid = true;
        foreach ($this->errors as $validationResult) {
            $this->isValid = $this->isValid && $validationResult->getIsValid();
        }
        return $this->isValid;
    }


    private function validateEmail(): ?ValidationResult
    {
        $email = $this->email;
        if (empty($email)) {
            return new ValidationResult(self::EMAIL_ERROR_REQUIRED_MSG, false, $email);
            //return true;
        } else {

            $validateEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

            if ($validateEmail === false) {
                return new ValidationResult(self::EMAIL_ERROR_FORMAT_MSG, false, $email);
            } else {
                return new ValidationResult(self::EMAIL_ERROR_NONE_MSG, true, $email);
            }
        }
    }
    public function validatePassword()
    {
        $password = $this->password;
        if (empty($password) === true) {
            return new ValidationResult(self::PASS_ERROR_REQUIRED_MSG, false, $password);
        } else {
            return new ValidationResult(self::PASS_ERROR_NONE_MSG, true, $password);
        }
    }

    /**
     *  foreach($userValidation->getErrors() as $error ){
     *   echo "<li</li>"
     *  }
     * 
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * $userValidation->getError('lastName');
     * @var ValidationResult $errorKey Chiave associativa che contiene un ValidationResult corrispondente
     */
    public function getError($errorKey)
    {
        return $this->errors[$errorKey];
    }


    public function validateDate($date, $format = 'Y-m-d')
    {
        // fonte https://stackoverflow.com/questions/19271381/correctly-determine-if-date-string-is-a-valid-date-in-that-format/19271434

        $d = \DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return ($d && $d->format($format) === $date);
    }
}
