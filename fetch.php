<?php

include "db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Display all records from Database</title>
</head>

<body>
<center>
    <h2>Registration Detail</h2>

    <table border="2">
        <tr>
            <td>ID.No.</td>
            <td>Name</td>
            <td>Eamil_id</td>
            <td>Phone_No</td>
            <td>Message</td>
        </tr>

        <?php

        $records = mysqli_query($conn, "SELECT * FROM registration"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['Id']; ?></td>
                <td><?php echo $data['fldName']; ?></td>
                <td><?php echo $data['fldEmail']; ?></td>
                <td><?php echo $data['fldPhone']; ?></td>
                <td><?php echo $data['fldMessage']; ?></td>
                <td><a href="edit.php?id=<?php echo $data['Id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $data['Id']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <?php mysqli_close($conn); // Close connection 
    ?>
<center>
</body>

</html>