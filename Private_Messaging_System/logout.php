<?php
session_start();
if(isset($_SESSION['username'])){
  //session is active let it imagedestroy
  unset($_SESSION['username']);
  //also change the location back to login page
  header("location:login.php");
}else{
  //if session not active
  //then change only the location
  //to login page
  header("location:login.php");
}

?>
