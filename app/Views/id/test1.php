<?php
    // require $_SERVER['DOCUMENT_ROOT'] .'/../vendor/autoload.php';
?>
<html>
<head>
    <title>Email Form</title>
    <link rel="stylesheet" href="https://classless.de/classless.css">

</head>
<body>
    <h1>Email Form</h1>
    <form action="/idController/test2" method="POST">
        <label for="recipient">Recipient:</label>
        <input type="email" name="mail" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="message">Message:</label><br>
        <textarea name="message" rows="6" cols="40" required></textarea><br>

        <input type="submit" value="Send Email">
    </form>
</body>
</html>
