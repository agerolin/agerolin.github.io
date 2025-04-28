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

header("location: contactsend.html");

return true;         
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Refresh" content="2;url=contactsend.html">
</head>
<title>Signs of Mathematics | University of Jyväskylä</title>
    <!-- Favicons -->
	<link rel="shortcut icon" href="images/LogoTop.ico">
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123779687-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123779687-1');
</script>
<!-- jQuery-->
<script src="js/jquery.min.js"></script>
<!-- jQuery-->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kappe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->

</head>
<body>
	<div class="header">
	<!---->
		<div class="header-left">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav">
				<ul >
					<li><a href="index.html" class="black1" >HOME</a></li>
					<li><a href="activities.html" class="black2">ACTIVITIES</a></li>
					<li><a href="school.html" class="black3" >  FOR SCHOOLS</a></li>
					<li><a href="about.html"> ABOUT</a></li>
					<li class="active"><a href="contact.html" class="black4" > CONTACT US</a></li>
				</ul>
			</div>
						<ul class="social-in">
				<li><a href="https://www.skr.fi/" target="_blank">	<img src="images/menu_kultura.png" alt=""></a></li>
                   <li>  <a href="https://www.jyu.fi/" target="_blank">     <img src="images/menu_jyu.png" alt=""></a></li>
                  <li>  <a href="https://ec.europa.eu/research/mariecurieactions/" target="_blank">      <img src="images/menu_marie.png" alt=""> </a></li>

            
            <!-- 	<li><a href="#"><i> </i></a></li>
				<li><a href="#"><i class="gmail"> </i></a></li>
				<li><a href="#"><i class="twitter"> </i></a></li>
				<li><a href="#"><i class="pin"> </i></a></li>
				<li><a href="#"><i class="dribble"> </i></a></li>
				<li><a href="#"><i class="behance"> </i></a></li>
				Write your comments here -->
		  </ul>	
			<p class="footer-class">Website template by  <a href="http://w3layouts.com/" target="_blank">W3layouts
			</a> </p>
            <p class="footer-class">Graphics, videos and photos by <a href="https://users.aalto.fi/~zatorsi1/" target="_blank">Iga Zatorska
			</a> </p>
		</div>
		<!---->
		<!---->
		<div class="header-top">
			<div class="logo-in">
				<a href="index.html"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="images/menu.png" alt=""> </span>
				<ul >
					<li><a href="index.html">HOME</a></li>
					<li><a href="activities.html" class="black1">ACTIVITIES</a></li>
					<li><a href="school.html" class="black2" >  FOR SCHOOLS</a></li>
					<li><a href="about.html"  class="black3" > ABOUT</a></li>
					<li><a href="contact.html" class="black4" > CONTACT US</a></li>
				</ul>
				<script>
					$("span.menu").click(function(){
						$(".top-nav-in ul").slideToggle(500, function(){
						});
					});
			</script>

			</div>
			<div class="clear"> </div>
		</div>
			<!---->
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
		<div class="clear"> </div>
				<p class="footer-class-in">Copyright © 2018 Signs of Mathematics | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>

	</div>
     <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    

    
</body>
</html>