<?php

if (isset($_POST["submit"])) {
    
    $FullName = $_POST["FullName"];
    $UserName = $_POST["UserName"];
    $HomeAddress =$_POST["HomeAddress"];
    $Phone = $_POST["Phone"];
    $Email = $_POST["Email"];
    $Passwd = $_POST["Passwd"];
    $PasswdRepeat = $_POST["PasswdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($FullName, $UserName, $HomeAddress, $Phone, $Email, $Passwd, $PasswdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($UserName) !== false) {
        header("location: ../signup.php?error=invaliduid");
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
    if (uidExists($conn, $UserName, $Email) !== false) {
        header("location: ../signup.php?error=usernamealreadyexists");
        exit();
    }

    createUser($conn, $FullName, $UserName, $HomeAddress, $Phone, $Email, $Passwd);

    echo "You have successfully signed up!";
    exit();
}