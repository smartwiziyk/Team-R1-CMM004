<?php

$ServerName = "localhost";
$DBaseUsername = "root";
$DBasePassword = "";
$DBaseName = "gr1_gardening_serv";

$conn = mysqli_connect($ServerName, $DBaseUsername, $DBasePassword, $DBaseName);

if (!$conn) {
    die("sorry, error in connection: " . mysqli_connect_error());
}
