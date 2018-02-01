<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$EmailTo = "cedric.vaz@gmail.com";
$Subject = "Website Message: " . $subject;

$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

//$success = mail($EmailTo, $Subject, $Body, "From:".$email);
$success = mail($EmailTo, $Subject, $Body);

if ($success){
    echo "OK";
}


?>