<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $subject = $_POST["subject"];
  $plan = $_POST["plan"];
  $rooms = $_POST["rooms"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "adeseghacyril@gmail.com";

  // Set the email subject
  $email_subject = "New Booking Form Submission: $subject";

  // Construct the email message
  $email_message = "You have received a new booking form submission. Here are the details:\n\n";
  $email_message .= "Name: $name\n";
  $email_message .= "Email: $email\n";
  $email_message .= "Phone: $phone\n";
  $email_message .= "Subject: $subject\n";
  $email_message .= "Plan: $plan\n";
  $email_message .= "Rooms: $rooms\n";
  $email_message .= "Date: $date\n";
  $email_message .= "Time: $time\n";
  $email_message .= "Message: $message\n";

  // Set the email headers
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\n";

  // Send the email
  if (mail($to, $email_subject, $email_message, $headers)) {
    echo "Thank you for your submission. We will contact you shortly.";
  } else {
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>
