<?php
if(isset($_POST['email'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'shohruzbekkaharov@gmail.com';
    $subject = 'Message from Contact Form';
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    if(mail($to, $subject, $body)) {
        echo '<script>alert("Message sent successfully!"); window.location.href = "index.html";</script>';
    } else {
        echo '<script>alert("Message sending failed. Please try again."); window.location.href = "index.html";</script>';
    }
}
?>