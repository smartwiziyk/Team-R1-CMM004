<?php

session_start();
if (isset($_POST["submit"])) {

    $UserName = $_POST["UserName"];
    $Passwd = $_POST["Passwd"];
    $userType = $_POST["user-type"];

    require_once 'databasecon.incl.php';
    require_once 'mydef-func.incl.php';

    if (emptyInputLogin($UserName, $Passwd) !== false) {
        header("location: ../user-login.php?error=emptylogininput");
        exit();
    }
 
    loginUser($connection, $UserName, $Passwd);
}
else {
    header("location: ../user-login.php");
    exit();
}


