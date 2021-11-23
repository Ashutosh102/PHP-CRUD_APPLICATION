<?php

include "db.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string
//echo "$id";
$del = mysqli_query($conn, "delete from registration where Id='$id'"); // delete query

if ($del) {
    mysqli_close($conn); // Close connection
    header("location:fetch.php"); // redirects to all records page
    exit;
} else {
    echo "Error deleting record"; // display error message if not delete
}
?>