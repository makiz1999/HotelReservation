<?php

$servername = "localhost";
$dBUsername = "root";
$dBPwd = "";
$dBName = "hotel_reservation";

$conn = mysqli_connect($servername, $dBUsername,$dBPwd, $dBName);

if (!$conn) {
  die("Connection failed: ".mysql_connect_error());
}
