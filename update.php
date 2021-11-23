<?php
include_once 'db.php';

mysqli_query($conn, "UPDATE registration set  fldName='" . $_POST['txtName'] . "', fldEmail='" . $_POST['txtEmail'] . "',fldPhone='" . $_POST['txtPhone'] . "',fldMessage='" . $_POST['txtMessage'] . "' WHERE Id='" . $_POST['Id'] . "'");
header("location:fetch.php");
?>
