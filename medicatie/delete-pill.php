<?php




session_start();
include('../back-end/conn.php');

if(isset($_POST['id'])) {
    $day = $_POST['id'];
    $user_id = $_SESSION['id'];

    $sql = "DELETE FROM pills WHERE user_id = '$user_id'";


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
