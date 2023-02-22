<?php

#Empty input functions for signup
function emptyInputSignup($FullName, $HomeAddress, $Phone, $Email, $Passwd, $PasswdRepeat, $userType, $StudID) {

  $result; #state variable name for true or false condition...
    if (empty($FullName) ||empty($HomeAddress) ||empty($Phone) ||empty($Email) || empty($Passwd) || empty($PasswdRepeat) || empty($userType) || empty($StudID) ) {
    $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

#check if invalid Student ID

function invalidUid($StudID) {
  $result; #state variable name for true or false condition...
    if (!preg_match("/^[0-9]*$/", $StudID)) {
    $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

#check if invalid email address

  function invalidEmail($Email) {
    $result; #state variable name for true or false condition...
      if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
      }
      else {
          $result = false;
      }
      return $result;
  }

  #Check for matching password

  function PasswdMatch($Passwd, $PasswdRepeat) {
    $result; #state variable name for true or false condition...
      if ($Passwd !== $PasswdRepeat) {
        $result = true;
      }
      else {
          $result = false;
      }
      return $result;
  }
#Check if Student ID/email already exists
  function uidExists($connection, $StudID, $Email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user-signup.php?error=failedstmt");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $StudID, $Email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
  }

  function createUser($connection, $FullName, $HomeAddress, $Phone, $Email, $Passwd, $userType, $StudID) {
    $sql = "INSERT INTO users (usersFullName, usersHomeAddress, usersPhone, usersEmail, usersPasswd, usersType, usersUid) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user-signup.php?error=failedstmt");
        exit();
    }
    $sql = "SELECT * FROM users WHERE usersUid = '$StudID' AND usersFullName='$FullName'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("location: ../index.php?success");
        exit();
      } else {
        echo "You've got an error!!!";
      }
    
    
#password hashing

    $hashedPasswd = password_hash($Passwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $FullName, $HomeAddress, $Phone, $Email, $hashedPasswd, $userType, $StudID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../successful-signup.php?error=none");
    exit();
}


#LOGIN
#Empty input functions for login

function emptyInputLogin($StudID, $Passwd) {
  $result; #state variable name for true or false condition...
    if (empty($StudID) || empty($Passwd)) {
    $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function loginUser($connection, $StudID, $Passwd) {
  $uidExists = uidExists($connection, $StudID, $StudID);

  if ($uidExists === false) {
    header("location: ../user-login.php?error=Loginincorrect!");
    exit();
  }
  $hashedPasswd = $uidExists["usersPasswd"];
  $checkPwd = password_verify($Passwd, $hashedPasswd);

  if ($checkPwd === false) {
    header("location: ../user-login.php?error=Loginincorrect!");
    exit();  
  }
  else if ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["userdata"] = $uidExists["usersFullName"];
    header("location: ../pg-admin.php?successful");
    exit(); 
  }



}






if ($userType == "admin") {
function loginAdmin($connection, $Email, $Passwd) {
  $uidExists = uidExists($connection, "", $Email);

  if ($uidExists === false) {
    header("location: ../user-login.php?error=Loginincorrect!");
    exit();
  }
  $hashedPasswd = $uidExists["usersPasswd"];
  $checkPwd = password_verify($Passwd, $hashedPasswd);

  if ($checkPwd === false) {
    header("location: ../user-login.php?error=Loginincorrect!");
    exit();  
  }
  else if ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["userdata"] = $uidExists["usersFullName"];
    $_SESSION['user-type'] = "admin"; #added admin
    header("location: ../pg-admin.php?successful");
    exit(); 
  }



}

 } else if ($userType == "tutor") {
  function loginTutor($connection, $Email, $Passwd) {
    $uidExists = uidExists($connection, "", $Email);
  
    if ($uidExists === false) {
      header("location: ../user-login.php?error=Loginincorrect!");
      exit();
    }
    $hashedPasswd = $uidExists["usersPasswd"];
    $checkPwd = password_verify($Passwd, $hashedPasswd);
  
    if ($checkPwd === false) {
      header("location: ../user-login.php?error=Loginincorrect!");
      exit();  
    }
    else if ($checkPwd === true) {
      session_start();
      $_SESSION["userid"] = $uidExists["usersId"];
      $_SESSION["userdata"] = $uidExists["usersFullName"];
      $_SESSION['user-type'] = "tutor"; #tutor admin
      header("location: ../pg-tutors.php?successful");
      exit(); 
    }
  
  
  
  }

 } else {function loginStudent($connection, $StudID, $Passwd) {
  $uidExists = uidExists($connection, $StudID, $StudID);

  if ($uidExists === false) {
    header("location: ../user-login.php?error=Loginincorrect!");
    exit();
  }
  $hashedPasswd = $uidExists["usersPasswd"];
  $checkPwd = password_verify($Passwd, $hashedPasswd);

  if ($checkPwd === false) {
    header("location: ../user-login.php?error=Loginincorrect!");
    exit();  
  }
  else if ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["userdata"] = $uidExists["usersFullName"];
    header("location: ../pg-teamreps.php?successful");
    exit(); 
  }



}


 }
