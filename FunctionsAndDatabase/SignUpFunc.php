<?php
if (isset($_POST["signup-submit"])) {

  require 'dbh.php';
  $username = $_POST['uid'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwd-repeat'];

  if (empty($username) || empty($email) ||empty($pwd) ||empty($pwdRepeat)) {
    header("Location: ../SignUp.php?error=emptyfields&uid=".$username."&email=".$email);
    exit();
  }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      header("Location: ../SignUp.php?error=invalidEmailuid");
      exit();
  }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../SignUp.php?error=invalidEmail&uid=".$username);
    exit();
  }elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../SignUp.php?error=invaliduid&email=".$email);
    exit();
  }elseif ($pwd !== $pwdRepeat) {
    header("Location: ../SignUp.php?error=checkpassword&uid=".$username."&email=".$email);
    exit();
  }else {
    $sql = "SELECT userName from users Where userName=?";
    $stmt = mysqli_stmt_init($conn);
    If(!mysqli_stmt_prepare($stmt,$sql)) {
      header("Location: ../SignUp.php?error=sqlerror");
      exit();
    }else{
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../SignUp.php?error=usertaken&email=".$email);
        exit();
      }else {
        $sql = "INSERT INTO users (userName, emailUsers, pwdUsers) Values (?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
          header("Location: ../SignUp.php?error=sqlerror");
          exit();
        }else {
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../SignUp.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} else {
  header("Location ../SignUp.php");
  exit();
}
