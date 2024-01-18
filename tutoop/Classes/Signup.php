<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Signup extends Dbh {
    // creating properties for db class
    private $username;
    private $pwd;

    // assign data to the properties above using the constructor
    public function __construct($username, $pwd) {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    // create a method to query the database and store users input from the frontend
    private function insertUser() {
        $query = "INSERT INTO users ('username', 'pwd') VALUES
        (:username, :pwd);";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }

    // create a method that handles errors and check if there are any user input errors
    private function isEmptySubmit() {
        if(isset($this->username) && isset($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }

    // create a method to signup the user if there are no errors
    public function signupUser() {
        // error handlers
        if ($this->isEmptySubmit()) {
            header("Locatoin: " . $_SERVER["DOCUMENT_ROOT"] . '../index.php');
            die();
        }

        // if no errors, signup user
        $this->insertUser();
    }
}