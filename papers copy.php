<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112073692-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112073692-1');
</script>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>AI and Quantum @uOttawa</title>

	<link rel="shortcut icon" href="assets/images/topicon.png">
	
	<!-- Bootstrap -->
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icon font -->
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body>

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
				<h1 id="logo" class="text-center">
            <span class="title">AI and Quantum</span>
			<span class="tagline">at the interface of Chemistry and Mathematics</span>
		</h1>
	</div>

<link rel="stylesheet" href"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
function sortResults(prop, asc) {
    pk = pk.sort(function(a, b) {
        if (asc) {
            return (a[prop] > b[prop]) ? 1 : ((a[prop] < b[prop]) ? -1 : 0);
        } else {
            return (b[prop] > a[prop]) ? 1 : ((b[prop] < a[prop]) ? -1 : 0);
        }
    });
    
	showResults();
	}

</script>

<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
</script>
<script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

</head>
	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
                    <li><a href="research.php">Research</a></li>
                    <li><a href="teaching.html">Teaching</a></li>
                     <li><a href="papers.php">Papers</a></li>
                    <li><a href="outreach.html">Outreach Sciences</a></li>
                    <li><a href="contact.html">Contact</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">

		<div class="row topspace">
			

			<!-- Article main content -->
			<article class="col-sm-12 maincontent">
<header class="page-header">
			<h1 class="page-title">Publications</h1>
				</header>
                
<?php      
 
   
    $data = file_get_contents ('https://cvgmt.sns.it/api/papers/?authors__firstname=&authors__id=&authors__lastname=Gerolin&authors__user__username=&format=json&keywords__name=&tags__value=&title=&year=');
    $json = json_decode($data, TRUE);
	#$json = rtrim($json, "\0");
	
	$i =0;
	
	
	if((!empty($json['results'][$i]['title']))) {
	
	
	$i =0;
	echo "We would like to warmly thanks the <a href=https://cvgmt.sns.it/credits/ target=_blank>CVGMT Team</a> for the support and for hosting the following papers at <a href=https://cvgmt.sns.it/ target=_blank>CVGMT</a> server.<br><br>";
	
		
	while(!empty($json['results'][$i]['title']))
	{
	

		
		if ($i%2 == 0) {
   			$bgcolor = '#FFFFFF';
   		} else {
			$bgcolor = '#fcebd9';  
   		}

		
		if ($json['results'][$i]['journal'] == "") {
			$journal = ", &nbsp; pre-print";
		} else {
			$journal = ", &nbsp;<font color='#000000'>" . htmlentities($json['results'][$i]['journal'], ENT_QUOTES) . "</font> &nbsp;&nbsp;";
		}
		
	$utf8_ansi2 = array(
    "\u00c0" =>"À",
    "\u00c1" =>"Á",
    "\u00c2" =>"Â",
    "\u00c3" =>"Ã",
    "\u00c4" =>"Ä",
    "\u00c5" =>"Å",
    "\u00c6" =>"Æ",
    "\u00c7" =>"Ç",
    "\u00c8" =>"È",
    "\u00c9" =>"É",
    "\u00ca" =>"Ê",
    "\u00cb" =>"Ë",
    "\u00cc" =>"Ì",
    "\u00cd" =>"Í",
    "\u00ce" =>"Î",
    "\u00cf" =>"Ï",
    "\u00d1" =>"Ñ",
    "\u00d2" =>"Ò",
    "\u00d3" =>"Ó",
    "\u00d4" =>"Ô",
    "\u00d5" =>"Õ",
    "\u00d6" =>"Ö",
    "\u00d8" =>"Ø",
    "\u00d9" =>"Ù",
    "\u00da" =>"Ú",
    "\u00db" =>"Û",
    "\u00dc" =>"Ü",
    "\u00dd" =>"Ý",
    "\u00df" =>"ß",
    "\u00e0" =>"à",
    "\u00e1" =>"á",
    "\u00e2" =>"â",
    "\u00e3" =>"ã",
    "\u00e4" =>"ä",
    "\u00e5" =>"å",
    "\u00e6" =>"æ",
    "\u00e7" =>"ç",
    "\u00e8" =>"è",
    "\u00e9" =>"é",
    "\u00ea" =>"ê",
    "\u00eb" =>"ë",
    "\u00ec" =>"ì",
    "\u00ed" =>"í",
    "\u00ee" =>"î",
    "\u00ef" =>"ï",
    "\u00f0" =>"ð",
    "\u00f1" =>"ñ",
    "\u00f2" =>"ò",
    "\u00f3" =>"ó",
    "\u00f4" =>"ô",
    "\u00f5" =>"õ",
    "\u00f6" =>"ö",
    "\u00f8" =>"ø",
    "\u00f9" =>"ù",
    "\u00fa" =>"ú",
    "\u00fb" =>"û",
    "\u00fc" =>"ü",
    "\u00fd" =>"ý",
    "\u00ff" =>"ÿ");

    
	$title = htmlentities($json['results'][$i]['title'], ENT_QUOTES); 
	$year = htmlentities($json['results'][$i]['year'], ENT_QUOTES); 
	$num = $i+1;
	
	echo "<font color='#2c0070'><b>[" . $num . "]</b>&nbsp;" . $title . " (" . $year . ")</font><br> <i>(with ";
	
	$j=0;
	while($json['results'][$i]['authors'][$j]['lastname'] != "") {
	
	
	
	if($json['results'][$i]['authors'][$j]['lastname'] != "Gerolin") {
	
			 if($j==0) {
			 } else {
			 echo ", ";
			 }
			 
			 	$lastname = htmlentities($json['results'][$i]['authors'][$j]['lastname'], ENT_QUOTES); 
			   $firstname = htmlentities($json['results'][$i]['authors'][$j]['firstname'][0], ENT_QUOTES); 
				 echo "<font color='#606060'>" . $firstname . ". ";
				 echo $lastname . "</font>"; 
	}
	$j++;
	
}
	
	
	 echo ")</i>";
	
	
	echo "" . $journal . " <a href=https://cvgmt.sns.it/paper/" . $json['results'][$i]['id'] . "/ target='_blank'> <i class='fa fa-external-link-square'></i></a> <br><br>";
	
	
	

		$i++;
}

               
	} else {
	   
	   	   	echo "<p><br>
                    <span class='text-faded'> Soon preprints will be available in this space. </span><br>
                    <br>";
   }

?>
            
            	</article>
			<!-- /Article -->
            
            
	</div>
	</div>	<!-- /container -->
	
</main>

<footer id="footer" class="topspace">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
					<p>Department of Chemistry and Biomolecular Sciences<br>
				Department of Mathematics and Statistics<br>
				STEM building, Room 357 <br>
		        Faculty of Sciences <br>
				University of Ottawa<br>
                150 Louis-Pasteur Pvt <br>
				Ottawa, ON, Canada K1N 6N5<br>
				</div>
		
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">Follow me</h3>
				<div class="widget-body">
					<p class="follow-me-icons">
						<a href=""><i class="fa fa-twitter fa-2"></i></a>
						<a href=""><i class="fa fa-dribbble fa-2"></i></a>
						<a href=""><i class="fa fa-github fa-2"></i></a>
					</p>
				</div>
			</div>

		  <div class="col-md-5 widget">
			 	<div class="widget-body"><span class="entry-content"><a href=""><font color="#000000"><img src="assets/images/uottawa.png" alt="" width="320" height="86"  align="center"/></font></a></span></div>
			</div>


		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p></p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2017, Augusto Gerolin<br> 
						Design: <a href="https://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
