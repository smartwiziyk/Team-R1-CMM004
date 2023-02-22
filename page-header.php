<?php
session_start ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutors - Teams Scheduler</title>
    <link rel="stylesheet" href="Style/mystyle.css">
    <link rel="stylesheet" href="Style/loginpg.css">
    <link rel="stylesheet" href="Style/JavaScript.js">
    <link rel="stylesheet" href="Material/css/bootstrap.css">
    <link rel="stylesheet" href="Material/css/bootstrap.min.css">
    <link rel="stylesheet" href="Material/css/mdb.css">
    <link rel="stylesheet" href="Material/css/mdb.lite.min.css.map">
    <link rel="stylesheet" href="Material/css/mdb.min.css">
    <link rel="stylesheet" href="Material/css/mdb.min.css.map">
    <link rel="stylesheet" href="Material/css/ripple.css">
    <link rel="stylesheet" href="Material/css/ripple.min.css">
    <link rel="stylesheet" href="Material/js/bootstrap.js">
    <link rel="stylesheet" href="Material/js/bootstrap.min.js">
    <link rel="stylesheet" href="Material/js/bootstrap.min.js.map">
    <link rel="stylesheet" href="Material/js/mdb.js">
    <link rel="stylesheet" href="Material/js/mdb.lite.min.js.map">
    <link rel="stylesheet" href="Material/js/mdb.min.js">
    <link rel="stylesheet" href="Material/js/mdb.min.js.map">
    <link rel="stylesheet" href="Material/js/ripple.js">
    <link rel="stylesheet" href="Material/js/ripple.min.js">
    <link rel="stylesheet" href="Style/fonts.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

</head>
<body> 
    <div class="container">   
        <header style="background-color:#9c5300b4" class="col-md-12">
            <div class="topical">
                <h1 class="main">Tutor - Teams Scheduler</h1>
        
                <h6>Team meeting Scheduler</h6>
            </div>
        
                <div class="navbar">
                    <a href="#" class="navlink">Home</a>
                    <a href="#" class="navlink">About us</a>
                    <a href="#" class="navlink">Gardening tips</a>
                    <a href="#" class="navlink">Our vision</a>
                    <a href="#" class="navlink">Our mission</a>
                    <?php
                    if (isset($_SESSION["userdata"])){
                        echo "<a href='Booking.php'> Call for Booking</a>";
                        echo "<a href='includes/user-logout.incl.php'>Log Out</a>";
                    }
                    else {
                        echo "<a href='user-login.php'>Log in</a>";
                        echo "<a href='user-signup.php'>Sign up</a>";
                    }
                    ?>
                </div>
        </header>
    </div>
    <br>
 

        

</body>
</html>