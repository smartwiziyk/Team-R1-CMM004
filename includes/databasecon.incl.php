<?php

$ServerName = "localhost";
$DBaseUsername = "root";
$DBasePassword = "";
$DBaseName = "gr1_gardening_serv";

$connection = mysqli_connect($ServerName, $DBaseUsername, $DBasePassword, $DBaseName);

if (!$connection) {
    die("sorry, there's an error in connection: " . mysqli_connect_error());
}
