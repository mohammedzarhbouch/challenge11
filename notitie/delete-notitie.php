<?php
session_start();

include('../back-end/conn.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $user_id = $_SESSION['id'];

    $sql = "DELETE FROM notities WHERE notitie_id = '$id' AND user_id = '$user_id'";

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    // Redirect back to the edit_page.php file
    header("Location: notitie.php");
    exit();
}
?>
