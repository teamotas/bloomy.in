<?php
session_start();
include_once('../config.php');
ob_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != '1') {
    ?>
    <script>
        window.location = "<?= $adminurl; ?>/index.php";
    </script>
    <?php
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM enquiries WHERE id='$id'");

    if ($delete) {
        ?>
        <script>
            alert("Enquiry deleted successfully");
            window.location = "<?= $adminurl; ?>/enquiries.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Unable to delete request,please try again!");
            window.location = "<?= $adminurl; ?>/enquiries.php";
        </script>
        <?php
    }

} else {
    ?>
    <script>
        alert("Unable to delete request,please try again!");
        window.location = "<?= $adminurl; ?>/enquiries.php";
    </script>
    <?php
}
?>