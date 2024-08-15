<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);
  $captcha = htmlspecialchars($_POST['captcha']);
  $question = htmlspecialchars($_POST['question']);
  
  eval('$correct_answer = ' . $question . ';');
  
  if ($captcha == $correct_answer) {
    $to = "info@mail.hannes-hirsch.de";
    $headers = "From: " . $email;
    
    mail($to, $subject, $message, $headers);
    echo "Message sent!";
  } else {
    echo "Incorrect CAPTCHA answer. Please try again.";
  }
}
?>
