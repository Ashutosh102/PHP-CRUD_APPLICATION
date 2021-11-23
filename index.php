<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact Form</title>
</head>

<body>
    <fieldset>
        <legend>Contact Form</legend>
        <form name="frmContact" method="post" action="contact.php">
            <p>
                <label for="Name">Name </label>
                <input type="text" name="txtName" id="txtName">
            </p>
            <p>
                <label for="email">Email</label>
                <input type="text" name="txtEmail" id="txtEmail">
            </p>
            <p>
                <label for="phone">Phone</label>
                <input type="text" name="txtPhone" id="txtPhone">
            </p>
            <p>
                <label for="message">Message</label>
                <textarea name="txtMessage" id="txtMessage"></textarea>
            </p>
            <p>&nbsp;</p>
            <p>
                <input type="submit" name="Submit" id="Submit" value="Submit">
            </p>
        </form>
    </fieldset>
</body>

</html>
