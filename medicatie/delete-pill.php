<?php
session_start();
include('../back-end/conn.php');



if(isset($_POST['id'])) {
    $day = $_POST['id'];
    $user_id = $_SESSION['id'];

    // Construct the SQL query to delete the record based on the day name and user ID
    $sql = "DELETE FROM pills WHERE user_id = '$user_id' AND day = '$day'";

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    // Redirect back to the pill.php file
    header("Location: pill.php");
    exit();
}
?>
