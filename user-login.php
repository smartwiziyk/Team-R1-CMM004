<?php
include_once 'page-header.php';
?>

<div id="formContainer">
    <form action="includes/user-login.incl.php" method="post">
    <?php
        if (isset($_GET["error"])) {
        if ($_GET["error"] == "incorrectemail!") {
        echo "<p>Please fill in correct email!</p>";
        } else if ($_GET["error"] == "emptylogininput") {
        echo "<p style='color:darkred'>Please fill in all fields!</p>";
        }
        }

    ?>
        <h2>User Log In</h2>
        <br>
        <label>Username or Email:</label><br>
        <input type="text" name="UserName"><br><br>
        <label>Password:</label><br>
        <input type="password" name="Passwd"><br><br>
        <label for="user-type">User type:</label>
			<select id="user-type" name="user-type">
				<option value="admin">Admin</option>
				<option value="user">Tutor</option>
                <option value="user">Team Representative</option>
			</select><br><br>

        <button type="submit" name="submit">Log In</button><br><br><br>
    </form>

    
</div>
<?php
include_once 'page-footer.php';
?>