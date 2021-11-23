<?php

include "db.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string
$sql = mysqli_query($conn, "select * from registration where Id='$id'");
$eidt = mysqli_fetch_array($sql);
?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
    <fieldset>
        <legend>Contact Form</legend>
        <form name="frmContact" method="post" action="update.php">
            <p>
                <label for="ID">ID </label>
                <input type="text" name="Id" id="Id" value="<?php echo $eidt['Id']; ?>" readonly>
            </p>
            <p>
                <label for="Name">Name </label>
                <input type="text" name="txtName" id="txtName" value="<?php echo $eidt['fldName']; ?>">
            </p>


            <p>
                <label for="email">Email</label>
                <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $eidt['fldEmail']; ?>">
            </p>
            <p>
                <label for=" phone">Phone</label>
                <input type="text" name="txtPhone" id="txtPhone" value="<?php echo $eidt['fldPhone']; ?>">
            </p>

            <p>
                <label for=" message">Message</label>
                <textarea name="txtMessage" id="txtMessage" value=""><?php echo $eidt['fldMessage']; ?></textarea>
            </p>
            <p>&nbsp;</p>

            <p>
                <input type="Submit" name="Edit" id="Submit" value="Update">
            </p>

        </form>
    </fieldset>
</body>

</html>