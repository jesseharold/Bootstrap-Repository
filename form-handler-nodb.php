<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "jesseharold@gmail.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Thank you for your form submission",$msg);
echo 'Thank you for reaching out. I will respond to you within a few days. <br><br><a href="index.html">Return to the homepage</a>.';

?>
