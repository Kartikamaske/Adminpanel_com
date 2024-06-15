<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">
</head>
<body>
    <form action="send_email.php" method="post">
        <label for="recipient">Recipient Email:</label>
        <input type="email" name="recipient"  class="" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="message">Message:</label><br>
        <textarea name="message" rows="4" cols="50" required>This is the default message text.</textarea><br>

        <input type="submit" value="Send Email">
    </form>
</body>
</html>


<script>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = $_POST["recipient"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $headers = "From: webmaster@example.com"; // Set the sender's email address

    if (mail($recipient, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>


</script>


