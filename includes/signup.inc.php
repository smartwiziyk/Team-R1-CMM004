<?php

if (isset($_POST["submit"])) {
    
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $HomeAddress =$_POST["HomeAddress"];
    $Phone = $_POST["Phone"];
    $Email = $_POST["Email"];
    $Passwd = $_POST["Passwd"];
    $PasswdRepeat = $_POST["PasswdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($FirstName, $LastName, $HomeAddress, $Phone, $Email, $Passwd, $PasswdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($Email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (PasswdMatch($Passwd, $PasswdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdonotmatch");
        exit();
    }


    createUser($conn, $FirstName, $LastName, $HomeAddress, $Phone, $Email, $Passwd);

    echo "You have successfully signed up!";
}   
else {
    header("location: ../signup.php");
    exit();
}
    
