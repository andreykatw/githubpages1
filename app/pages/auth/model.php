<?php
    declare(strict_types=1);

class Model
{
    function getUser(object $databaseConnection, string $username){
        $query = 'SELECT   * FROM users WHERE username = "' . $username . '" LIMIT 1 ';
        $result = $databaseConnection->query($query);

        return $result;
    }

    function validateMathcingPasswords(string $formPassowrd, string $dbPassowrd) { /*can be converted into password_verify if hashed pswrd*/
        if ($formPassowrd == $dbPassowrd) {
            return true;
        } else {
            return false;
        }
    }

    function checkForExistingUser($dbResults){
        if ( $dbResults) {
            return true;
        } else {
            return false;
        }
    }

    function createNewUser(object $databaseConnection, string $username, string $password){
        $query = "INSERT INTO users (username, password) VALUES( '" .$username . "','" .$password .  "')";
        $result = $databaseConnection->query($query);

    }
}