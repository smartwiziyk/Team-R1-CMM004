<?php

session_start();
if (isset($_POST["submit"])) {

    $UserName = $_POST["UserName"];
    $Passwd = $_POST["Passwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($UserName, $Passwd) !== false) {
        header("location: ../login.php?error=emptylogininput");
        exit();
    } 

    loginUser($conn, $UserName, $Passwd);
}
else {
    header("location: ../login.php");
    exit();
}