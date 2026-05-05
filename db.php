<?php 
    date_default_timezone_set("Asia/Kolkata");
    // $servername = "localhost";
    // $username = "webiant";
    // $password = "G~+21kO=H2y3";
    // $adminurl="https://bloomyschools.in/admin/"; // While online the site please blank the site variable
    // $db = "makoonsvigyanvihar";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $adminurl="http://localhost/bloom/admin/"; // While online the site please blank the site variable
    $db = "bloomy";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>




