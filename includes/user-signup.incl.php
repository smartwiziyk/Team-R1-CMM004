<?php

if (isset($_POST["submit"])) {
    
    #Define parameters posted from signup form as variables with corresponding super globals
    $FullName = $_POST["FullName"];
    $HomeAddress =$_POST["HomeAddress"];
    $Phone = $_POST["Phone"];
    $Email = $_POST["Email"];
    $Passwd = $_POST["Passwd"];
    $PasswdRepeat = $_POST["PasswdRepeat"];
    $userType = $_POST["user-type"];
    $StudID = $_POST["StudID"];

    require_once 'databasecon.incl.php';
    require_once 'mydef-func.incl.php';

    if (emptyInputSignup($FullName, $HomeAddress, $Phone, $Email, $Passwd, $PasswdRepeat, $userType, $StudID) !== false) {
        header("location: ../user-signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($StudID) !== false) {
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
    if (uidExists($connection, $StudID, $Email) !== false) {
        header("location: ../user-signup.php?error=usernamealreadyexists");
        exit();
    }

    createUser($FullName, $HomeAddress, $Phone, $Email, $Passwd, $PasswdRepeat, $userType, $StudID);

    echo "You have successfully signed up!";
    exit();
}