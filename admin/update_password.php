<?php
session_start();
include_once('../config.php');
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_SESSION['username'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if new passwords match
    if ($new_password !== $confirm_password) {
        echo "<script>
            alert('New Password and confirm password does not match!');
            window.location='change_password.php';
        </script>";
        exit;
    }

    // Fetch user securely
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($current_password, $user['password'])) {

        // Hash new password
        $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

        // Update password
        $update = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        $update->bind_param("si", $hashedPassword, $user['id']);

        if ($update->execute()) {
            echo "<script>
                alert('Password updated successfully');
                window.location='change_password.php';
            </script>";
        } else {
            echo "<script>
                alert('Unable to change password, please try again!');
                window.location='change_password.php';
            </script>";
        }

    } else {
        echo "<script>
            alert('Incorrect current password, Please Try Again!');
            window.location='change_password.php';
        </script>";
    }
}
?>