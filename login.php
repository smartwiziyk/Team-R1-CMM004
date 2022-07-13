<?php
include_once 'header.php';
?>
<div class="container">
        <section class="col-md-12">
            <h2>Log In as User</h2>
            <div>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="UserName" placeholder="Enter your Username or Email...">
                <input type="password" name="Passwd" placeholder="Password...">
                <button type="submit" name="submit">Log In</button>
            </form>
            </div>
        </section>
            <?php
            if(isset($_GET["error"])) {
            if ($_GET["error"] == "incorrectemail!") {
                echo"<p>Please fill in correct email!</p>";
            }
            else if ($_GET["error"] == "Loginincorrect!") {
                echo"<p>Incorrect Login Credentials!</p>";
            }

        }
        ?>
        
</div>   
<?php
    include_once 'footer.php';
?>
