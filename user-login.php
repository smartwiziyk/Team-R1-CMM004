<?php
include_once 'page-header.php';
?>

<div id="formContainer">
    <form action="includes/user-login.incl.php" method="post">
        <h2>Log In as User</h2>
        <br>
        <label>Username or Email:</label><br>
        <input type="text" name="UserName"><br><br>
        <label>Password:</label><br>
        <input type="password" name="Passwd"><br><br>
        <button type="submit" name="submit">Log In</button><br><br><br>
    </form>

    <?php
        if (isset($_GET["error"])) {
        if ($_GET["error"] == "incorrectemail!") {
        echo "<p>Please fill in correct email!</p>";
        } else if ($_GET["error"] == "Loginincorrect!") {
        echo "<p>Incorrect Login Credentials!</p>";
        }
        }

    ?>
</div>
<?php
include_once 'page-footer.php';
?>