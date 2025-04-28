<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['uni'])       ||
   empty($_POST['dep'])       ||
   empty($_POST['email'])     ||
   empty($_POST['adate'])     ||
   empty($_POST['ddate'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$uni = strip_tags(htmlspecialchars($_POST['uni']));
$dep = strip_tags(htmlspecialchars($_POST['dep']));
$diet = strip_tags(htmlspecialchars($_POST['diet']));
$adate = strip_tags(htmlspecialchars($_POST['adate']));
$ddate = strip_tags(htmlspecialchars($_POST['ddate']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$title = strip_tags(htmlspecialchars($_POST['title']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
$txt_body = "\n"."$name\t\t $uni\t $dep\t $email_address\t $adate\t $ddate\t  $title\t $message\t $diet";
   
$myfile = fopen("../form/emaillist.txt", "a+") or die("Unable to open file!");
fwrite($myfile, $txt_body);
fclose($myfile);   
   
   
// Create the email and send the message
$to = 'OTmeetsDFT@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Workshop OTmeetsDFT Registration: $name";
$email_body = "Dear $name, \n\n\t We are please to inform you have been registered for the workshop Optimal Transport meets Density Functional Theory to be held at University of Jyväskylä from 31st May to 7th June. By mid-March, you will be contacted by the organizers with more pratical information and the conference program. \n\n"."Here are your details:\n\nName: $name\n\nUniversity: $uni\n\nDepartment: $dep\n\nEmail: $email_address\n\nArrival Date: $adate\n\nDeparture Date:  $ddate\n\n\nTitle: $title\n\nMessage:\n$message\n\nDietary Requirements: $diet\n\n\n Best Regards,\n The organizers.";
$headers = "From: OTmeetsDFT@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address"; 
$headers2 .= "From: OTmeetsDFT@gmail.com" . "\r\n" . "Reply-To: $to";   
mail($to,$email_subject,$email_body,$headers);
mail($email_address,$email_subject,$email_body,$headers2);
return true;         
?>
