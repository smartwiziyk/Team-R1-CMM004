<?php

#Empty input functions for signup

function emptyInputSignup($FirstName, $LastName, $HomeAddress, $Phone, $Email, $Passwd, $PasswdRepeat) {
  $result;
    if (empty($FirstName) || empty($LastName) ||empty($HomeAddress) ||empty($Phone) ||empty($Email) || empty($Passwd) || empty($PasswdRepeat)) {
    $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

#check for valid email address

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


  function createUser($conn, $FirstName, $LastName, $HomeAddress, $Phone, $Email, $Passwd) {
    $sql = "INSERT INTO users (usersFirstName, usersLastName, usersHomeAddress, usersPhone, usersEmail, usersPasswd) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=failedstmt");
        exit();
    }


    
#password hashing

    $hashedPasswd = password_hash($Passwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $FirstName, $LastName, $HomeAddress, $Phone, $Email, $hashedPasswd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

#Empty input functions for login

function emptyInputLogin($Email, $Passwd) {
  $result;
    if (empty($Email) || empty($Passwd)) {
    $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $Email, $Passwd) {
  $sql="SELECT usersId FROM users WHERE usersEmail='$Email' and usersPasswd='$Passwd'";
  $result =mysqli_query($conn, $sql);
  return $result;

  if (!mysqli_num_rows($result) ==1) {
    header("location: ../login.php?error=incorrectemail!");
    exit();
  }



  $PasswdHashed = "usersPasswd";
  $checkPasswd = password_verify($Passwd, $PasswdHashed);

  if ($checkPasswd === false) {
    header("location: ../login.php?error=Loginincorrect!");
    exit();  
  }
  else if ($checkPasswd === true) {
    session_start();
    $_SESSION["userid"] = ["usersId"];
    $_SESSION["useruid"] = ["usersEmail"];
    header("location: ../index.php");
    exit(); 
  }
}


