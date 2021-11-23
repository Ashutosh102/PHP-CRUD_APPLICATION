<?php
include "db.php";

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

$sql = "INSERT INTO `registration` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) 
VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($conn, $sql);
header("location:fetch.php");
?>