<?php

// $to = 'pinki.suthar@deepcoder.io';
// $subject = 'Test Email';
// $message = 'This is a test email sent from a PHP script using Postfix.';
// $headers = 'From: pinki.deepcoder@gmail.com' . "\r\n" .
//            'Reply-To: pinki.deepcoder@gmail.com' . "\r\n" .
//            'X-Mailer: PHP/' . phpversion();

// if (mail($to, $subject, $message, $headers)) {
//     echo 'Mail sent successfully.';
// } else {
//     echo 'Mail sending failed.';
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Collect and sanitize form input data
   $name = htmlspecialchars($_POST['name']);
   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
   $text = htmlspecialchars($_POST['text']);
   
   // Email details
   $to = 'pinki.suthar@deepcoder.io';  // Replace with the recipient's email
   $subject = 'New message from contact form';
   $message = "Name: $name\nEmail: $email\n\nMessage:\n$text";
   $headers = 'From: pinki.deepcoder@gmail.com' . "\r\n" .
              'Reply-To: pinki.deepcoder@gmail.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
   
   // Send the email
   if (mail($to, $subject, $message, $headers)) {
      //  echo 'Mail sent successfully.';
      header('Location: index.php?status=success');
   } else {
      //  echo 'Mail sending failed.';
      header('Location: index.php?status=error');
   }
} else {
   // echo 'Invalid request.';
   header('Location: index.php');
}