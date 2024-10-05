<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  // Set recipient email address
  $to = 'Jcjlogistics@fastservice.com';
  
  // Set email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8\r\n";
  
  // Send email
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo json_encode(array('status' => 'success'));
  } else {
    // Error sending email
    echo json_encode(array('status' => 'error'));
  }
  
} else {
  // Form not submitted
  echo json_encode(array('status' => 'error'));
}
?>
