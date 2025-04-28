<?


?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERC GeoMeG: Geometry of Metric Groups - PI: Enrico Le Donne</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ERC GeoMeG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#introduction">Introduction</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#people">People</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#seminars">Seminars</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#papers">Papers</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#events">Events</a>
                    </li>
                                        <li>
                        <a class="page-scroll" href="#openpositions">Open Positions</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">&nbsp;</h1>

            </div>
        </div>
    </header>

    <section class="bg-primary" id="introduction">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">GeoMeG: Description</h2>
                    <hr class="light">
                    <p class="text-faded">
                  <p><br>
                      <br>
                  <div align=left>
                   The general goal of the project is to study Lie groups equipped with arbitrary distance functions and to develop an adapted geometric measure theory in the non-Riemannian settings. <br>
                   <br>
                   The main focus is subRiemannian geometry, together with implications to control systems and nilpotent groups. SubRiemannian spaces, and especially Carnot groups, appear in various areas of mathematics, such as control theory, harmonic and complex analysis, subelliptic PDE's and geometric group theory. <br>
                   <br>
                   The members of the team master methods coming from geometric measure theory, geometric analysis, and group theory; in particular, analysis on metric spaces and Lie group theory.<br>
                   <br>
<br>
                   <br>
                    
                  </div>
                  <p class="text-faded"> | Grant Agreement <a href="https://www.jyu.fi/en/news/archive/2017/03/tiedote-2017-03-07-12-51-50-665206" target="new">| University of Jyvskäylä Press Release |</a></p>
                </div>



            </div>
        </div>
    </section>

    <section id="people">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">People</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-university text-primary sr-icons"></i>
                        <h3>Principal Investigator</h3>
                        <p class="text-muted">Enrico Le Donne<br>
                          <img src="mail.png" width="249" height="25"  alt=""/><br>
                        <a href="https://sites.google.com/site/enricoledonne/" target="new">| Personal website | </a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-group text-primary sr-icons"></i>
                        <h3>Post-Docs</h3>
                        <p class="text-muted">
                          <?php    
$i =0;
$file="postdocs.txt";
$linecount = 0;

$handle = fopen($file, "r");

while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

//	while(%i <= $col)
		
		// ORDERING THE LIST BY FAMILY NAME
		$lines = file($file); //file in to an array
		$test = $lines[1];
		$array = explode('|', $test, 2);
		$newfile = array($array[1] . " | " . $array[0]);
		
		for ($i=1; $i<=$linecount; $i++) {
		
		$array = explode('|', $lines[$i], 2);
		array_push($newfile, $array[1] . " | " . $array[0]);

		}
			
		sort($newfile);
		

		for ($i = 2; $i<=$linecount; $i++) {
			$array = explode('|', $newfile[$i], 2);
			echo $array[1]. " " . $array[0];
			echo "<br>";
		}
?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box">
                        <i class="fa fa-4x fa-graduation-cap text-primary sr-icons"></i>
                    <h3>Ph.D. Students</h3>
                      <p class="text-muted">
					  
<?php    
$i =0;
$file="phdstudents.txt";
$linecount = 0;

$handle = fopen($file, "r");

while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

//	while(%i <= $col)
		
		// ORDERING THE LIST BY FAMILY NAME
		$lines = file($file); //file in to an array
		$test = $lines[1];
		$array = explode('|', $test, 2);
		$newfile = array($array[1] . " | " . $array[0]);
		
		for ($i=1; $i<=$linecount; $i++) {
		
		$array = explode('|', $lines[$i], 2);
		array_push($newfile, $array[1] . " | " . $array[0]);

		}
			
		sort($newfile);
		

		for ($i = 2; $i<=$linecount; $i++) {
			$array = explode('|', $newfile[$i], 2);
			echo $array[1]. " " . $array[0];
			echo "<br>";
		}
?><br>
                        <br>
                      </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-coffee text-primary sr-icons"></i>
                        <h3>Scientific Collaborators and Experts in the Field</h3>
                        <p class="text-muted">
                        <a href="http://jyu.fi/geomeg/sfcol.php" target="_blank"> See list</a>



                       
                          <br>
                      </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
                <div class="col-lg-4 col-sm-6">
                    <a href="http://www.jyvaskyla.fi/international" target="new" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">About</div>
                                <div class="project-name">Jyväskylä</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="https://www.jyu.fi/en/research" target="new" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    research aT THE</div>
                                <div class="project-name">
                                    University of Jyväskylä
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="https://www.jyu.fi/maths/en" target="new" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"> THe Department of </div>
                                <div class="project-name">Mathematics and Statistics</div>
                            </div>
                        </div>
                    </a>
                </div>
      </div>
        </div>
    </section>

    <section id="seminars">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Jyväskylä Geometry Seminar</h2>
                    <hr class="primary">
                    <p>The Jyväskylä Geometry seminar is on Mondays afternoons <br>
                      in the <a href="https://www.jyu.fi/maths/en" target="new" rel="nofollow">Department of Mathematics and Statistics</a>.<br>
                    The meeting is usually from 14.15 to 16.00 in room MaD 380. </p>
                    <p>Please, check in advance the calendar below.<br>
                      <br>
                    </p>
                    <h3 class="section-heading">Fall 2017</h3>
                    <hr class="primary">
                  <br>
                  
                  
<?php      


$servername = "mysql4.cc.jyu.fi";
$username = "geomeg";
$password = "qSZ1UaeVTWuh5w1g";
$dbname = "geomeg";
$i = 0;

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL I: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Attempt select query execution
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed WW3: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `Seminars` ORDER BY `Seminars`.`date` ASC";
$result = mysqli_query($conn, $sql);

$i =0;

// Create connection

      
 // Check connection
if(! $conn){
    die("ERROR: Could not connect. " . mysql_error());
}	


	
if (mysqli_num_rows($result) > 0) {				
					
   while($row = mysqli_fetch_assoc($result) and $i <= 5) {
   
   if ($i%2 == 0) {
   		$bgcolor = '#FFFFFF';
   } else {
		$bgcolor = '#FFDCB4';  
   }
   	$i++;   		
               
	$date = date_format(date_create($row["date"]),"j/F/Y");
	
	  
echo"<table width='100%' border='0' bgcolor=$bgcolor cellspacing='0' cellpadding='0'>
                    <tr>
                      <td bgcolor=$bgcolor></td>
                      <td height='10' bgcolor=$bgcolor></td>
                    </tr>
					  <tr>
                      <td bgcolor=$bgcolor width='25%'>&nbsp;" . $date . " </td>
                      <td bgcolor=$bgcolor width='81%'><div align='left'><strong>" . $row["firstname"]. " " . $row["lastname"]. "</strong></div></td>
                    </tr>
                    <tr>
                      <td bgcolor=$bgcolor>&nbsp; (" . $row["location"]. ")</td>
                      <td bgcolor=$bgcolor>" . $row["title"]. "  BOTTONE  </td>
                    </tr>
                    <tr>
                      <td bgcolor=$bgcolor height='5' colspan='2'></td>
                    </tr>
                    <tr>
                      <td height='1' colspan='2' bgcolor='#666666'></td>
                    </tr>
                  </table>";
	

	 }
              
	} else {
	   
	
	
	}


mysql_close($conn);   
?>
	

                  <p><br>
                    <br>
                    See all future Seminars<a href="https://sites.google.com/site/enricoledonne/jgs" target="new"> | Past Seminars (archive) |</a><a href="https://www.jyu.fi/maths/en/research/analysis-seminar" target="new"> Analysis Seminar |</a><br>
                  </p>
              </div>
</div>
    </section>

<section class="bg-primary" id="papers">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Recent Papers</h2>
                  <hr class="primary">

<?php      


$servername = "mysql4.cc.jyu.fi";
$username = "geomeg";
$password = "qSZ1UaeVTWuh5w1g";
$dbname = "geomeg";
$i = 0;

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL I: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Attempt select query execution
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed WW3: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `Papers` ORDER BY `Papers`.`year` DESC, `Papers`.`id` DESC";
$result = mysqli_query($conn, $sql);


// Create connection

      
 // Check connection
if(! $conn){
    die("ERROR: Could not connect. " . mysql_error());
}	

	
	if (mysqli_num_rows($result) > 0 and mysqli_num_rows($result) < 6) {				
					
   while($row = mysqli_fetch_assoc($result)) {
   
   echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td width='6%'><div class=w3-padding w3-xlarge w3-teal></div></td><td width='96%'><a href=" . $row["link"]. " target='_blank'><i class='fa fa-1x fa-file-text-o text-primary sr-icons'></i></a>  " . $row["authors"]. "&nbsp;<em><span style='color: #777; font-size: 14px'>&nbsp;(" . $row["journal"]. ") </em></span></td></tr><tr><td>&nbsp;</td><td><a href=" . $row["link"]. " target='_blank'><span style='color: rgba(0,0,0,1)'>" . $row["title"]. "</span></a> &nbsp; (". $row["year"]. ")</td></tr></table><br>";
						
   }
   
   echo "<a href='http://jyu.fi/geomeg/papers.php' target='_blank'>| See the complete list of papers |</a>";
               
	} else {
	   
	   	   	echo "<p><br>
                    <span class='text-faded'> In this space will be possible to know about future workshops and conferences <br>
                    related to the ERC GeoMeG project. </span><br>
                    <br>";
   }


mysql_close($conn);   
?>      
                    
            
                    <p class="text-faded">&nbsp; </p>
                    <p class="text-faded"><br>
                    </p>

                </div>
            </div>
        </div>
    </section>

<section id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Future Events</h2>
                    <hr class="primary">
                 

<?php      


$servername = "mysql4.cc.jyu.fi";
$username = "geomeg";
$password = "qSZ1UaeVTWuh5w1g";
$dbname = "geomeg";
$i = 0;

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL I: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Attempt select query execution
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed WW3: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Events WHERE active = 1";
$result = mysqli_query($conn, $sql);

$sqlnoact = "SELECT * FROM Events WHERE active = 0";
$resultnoact = mysqli_query($conn, $sqlnoact);


// Create connection

      
 // Check connection
if(! $conn){
    die("ERROR: Could not connect. " . mysql_error());
}	

	
	if (mysqli_num_rows($result) > 0) {				
					
   while($row = mysqli_fetch_assoc($result)) {
   
   echo "
                  <p><br>
                  " . $row["date"]. " |                  " . $row["location"]. "<br>
                  <span class='table'><span style='font-size: 18px'>" . $row["title"]. "</span><br>
                  <a href=" . $row["link"]. " target='_blank'>| Website |</a><br>
                  <br>
                  </p>";
            
   }
   
	} else {
	   
	   	   	echo "<p><br>
                    <span class='text-faded'> In this space will be possible to know about future workshops and conferences <br>
                    related to the ERC GeoMeG project. </span><br>
                    <br>";
   }
   
   
   
   if (mysqli_num_rows($resultnoact) > 0) {
    
	echo "<table width='90%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td colspan='2'>Past Events</td>
                    </tr>
                    <tr>
                        <td height='1' colspan='2' bgcolor=#999999></td>
                    </tr>
                      <tr>
                        <td></td>
                        <td height='4'></td>
                      </tr>";
					
	
	
	// output data of each row
    while($row = mysqli_fetch_assoc($resultnoact)) {
        
		
		echo " <tr><td width='20%'>" . $row["date"]. "</td>
              <td width='88%'>" . $row["title"]. "</td></tr>";
                    	
	}
		echo"<tr><td>&nbsp;</td><td>&nbsp;</td></tr></table>";

} 


else {
	
}
   
   mysql_close($conn);
?><br>
                </p>
                  <p>&nbsp; </p>
                </div>
</div>
    </section>


    <section class="bg-primary" id="openpositions">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Open Positions</h2>
                  <hr class="primary">
                    <p class="text-faded">We are currently hiring the following positions to work together <br>
                      the PI on topics of <a href="http://jyu.fi/geomeg/#introduction">GeoMeG ERC project</a>.</p>
                    <p class="text-faded"><br>
                    </p>
                  <p class="text-faded">2 Ph.D. studentships (deadline 16th May) <a href="https://www.jyu.fi/science/en/PhD/call-for-admission-to-doctoral-studies" target="new">| Job description at JYU Webiste |</a></p>
					  <p class="text-faded"><em>3 Potsdoc positions (application closed on 9th April)</em><br>
				      </p>
					  <p class="text-faded">&nbsp;</p>
					  <p class="text-faded"><br>
					    For further information, do not hesitate to contact<br>
Prof. Enrico Le Donne <br>
<img src="mail.png" width="249" height="25"  alt=""/><br>
					  </p>

                </div>
            </div>
        </div>
    </section>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
