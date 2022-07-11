<?php
include_once 'header.php';
?>
<div class="container">
        <section class="col-md-12">
            <h2>Sign Up</h2>
            <div>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="FirstName" placeholder="First Name...">
                <input type="text" name="LastName" placeholder="Last Name...">
                <input type="text" name="HomeAddress" placeholder="Your Address...">
                <input type="text" name="Phone" placeholder="Mobile Number...">
                <input type="email" name="Email" placeholder="Email...">
                <input type="password" name="Passwd" placeholder="Choose a Password...">
                <input type="password" name="PasswdRepeat" placeholder="Repeat Password...">
                <button type="submit" name="submit">Sign Up</button>
            </form>
            </div>
        </section>
            <?php
        if(isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo"<p>Please fill in all fields!</p>";
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

            else if ($_GET["error"] == "none") {
                echo"
                <div><p class='alert alert-success' role='alert'>You have successfully signed up. WELCOME!</p></div>";
            }
        }
        ?>   
        </section>
</div>
<?php
    include_once 'footer.php';
?>
