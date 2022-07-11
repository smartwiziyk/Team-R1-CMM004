<?php

session_start();
if (isset($_POST["submit"])) {

    $Email = $_POST["Email"];
    $Passwd = $_POST["Passwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($Email, $Passwd) !== false) {
        header("location: ../login.php?error=emptylogininput");
        exit();
    } 

    loginUser($conn, $Email, $Passwd);
}
else {
    header("location: ../login.php");
    exit();
}