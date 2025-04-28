
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
	
    
	<title>Augusto Gerolin :: Academic Webpage</title>

	<link rel="shortcut icon" href="assets/images/topicon.png">
	
	<!-- Bootstrap -->
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icon font -->
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/agency.min.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>

<script type="text/javascript" src="fusioncharts/fusioncharts.js"></script>
<script type="text/javascript" src="fusioncharts/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript">
  FusionCharts.ready(function () {
    var airportsMap = new FusionCharts({
        type: 'maps/world',
        renderAt: 'chart-container',
        width: '720',
        height: '480',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "theme": "fint",
                "markerBgColor" : "#363151",
                
                "entityFillColor" : "#f1e8df",
                "entityFillHoverColor" : "#f1e8df",
                "showMarkerLabels": "1",
                "showvalue" : "0",
                "labsepchar" : "<br/>",
                "markerTooltext":"$label",
                "numbersuffix":"M"
                    },
            "markers": {
            "items" : [
            {
                "id":"lon",
                "shapeid": "circle",
				"radius":'4',
                "x": "340.23",
                "y": "125.9",
                "label": "",
                "value": "",
                
                "tooltext": "Johannes Zimmer (Bath)",
               
                "labelpos": "left"
            },
			{
                "id":"ams",
                "shapeid": "circle",
				"radius":'4',
                "x": "355.23",
                "y": "125.9",
                "label": "",
				"tooltext": "Paola Gori-Giorgi (Amsterdam)<br> Klaas Giesbertz<br>",
                "value": "",     
                "labelpos": "top"
            },
            {
                "id": "tor",
                "shapeid": "circle",
				"radius":'4',
                "x": "180.14",
                "y": "137",
                "label": "",
                "value": "",
                "tooltext": "Chris Finlay (Montréal)",
                "labelpos": "bottom"
            },
			{
                "id": "nyc",
                "shapeid": "circle",
				"radius":'4',
                "x": "180.14",
                "y": "160.9",
                "label": "",
                "value": "",
                "tooltext": "Aram Pooladian (New York)",
                "labelpos": "bottom"
            },
			{
                "id": "mer",
                "shapeid": "circle",
				"radius":'4',
                "x": "80.14",
                "y": "160",
                "label": "",
                "value": "",
                "tooltext": "Juri Grossi (Merced)",
                "labelpos": "bottom"
            },	
			{
                "id": "chi",
                "shapeid": "circle",
				"radius":'4',
                "x": "190.14",
                "y": "330",
                "label": "",
                "value": "",
                "tooltext": "Mircea Petrache (Santiago)",
                "labelpos": "bottom"
            },	
			{
                "id": "la",
                "shapeid": "circle",
				"radius":'4',
                "x": "90.14",
                "y": "170",
                "label": "",
                "value": "",
                "tooltext": "Guido Montúfar (LA / Leipzig)",
                "labelpos": "bottom"
            },
            {
                "id": "pis",
                "shapeid": "circle",
				"radius":'4',
                "x": "368.14",
                "y": "156.9",
                "label": "",
                "value": "",
                "tooltext": "Giuseppe Buttazzo (Pisa)<br> Simone Di Marino (Genova)<br> Anna Kausamo (Firenze)<br> Bozhidar Velichkov (Pisa)",
                "labelpos": "bottom"
            },
            {
                "id": "fin",
                "shapeid": "circle",
				"radius":'4',
                "x": "395.23",
                "y": "90.9",
                "label": "",
                "value": "",
                "tooltext": "Anton Mallasto (AI, Helsinki)<br> Tapio Rajala (Jyväskylä)<br> Robert van Leeuwen (Physics, Jyväskylä)<br>",
                "labelpos": "top"
            },
			            
			{
                "id": "jpa",
                "shapeid": "circle",
				"radius":'4',
                "x": "625.23",
                "y": "160.9",
                "label": "",
                "value": "",
                "tooltext": "Ha Quang Minh (AI, Tokyo)",
                "labelpos": "top"
            },
            {
                "id": "par",
                "shapeid": "circle",
				"radius":'4',
                "x": "348.14",
                "y": "134.9",
				  "label": "",
                "value": "",
                "tooltext": "Luca Nenna (Paris)",
                "labelpos": "right"
            },
			  {
                "id": "ger",
                "shapeid": "circle",
				"radius":'4',
                "x": "358.14",
                "y": "138.9",
				  "label": "",
                "value": "",
                "tooltext": "Guido Montúfar (LA / Leipzig)<br> Lorenzo Portinale (Bonn)<br> Michael Seidl (Regensburg)",
                "labelpos": "right"
            },
						            {
                "id": "aus",
                "shapeid": "circle",
				"radius":'4',
                "x": "368.14",
                "y": "145.9",
				  "label": "",
                "value": "",
                "tooltext": "Dario Feliciangeli (Vienna)",
                "labelpos": "right"
            }
			

            ]

                }
            }
    }).render();
});
</script>



<body>


<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<span class="title">Augusto Gerolin</span>
			<span class="tagline">University of Ottawa</span>
		</h1>
	</div>

	<nav class="navbar navbar-default">
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
			<article class="col-sm-14 maincontent">
<header class="page-header">
			<h1 class="page-title">Research interests</h1>
</header>
                
 <p>Calculus of Variations,<br>
 Optimal Transport,<br>
 Gradient Flows in the space of probability measures,<br>
 Numerical methods and approximation,<br>
 Computational Chemistry,<br>
	 	 &emsp13;&emsp13;<i>- Density Functional Theory</i><br>
	 &emsp13;&emsp13;<i>- One-body Reduced Density Matrix Theory</i><br>
 Mathematical Aspects of Machine learning theory<br>
	 &emsp13;&emsp13;<i>- Likelihood-free Variational Inference and Generative Modelling</i><br>
	 &emsp13;&emsp13;<i>- Normalizing flows</i><br>
	 &emsp13;&emsp13;<i>- Generative Adversarial Networks</i><br>
	 &emsp13;&emsp13;<i>- Statistical Learning Theory</i><br>
 </p>  
 <h3> Brief Research Description </h3>
 <br><br>
              <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/images/research/5.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <p class="subtitle">Calculus of Variations</p>
                                </div>
                              <div class="timeline-body">
                                    <p class="text-muted">I am mainly interested in Fundamental theory of multi-marginal optimal transport (transport plans, densities, potentials, existence and regularity of transport maps); Gamma-convergence. Computational realizations of Multi-marginal Optimal Transport (MOT), Convex/Entropic regularization of MOT.<br></p>
                                  
</div>&nbsp; </p>
                          </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/images/research/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading" align="left">
                                  <p class="subtitle" align="left">Computational Chemistry</p>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">The focus of my current research is to extend the accuracy of electronic Density Functional Theory (DFT) to systems in which electronic correlation plays a prominent role. In particular using the SCE formalism in the study of ground state properties of many-electrons system (existence and next-order corrections of SCE DFT) and time-dependent DFT (1d). I am also developing Non-commutative Optimal Transport methods to One-body Reduced Density Matrix (1RDM) functional theory.  
                                    </p>
                                  
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/images/research/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                     <p class="subtitle">Mathematical and Computational Aspects of Machine Learning</p>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
									I am developing tools to improve the understanding of density estimation and generation in GANs, VAES and Normalizing Flows; and developing novel deep learning methods for Computational Chemistry.        
                                    </p>
                               
                        </li>
                    </ul>
</div>
    <br>
              <h3> Collaborators and Mentors </h3>
 <br>
			<article class="post"> 
 <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td colspan="2"><div id="chart-container" align="center">FusionCharts will render here</div></td>
    </tr>
  <tr>
    <td><p> <a href="https://people.dm.unipi.it/buttazzo/" target=_new>Giuseppe Buttazzo</a> (Pisa, Ph.D. advisor)<br> 
    Simone Di Marino (Math, Genoa)<br> 
    Dario Feliciangeli (Math, IST-Austria)<br> 
    <a href="https://cfinlay.github.io/" target=_new>Chris Finlay </a> (AI, McGill &amp; Deep Render)<br><a href="https://www-m7.ma.tum.de/bin/view/Analysis/GeroFriesecke" target=_new>Gero Friesecke </a> (Math/Chemistry, TU Munich)<br> <a href="https://few.vu.nl/~kjgiesbe/" target=_new>Klaas Giesbertz </a> (Chemistry, Amsterdam)<br> Juri Grossi (Chemistry, UC Merced) <br> <a href="https://paolagorigiorgi.org/" target=_new>Paola Gori-Giorgi</a> (Chemistry, Amsterdam)<br> 
    Anna Kausamo (Math, Firenze)<br> 
    <a href="https://sites.google.com/view/antonmallasto/home" target=_new> Anton Mallasto </a> (AI, SILO.AI)<br><a href="https://www.haquangminh.info/" target=_new> Ha Quang Minh </a> (AI, RIKEN-AIP)<br></p></td>
    <td><p><a href="https://personal-homepages.mis.mpg.de/montufar/" target=_new> Guido Montúfar </a> (AI, UCLA & MPI)<br> 
    <a href="https://lucanenna.github.io/" target=_new>Luca Nenna</a> (Math, Paris-Orsay)<br> 
    <a href="https://sites.google.com/site/mircpetrache/home" target=_new>Mircea Petrache</a> (Math, PUC Chile)<br> 
    <a href="https://apooladian.github.io/" target=_new>Aram Pooladian</a> (AI, New York)<br>
    <a href="http://pub.ist.ac.at/~lportina/" target=_new>Lorenzo Portinale</a> (Math, Bonn)<br> 
    <a href="https://users.jyu.fi/~tamaraja/" target=_new>Tapio Rajala</a> (Math, Jyväskylä)<br>  Michael Seidl (Physics, Regensburg)<br>  <a href="https://users.jyu.fi/~roleeuwe/intro.html" target=_new>Robert van Leeuwen</a> (Physics, Jyväskylä)<br> 
    <a href="https://www.velichkov.it/" target=_new>Bozhidar Velichkov</a> (Math, Pisa)<br> 
    <a href="https://www.maths.bath.ac.uk/~jz203/" target=_new>Johannes Zimmer</a>  (Math, Bath).</p></td>
  </tr>
</table>

    
  
   
            
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
