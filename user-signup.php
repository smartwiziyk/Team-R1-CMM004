<?php
include_once 'page-header.php';
?>
<div id="formContainer">
    

            <form action="includes/user-signup.incl.php" method="post">
            <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<div id='erroralert'><p style='color:darkred'>Please fill in all fields!</p></div><br>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<div id='erroralert'><p style='color:darkred'>Create a valid Username!</p></div>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<div id='erroralert'><p style='color:darkred'>Enter a valid email address!</p></div>";
        } else if ($_GET["error"] == "passwordsdonotmatch") {
            echo "<div id='erroralert'><p style='color:darkred'>Please re-confirm. Your Passwords don't match!</p></div>";
        } else if ($_GET["error"] == "failedstmt") {
            echo "<div id='erroralert'><p style='color:darkred'>Oops! Sorry, process failed. Try again please!</p></div>";
        } else if ($_GET["error"] == "usernamealreadyexists") {
            echo "<div id='erroralert'><p style='color:darkred'>Please choose another username. Your choice exists in our system!</p></div>";
        }
    }
            ?>
            <h2>Sign Up/Register</h2>
            <br>
                <label>Full Name:</label><br>
                <input type="text" name="FullName" placeholder="(Surname first)..."><br><br>
                <label>Home Address:</label><br>
                <input type="text" name="HomeAddress"><br><br>
                <label>Mobile number:</label><br>
                <input type="text" name="Phone" placeholder="Mobile Number..."><br><br>
                <label>School E-mail:</label><br>
                <input type="email" name="Email" placeholder="Enter a valid Email..."><br><br>
                <label>Choose a password:</label><br>
                <input type="password" name="Passwd"><br><br>
                <label>Confirm your Password:</label><br>
                <input type="password" name="PasswdRepeat" placeholder="Repeat Password..."><br><br><br>

                <label for="user-type">User type:</label>
			<select id="user-type" name="user-type">
				<option value="admin">Admin</option>
				<option value="tutor">Tutor</option>
				<option value="student">Student</option>
			</select>

			<!-- Student ID field, shown if user type is "student" -->
			<div id="student-id-container" style="display: none;">
				<label for="student-id">Student ID:</label>
				<input type="text" id="student-id" name="StudID" required>
			</div><br><br>
                <button type="submit" name="submit">Sign Up</button><br><br><br><br>
            </form>
</div>
            <!-- May perform same for Tutor(staffID) AS A PRIMARY KEY FOR TUTORS FOR BETTER SECURITY-->
            
<script>
		// Show/hide the student ID field based on the user type selection
		document.getElementById("user-type").addEventListener("change", function() {
			var userType = document.getElementById("user-type").value;
			var studentIdContainer = document.getElementById("student-id-container");
			if (userType === "student") {
				studentIdContainer.style.display = "block";
			} else {
				studentIdContainer.style.display = "none";
			}
		});
	</script>

<?php
    include_once 'page-footer.php';
?>