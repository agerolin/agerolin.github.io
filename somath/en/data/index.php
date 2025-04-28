<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Signs of Mathematics | University of Jyväskylä</title>
	
    <!-- Favicons -->
	<link rel="shortcut icon" href="../../images/LogoTop.ico">
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123779687-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123779687-1');
</script>
<!-- jQuery-->
<script src="../../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/styledata.css" rel="stylesheet" type="text/css" media="all" />	
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
				<a href="index.php"><img src="../../images/logo.png" alt=""></a>
			</div>
			<div class="top-nav">
				<ul >
					<li><a href="../index.php" class="blank1">HOME</a></li>
					<?php 
						$link = strip_tags(htmlspecialchars($_GET['l']));
							if($link == "") {
								$link = "main";
							}
                  ?>  
				   
                   <li><a href="../index.php">CHAOS</a></li>
                  
				   
                    <li class='active'><a href="index.php" class="black2" >  MATHS&amp;DATA</a></li>
				</ul>
			</div>
			<ul class="social-in">
				<li><a href="https://www.skr.fi/" target="_blank">	<img src="../images/menu_kultura.png" alt=""></a></li>
                   <li>  <a href="https://www.jyu.fi/" target="_blank">     <img src="../images/menu_jyu.png" alt=""></a></li>
                  <li>  <a href="https://ec.europa.eu/research/mariecurieactions/" target="_blank">      <img src="../images/menu_marie.png" alt=""> </a></li>

            
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
			</a>   <br></p><p></p>
		</div>
		<!---->
		<!---->
		<div class="header-top">
			<div class="logo-in">
				<a href="index.html"><img src="../images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="../images/menu.png" alt=""> </span>
				<ul >
                  <li class="active"><a href="index.html">HOME</a></li>
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

			<?php 
			
			
			include $link . '.php';
			?>

		<div class="clear"> </div>
		<p class="footer-class-in">Copyright © 2018 Signs of Mathematics | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
</body>
</html>