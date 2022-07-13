<?php
include_once 'page-header.php';
?>
<div class="container">
        <section class="col-md-12">
            
            <div class="signupform">
            <h2>Sign Up/Register</h2>
            <br><br>
            <form action="includes/user-signup.incl.php" method="post">
                <label>Full Name:</label><br>
                <input type="text" name="FullName" placeholder="(Surname first)..."><br><br>
                <label>Choose a Username:</label><br>
                <input type="text" name="UserName"><br><br>
                <label>Home Address:</label><br>
                <input type="text" name="HomeAddress"><br><br>
                <label>Mobile number:</label><br>
                <input type="text" name="Phone" placeholder="Mobile Number..."><br><br>
                <label>E-mail Address:</label><br>
                <input type="email" name="Email" placeholder="Enter a valid Email..."><br><br>
                <label>Choose a password:</label><br>
                <input type="password" name="Passwd"><br><br>
                <label>Confirm your Password:</label><br>
                <input type="password" name="PasswdRepeat" placeholder="Repeat Password..."><br><br><br>
                <button type="submit" name="submit">Sign Up</button><br><br><br><br>
            </form>
            </div>
        </section>
            <?php

        if(isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo"<p>Please fill in all fields!</p>";
            }

            else if ($_GET["error"] == "invaliduid") {
                echo"<p>Create a valid Username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo"<p>Enter a valid email address!</p>";
            }
            else if ($_GET["error"] == "passwordsdonotmatch") {
                echo"<p>Please re-confirm. Your Passwords don't match!</p>";
            }
            else if ($_GET["error"] == "failedstmt") {
                echo"<p>Oops! Sorry, process failed. Try again please!</p>";
            }
            else if ($_GET["error"] == "usernamealreadyexists") {
                echo"<p>Please choose another username. Your choice exists in our system!</p>";
            }
            else if ($_GET["error"] == "none") {
                echo"
                <div><p class='alert alert-success' role='alert'>You have successfully signed up. WELCOME!</p></div>";
            }
        }
        ?>   
        </section>
</div>
<?php
    include_once 'page-footer.php';
?>
