<?php
include "connection.php";

$username = $_POST['username'];
$pass     = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $pass)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:home.html');
}
else
{
  echo "<script> alert('username or password incorect'); location = 'login.php'; </script>";

}
?>