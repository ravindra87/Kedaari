<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "rvirawat8722@gmail.com";
  $subject = "Contact Form Submission";
  $messageBody = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $messageBody)) {
    echo "Thank you for your message! We will be in touch.";
  } else {
    echo "Failed to send the email. Please try again later.";
  }
} else {
  echo "Invalid request method";
}
?>
s   