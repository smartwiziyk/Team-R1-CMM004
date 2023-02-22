<?php
session_start ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutor - Teams Scheduler</title>
    <link rel="stylesheet" href="Style/mystyle1.css">
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
       
        <header>
                <h1>Tutors - Teams Scheduler</h1>

                <div class="navbar">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our vision</a></li>
                            <li><a href="#">Our mission</a></li>
                            <?php
                            if (isset($_SESSION["userdata"])){
                                echo "<li><a href='home.php'>View our Catalogue</a></li>";
                            }
                            ?>
                            <li class="nav-item"><a class="nav-link" href="#">Latest tips</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">FAQs</a></li>
                            <?php
                            if (isset($_SESSION["userdata"])){
                                echo "
                                <div class = 'navbar2'>
                                    <nav>
                                        <ul>
                                            <li><a href='Booking.php'> Call for Booking</a></li>
                                            <li><a href='includes/user-logout.incl.php'>Log Out</a></li>
                                        </ul>
                                    </nav>
                                </div>";
                            }
                            else {
                                echo "
                                    <div class = 'navbar2'>
                                        <nav>
                                            <ul>
                                                <li><a href='user-login.php'>Log in</a></li>
                                                <li><a href='user-signup.php'>Sign up</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    ";
                            }
                        ?>
                        </ul>               
                    </nav>
                </div> 
        </header>
 

        

</body>
</html>