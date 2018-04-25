<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_form = 'andresmart92@gmail.com';
  $email_subject = "New Form Submission";
  $email_body = "You have received a new message from the user $name. \n." "here is the message:\n $message."

?>