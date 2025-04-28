<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['inst'])      ||
   empty($_POST['msg'])       ||
   empty($_POST['email'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$uni = strip_tags(htmlspecialchars($_POST['inst']));
$message = strip_tags(htmlspecialchars($_POST['msg']));
   
$txt_body = "\n"."$name\t\t $uni\t $email_address\t $message\t";
      
// Create the email and send the message
$to = 'augusto.gerolin@jyu.fi'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "[SoMath] Contact us: $name";
$email_body = "Dear $name, \n\n\t Thank you for contacting us. We received the following message:"."\n\nName: $name\n\nInstitution: $uni\n\n Email: $email_address\n\n Message:\n$message\n\n In the next days one of our team members are going to be in contact with you. \n Best Regards,\n Signs of Mathematics Team.";
$headers = "From: augusto.gerolin@jyu.fi\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address"; 
$headers2 .= "From: signmaths@gmail.com" . "\r\n" . "Reply-To: $to";   
mail($to,$email_subject,$email_body,$headers);
mail($email_address,$email_subject,$email_body,$headers2);
return true;         
?>
