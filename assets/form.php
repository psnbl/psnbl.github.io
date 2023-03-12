<?php

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate the form data
  if (!empty($name) && !empty($email) && !empty($message)) {

    // Set the recipient email address
    $to = 'your-email@example.com';

    // Set the email subject
    $subject = 'New message from ' . $name;

    // Set the email message
    $message = "Name: $name\n\nEmail: $email\n\nMessage: $message";

    // Set the email headers
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
      // Email sent successfully
      echo 'Thank you for your message.';
    } else {
      // Email failed to send
      echo 'An error occurred while sending your message. Please try again later.';
    }

  } else {
    // Form data is invalid
    echo 'Please fill in all the required fields.';
  }
}
