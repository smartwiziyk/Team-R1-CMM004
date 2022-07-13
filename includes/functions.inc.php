<?php

#Empty input functions for signup

function emptyInputSignup($FullName, $UserName, $HomeAddress, $Phone, $Email, $Passwd, $PasswdRepeat) {
  $result;
    if (empty($FullName) || empty($UserName) ||empty($HomeAddress) ||empty($Phone) ||empty($Email) || empty($Passwd) || empty($PasswdRepeat)) {
    $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

#check if invalid username

function invalidUid($UserName) {
  $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $UserName)) {
    $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

#check if invalid email address

  function invalidEmail($Email) {
    $result;
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
    $result;
      if ($Passwd !== $PasswdRepeat) {
        $result = true;
      }
      else {
          $result = false;
      }
      return $result;
  }

  function uidExists($conn, $UserName, $Email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=failedstmt");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $UserName, $Email);
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

  function createUser($conn, $FullName, $UserName, $HomeAddress, $Phone, $Email, $Passwd) {
    $sql = "INSERT INTO users (usersFullName, usersUid, usersHomeAddress, usersPhone, usersEmail, usersPasswd) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=failedstmt");
        exit();
    }
    $sql = "SELECT * FROM users WHERE usersUid = '$UserName' AND usersFullName='$FullName'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("location: ../index.php?success");
        exit();
      } else {
        echo "You've got an error!!!";
      }
    
    
#password hashing

    $hashedPasswd = password_hash($Passwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $FullName, $UserName, $HomeAddress, $Phone, $Email, $hashedPasswd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

#Empty input functions for login

function emptyInputLogin($UserName, $Passwd) {
  $result;
    if (empty($UserName) || empty($Passwd)) {
    $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $UserName, $Passwd) {
  $uidExists = uidExists($conn, $UserName, $UserName);

  if ($uidExists === false) {
    header("location: ../login.php?error=Loginincorrect!");
    exit();
  }
  $hashedPasswd = $uidExists["usersPasswd"];
  $checkPwd = password_verify($Passwd, $hashedPasswd);

  if ($checkPwd === false) {
    header("location: ../login.php?error=Loginincorrect!");
    exit();  
  }
  else if ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersFullName"];
    header("location: ../index.php?successful");
    exit(); 
  }
}