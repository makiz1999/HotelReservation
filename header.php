<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description:" content="Book hotel reservations at a great rate">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotel Reservation | Main Page</title>
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class = "container">
            <div id="company-name">
                <h1>Hotel Reservation</h1>
            </div>
            <nav>
                <ul>
                  <li class="current"><a href="index.php">Home</a></li>
                  <li><a href="AboutPage.php">About</a> </li>
                  <?php
                    if (!isset($_SESSION['userName']) && !isset($_SESSION['userId'])) {
                      echo '<li><a href="SignUp.php">Signup</a> </li>';
                    }
                   ?>
                </ul>
            </nav>
            <div class="container">
              <?php
              if (isset($_SESSION['userName']) || isset($_SESSION['userId'])) {
                echo '<p>Welcome back '.$_SESSION['userName'].'!</p>';
                echo '<form action="FunctionsAndDatabase/LogoutFunction.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                </form>';
              } else {
                echo'<form action="FunctionsAndDatabase/LoginFunction.php" method="post">
                  Username: <input type="text" name="username" placeholder = E-mail/Username>
                  Password: <input type="text" name="pwd" placeholder = Password>
                  <button type="submit" name="login-submit">Login</button>
                </form>';
                #<a href="SignUp.php">Signup</a>
                if(isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                    echo '<p>Fill all fields!</p>';
                  } else if ($_GET['error'] == "sqlerror") {
                    echo '<p>error in database check servor connection !</p>';
                    echo '<p>if running on localhost run sql file on a sql application</p>';
                  }else if ($_GET['error'] == "wrongpwd") {
                    echo '<p>Password does not match username/email!</p>';
                  }else if ($_GET['error'] == "nouserr") {
                    echo '<p>invalid username/email!</p>';
                  }
                } else {
                  echo'<p>Welcome valued guest.</p>';
                }
              }
              ?>
              <!-- if (isset($_SESSION['userName']) || isset($_SESSION['userId'])) {
                echo '<p>Welcome back '.$_SESSION['userName'].'!</p>';
              } else if(isset($_GET['error'])) {
                  if ($_GET['error'] == "emptyfields") {
                  echo '<p>Fill all fields!</p>';
                } else if ($_GET['error'] == "sqlerror") {
                  echo '<p>error in database check servor connection !</p>';
                  echo '<p>if running on localhost run sql file on a sql application</p>';
                }else if ($_GET['error'] == "wrongpwd") {
                  echo '<p>Password does not match username/email!</p>';
                }else if ($_GET['error'] == "nouserr") {
                  echo '<p>invalid username/email!</p>';
                }
              } else {
                echo'<p>Welcome valued guest.</p>';
              } -->




            </div>
          </div>
    </header>
