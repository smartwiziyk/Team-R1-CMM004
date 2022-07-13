<?php

$ServerName = "localhost";
$DBaseUsername = "root";
$DBasePassword = "";
$DBaseName = "gr1_gardening_serv";

$connection = new mysqli($ServerName, $DBaseUsername, $DBasePassword, $DBaseName);

if (!$connection) {
    die("sorry, there's an error in connection: " . $connection->connect_error);
}
