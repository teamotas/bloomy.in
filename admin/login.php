<?php
session_start();
include_once('../config.php');
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['username'] = $user['username'];
        $_SESSION['profile_picture'] = $user['profile_picture'];
        $_SESSION['logged_in'] = '1';

        header("Location: dashboard.php");
        exit;

    } else {

        echo "<script>
            alert('Username and Password not matched, Try again.');
            window.location='index.php';
        </script>";
    }
}
?>