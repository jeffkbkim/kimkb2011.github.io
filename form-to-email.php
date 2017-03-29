<?php
//if(!isset($_POST['submit']))
//{
//    echo "error; you need to submit the form!";
//}
$name = $_REQUEST['name'];
$visitor_email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory.";
    exit;
}

$email_subject = "New Form submission";

$to = "kimkb2011@gmail.com";
$headers = "From: $email_from \r\n";

//send email
mail($to,$email_subject,$message,$headers);
?>