<?php

if (isset($_POST["submit"])) {
    
    #Define parameters posted from form as variables with corresponding super globals
    $FullName = $_POST["FullName"];
    $UserName = $_POST["UserName"];
    $HomeAddress =$_POST["HomeAddress"];
    $Phone = $_POST["Phone"];
    $Email = $_POST["Email"];
    $Passwd = $_POST["Passwd"];
    $PasswdRepeat = $_POST["PasswdRepeat"];

    require_once 'databasecon.incl.php';
    require_once 'mydef-func.incl.php';

    if (emptyInputSignup($FullName, $UserName, $HomeAddress, $Phone, $Email, $Passwd, $PasswdRepeat) !== false) {
        header("location: ../user-signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($UserName) !== false) {
        header("location: ../user-signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($Email) !== false) {
        header("location: ../user-signup.php?error=invalidemail");
        exit();
    }
    if (PasswdMatch($Passwd, $PasswdRepeat) !== false) {
        header("location: ../user-signup.php?error=passwordsdonotmatch");
        exit();
    }
    if (uidExists($connection, $UserName, $Email) !== false) {
        header("location: ../user-signup.php?error=usernamealreadyexists");
        exit();
    }

    createUser($connection, $FullName, $UserName, $HomeAddress, $Phone, $Email, $Passwd);

    echo "You have successfully signed up!";
    exit();
}