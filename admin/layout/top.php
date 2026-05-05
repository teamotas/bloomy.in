<?php 
session_start();
include_once('../config.php');

  if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!='1'){
  
   ?>
  <script>
  window.location="index.php";
  </script>
<?php
}

$fetch = mysqli_query($conn,"SELECT * FROM enquiries");
$no_of_enquiries=mysqli_num_rows($fetch);
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">