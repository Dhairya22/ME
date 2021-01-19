

<?php
//*Mail form by Mo Bahjat*/
$to = "support@angelitsolutions.co.in"; /* <----add your e-mail*/
$Subject = "Email from my website";/*what subject you want to receive your email;*/

//Don't touch this please //
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


// this is the headers//
$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email"; 

//the mail Function
mail($to, $Subject, $message, $headers);
//this message will show up when you hit Submit button//
echo "Email has been sent! Thank you $name";
?>


