<?php 
$to = "jharwell@harwellphotography.com"; 
$subject = "Harwell Photography - Contact Form";


$headers = "From: " . strip_tags($_POST['name']); 
$headers .= "<" . strip_tags($_POST["email"]) . ">\r\n"; 
$headers .= "Reply-To: " . strip_tags($_POST["email"]) . "\r\n"; 
$headers .= "Return-Path: " . strip_tags($_POST["email"]); 

$message .= "Email Contact Form - harwellphotography.com\n\n";

$message .= "Name: " . strip_tags($_POST["name"]) . "\r\n";

$message .= "Email: " . strip_tags($_POST["email"]) . "\r\n";

$message .= "Phone: " . strip_tags($_POST["phone"]) . "\r\n";

$message .= "Event Location: " . strip_tags($_POST["event_location"]) . "\r\n";

$message .= "Event Date: " . strip_tags($_POST["date"]) . "\r\n";

$message .= "Message: " . strip_tags($_POST["comment2"]) . "\r\n";

if($_POST["name"] && $_POST["email"] && $_POST["phone"] && $_POST["comment2"]){
  mail($to, $subject, $message, $headers); 
}

header("Location: ../thank-you.html");
?>
