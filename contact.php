<?php

$from = "nick_kinlen@hotmail.com";
$to = "nick_kinlen@hotmail.com";
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$message = Trim(stripslashes($_POST['message']));
$phone = Trim(stripcslashes($_POST['phone']));

$body ="";
$body .="Name: ";
$body .=$name;
$body .="\n";
$body .="Email: ";
$body .=$email;
$body .="\n";
$body .="Message: ";
$body .=$message;
$body .="\n";
$body .="Phone :";
$body .=$phone;
$body .="\n";


$go = mail($to, $subject, $body, "From:<$from>");
if($go){
	print("Success!");
}
else{
	print("Unable to send!!");
}



 ?>
