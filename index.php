<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>A Nice &amp; Simple Contact Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<?php
    include 'dbconnect.php';
    $note = $_REQUEST['note'];
?>

<div id="page-wrap">
    <?php if ($note == 'success') {
    echo '<div class="success">Form successfully submitted!</div>';
}
?>

<h1>Simple PHP MySQL Database Form</h1>

    <div id="contact-area">

        <form method="post" action="user_process.php">
            <label for="Name">Name:</label>
            <input type="text" name="name" id="Name" />

            <label for="City">City:</label>
            <input type="text" name="city" id="City" />

            <label for="Email">Email:</label>
            <input type="text" name="email" id="Email" />

            <label for="Message">Message:</label><br />
            <textarea name="message" rows="20" cols="20" id="Message"></textarea>

            <input type="submit" name="submit" value="Submit" class="submit-button" />
        </form>

        <div style="clear: both;"></div>
    </div>

</div>

</body>
</html>