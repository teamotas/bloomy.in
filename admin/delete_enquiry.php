<?php 
session_start();
include_once('../db.php');
ob_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!='1'){
  
   ?>
        <script>
    window.location="<?=$adminurl;?>/index.php";
    </script>
        <?php
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  
  $srno=$_GET['srno'];
  $delete = mysqli_query($conn,"DELETE FROM makoonspune_enquiries WHERE srno='$srno'");

   

        if($delete){
            ?>
            <script>
            alert("Enquiry deleted successfully");
             window.location="<?=$adminurl;?>/enquiries.php";
            </script>
            <?php
        }else{
           ?>
            <script>
            alert("Unable to delete request,please try again!");
            window.location="<?=$adminurl;?>/enquiries.php";
            </script>
            <?php
        }
}else{

  ?>
            <script>
            alert("Unable to delete request,please try again!");
            window.location="<?=$adminurl;?>/enquiries.php";
            </script>
            <?php
}


?>