<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Include PHPMailer files
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
// require 'PHPMailer/src/Exception.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $name = '';
//     $email = '';
//     $phone = '';
//     $message = '';

//     foreach ($_POST as $key => $value) {
//         $key = strtolower($key);

//         if (strpos($key, 'name') !== false) {
//             $name = $value;
//         }

//         if (strpos($key, 'email') !== false) {
//             $email = $value;
//         }

//         if (strpos($key, 'phone') !== false || strpos($key, 'mobile') !== false) {
//             $phone = $value;
//         }

//         if (strpos($key, 'message') !== false || strpos($key, 'comment') !== false) {
//             $message = $value;
//         }
//     }

//     if (empty($name) || empty($email) || empty($phone)) {
//         exit("❌ Required fields missing");
//     }

//     $mail = new PHPMailer(true);

//     try {

//         // SMTP settings
//         $mail->isSMTP();
//         $mail->Host       = 'smtp.gmail.com';
//         $mail->SMTPAuth   = true;
//         $mail->Username   = 'info@bloomyschools.com';
//         $mail->Password   = 'czqwyfzpfkjvdenv'; // ✅ your App Password
//         $mail->SMTPSecure = 'tls';
//         $mail->Port       = 587;

//         // Email settings
//         $mail->setFrom('info@bloomyschools.com', 'Bloomy Schools');
//         $mail->addAddress('info@bloomyschools.com');
//         $mail->addAddress('adword@webiantdigital.in');

//         $mail->addReplyTo($email, $name);

//         // Email content
//         $mail->isHTML(true);
//         $mail->Subject = "New Admission Enquiry | $name";

//         $mail->Body = "
//             <h2>New Admission Enquiry</h2>
//             <p><b>Name:</b> $name</p>
//             <p><b>Email:</b> $email</p>
//             <p><b>Phone:</b> $phone</p>
//             <p><b>Message:</b> $message</p>
//         ";

//         $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

//         $mail->send();

//         header("Location: thankyou.html");
//         exit();

//     } catch (Exception $e) {
//         echo "❌ Mail Error: {$mail->ErrorInfo}";
//     }

// } else {
//     echo "Invalid Request";
// }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Helper sanitize function
    function clean_input($data) {
        return trim(strip_tags($data));
    }

    $name = '';
    $email = '';
    $phone = '';
    $message = '';

    foreach ($_POST as $key => $value) {
        $key = strtolower($key);
        $value = clean_input($value);

        if (strpos($key, 'name') !== false) {
            $name = $value;
        }

        if (strpos($key, 'email') !== false) {
            $email = $value;
        }

        if (strpos($key, 'phone') !== false || strpos($key, 'mobile') !== false) {
            $phone = $value;
        }

        if (strpos($key, 'message') !== false || strpos($key, 'comment') !== false) {
            $message = $value;
        }
    }

    // Validation
    if (empty($name) || empty($email) || empty($phone)) {
        exit("❌ Required fields missing");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit("❌ Invalid email format");
    }

    // Prevent header injection
    if (preg_match("/[\r\n]/", $name) || preg_match("/[\r\n]/", $email)) {
        exit("❌ Invalid input detected");
    }

    // Limit input lengths
    if (strlen($name) > 100 || strlen($email) > 150 || strlen($phone) > 20 || strlen($message) > 1000) {
        exit("❌ Input too long");
    }

    // Escape for HTML email output
    $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safe_phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    $mail = new PHPMailer(true);

    try {

        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@bloomyschools.com';
        $mail->Password   = 'czqwyfzpfkjvdenv'; // ⚠️ Move this to env in production
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom('info@bloomyschools.com', 'Bloomy Schools');
        $mail->addAddress('info@bloomyschools.com');
        $mail->addAddress('adword@webiantdigital.in');

        $mail->addReplyTo($email, $safe_name);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Admission Enquiry | $safe_name";

        $mail->Body = "
            <h2>New Admission Enquiry</h2>
            <p><b>Name:</b> {$safe_name}</p>
            <p><b>Email:</b> {$safe_email}</p>
            <p><b>Phone:</b> {$safe_phone}</p>
            <p><b>Message:</b><br>{$safe_message}</p>
        ";

        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

        $mail->send();

        header("Location: thankyou.html");
        exit();

    } catch (Exception $e) {
        echo "❌ Mail Error: {$mail->ErrorInfo}";
    }

} else {
    echo "Invalid Request";
}