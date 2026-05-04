<?php 
session_start();
include_once('../db.php');
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username=$_POST['username'];
  $password=md5($_POST['password']);
  
  
  $fetch = mysqli_query($conn,"SELECT * FROM makoonspune_user WHERE username='$username' and password='$password'");
  $show = mysqli_fetch_assoc($fetch);


   if(!empty($show)){
   	   $profile_picture=$show['profile_picture'];
       $_SESSION['username']=$username;
       $_SESSION['profile_picture']=$profile_picture;
       $_SESSION['logged_in']='1';
         ?>
        <script>
		window.location="dashboard.php";
		</script>
        <?php
   }else{
      
       ?>
        <script>
		alert("Username and Password not matched,Try again.");
		window.location="index.php";
		</script>
        <?php


   }



}


?>