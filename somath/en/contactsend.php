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
$somath = 'somath@jyu.fi';
$email_subject = "[SoMath] Contact us: $name";
$email_body = "Dear $name, \n\n\t Thank you for contacting us. The following message was sent to us:"."\n\nName: $name\n\nInstitution: $uni\n\n Email: $email_address\n\n Message:\n$message\n\n In the next days one of our team members is going to contact with you. \n\n Best Regards,\n Signs of Mathematics Team";
$headers = "From: augusto.gerolin@jyu.fi\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address"; 
$headers2 .= "From: somath@jyu.fi" . "\r\n" . "Reply-To: $to";   
mail($to,$email_subject,$email_body,$headers);
mail($somath,$email_subject,$email_body,$headers);
mail($email_address,$email_subject,$email_body,$headers2);

header("location: index.php?l=contactsendpage");

return true;         
?>
<div class="content">
			<div class="contact">
				<h1>Get in touch with us<br></h1>
				<div class="top-contact">
                <p> Thank you for sending us a message. <br>You will receive a confirmation at your e-mail. In few days, one of the members of our team will get in contact with you.
			</div>	
			</div>
			</div>
			<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929.4458565468682!2d25.732608476043858!3d62.23094209533596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4685741e51ee5e51%3A0x97f6a7c93847fdcd!2sMattilanniemen+kirjasto%2C+40100+Jyv%C3%A4skyl%C3%A4!5e0!3m2!1sen!2sfi!4v1523115071201"></iframe>
			</div>
		</div>