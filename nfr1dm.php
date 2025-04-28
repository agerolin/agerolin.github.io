
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
				"tooltext": "Paola Gori-Giorgi (Amsterdam)<br> Klaas Giesbertz<br> Timothy J. Daas <br> Stefan Vuckovic",
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
                "tooltext": "Giuseppe Buttazzo (Pisa)<br> Simone Di Marino (Genova)<br> Anna Kausamo (Firenze)<br> Bozhidar Velichkov (Pisa)<br> Stefan Vuckovic (Lecce/Amsterdam)",
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
                "tooltext": "Hilke Bahmann (Wuppertal)<br> Guido Montúfar (LA / Leipzig)<br> Gero Friesecke (Munich)<br> Lorenzo Portinale (Bonn)<br> Michael Seidl (Regensburg)",
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
			<span class="title">Ottawa-Queen's-Guelph-McMaster Research Network</span>
			<span class="tagline">at the interface of mathematics, chemistry, quantum physics, scientific computing and artificial intelligence</span>
		</h1>
	</div>
<!---
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
			
			</div>			
	</div>	
--->

	</nav>
</header>

<main id="main">

  <div class="container">

		<div class="row topspace">
			

			
			
			<!-- Article main content -->
			<article class="col-sm-14 maincontent">
				<h3>NFRFE: OT in RDMFT</h3>
						<p class="subtitle">Optimal Transport (OT) methods in Reduced Density Matrix Functional Theory (RDMFT)</p>
<p> <img src="assets/images/nfrf-logo.jpeg" alt="" width="301" height="169" align="center"><img src="assets/images/mcmaster.jpeg" alt="" width="174" height="102"/><img src="assets/images/guelph.jpeg" alt="" width="124" height="132"/><img src="assets/images/queens.png" alt="" width="165" height="129"/><img src="assets/images/uottawaredlogo.png" alt="" width="135" height="135" align="center">
                           <!-- <a href="https://cordis.europa.eu/project/id/795942/en" target="_blank">CORDIS OTmeetsDFT</a> | <a href="https://www.quantummatter.eu/" target="_blank">Quantum Matter in Chemistry and Physics</a>| <a href="https://science.vu.nl/en/news-events/news/2018/jan-mrt/two-marie-curie-fellowships-for-interdisciplinary-research-in-theoretical-chemistry.aspx" target="_blank">VU Press Release</a></p> -->
<header class="page-header">
			
</header>
                
 <p>The Ottawa-Queen's-Guelph-McMaster (OQGM) research network develop a novel multidisciplinary and integrated approach to address the problem of strong correlation in Chemistry and Material Sciences and aims to design new tools that are computationally efficient and easy enough for nonspecialists to use to guide their research and enrich their understanding. <br> <br>
	 
Our research lies at the boundary between mathematics, physics, chemistry, machine-learning,
and software design/deployment. Transcending boundaries between fields, in particular the physical, mathematical and computational aspects of chemistry and material sciences, is key for the
development of scalable, rigorous and efficient algorithms.
 </p>  
	
					
							<p>This project receives funding from the New Frontiers in Research Fund (NFRF) - Exploration (Reference Number <span data-markjs="true" data-ogac="" data-ogab="" data-ogsc="" data-ogsb="">NFRFE</span>-2021-00798).</p>
				
				
				        <!-- Team-->
<header class="page-header">
			<h1 class="page-title">Research Team</h1>
</header>
				
                <div class="row">
					<div class="col-lg-3">
                      <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/images/team/paul.jpg" alt="..." />
                        <h4>Paul Ayers</h4>
                        <p class="text-muted">McMaster, co-PI<br>
                          Chemistry &amp; Algorithms</p>
                      </div>
                    </div>
					<div class="col-lg-3">
                        <div class="team-member">
                            <div class="timeline-image">
							<img class="mx-auto rounded-circle" src="assets/images/team/augusto.jpg" alt="..." />
                            <h4>Augusto Gerolin</h4>
                            <p class="text-muted">uOttawa, PI<br> 
                          Mathematics &amp; Chemistry</p>
							</div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/images/team/farnaz.jpg" alt="..." />
                            <h4>Farnaz Heidar-Zadeh</h4>
                          <p class="text-muted">Queen's, PI<br> 
                          Chemistry &amp; AI</p>
                        </div>
                    </div>
					<div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/images/team/anna.jpg" alt="..." />
                            <h4>Anna Kausamo</h4>
                          <p class="text-muted">Florence (Italy), Collaborator <br>
                            Mathematics</p>
                      </div>
                    </div> 
				</div>
				 <div class="row">
                   
					 <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/images/team/david.jpg" alt="..." />
                            <h4>David Kribs</h4>
                            <p class="text-muted">Guelph, co-PI<br> 
                            Mathematics of Quantum Information</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/images/team/nakata.jpg" alt="..." />
                            <h4>Muho Nakata</h4>
                            <p class="text-muted">RIKEN (Japan), Collaborator <br> 
                          Computational Chemistry &amp; Numerical Linear Algebra</p>
                      </div>
                    </div>
					 <div class="col-lg-3">
                        <div class="team-member">
                          <div class="timeline-image">
							<img class="mx-auto rounded-circle" src="assets/images/team/kasia.jpg" alt="..." />
                            <h4>Kasia Pernal</h4>
                            <p class="text-muted">Lödz (Poland), Collaborator<br>
                          Chemistry &amp; Quantum Physics</p>
						</div>
                        </div>
                    </div>
                    
                                <div class="col-lg-3">
                            <div class="team-member">
                            <div class="timeline-image">
                            <img class="mx-auto rounded-circle" src="assets/images/team/emanuele.jpg" alt="..." />
                            <h5>Emanuele Caputo</h5>
                          <p class="text-muted">Postdoctoral Researcher<br>
 Mathematics </p>
                        </div>
                        </div>
                    </div>
                 
                    </div>
                    
                                 <div class="row">
                    
                    					<div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/images/team/dima.jpg" alt="..." />
                            <h4>Dmitry Evdokimov</h4>
                            <p class="text-muted">PhD student in Chemistry<br> 
                            AI &amp; Chemistry  </p>
                        </div>
                    </div> 
                    
                      <div class="col-lg-3">
                        <div class="team-member">
                        <div class="timeline-image">
                            <img class="mx-auto rounded-circle" src="assets/images/team/monina.jpg" alt="..." />
                        <h4>Nataliia Monina</h4>
                        <p class="text-muted">PhD student <br> 
                          Math &amp; Quantum Chemistry</p>
                        </div>
                    </div>
</div> 


				<div class="col-lg-3">
                  <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/images/team/pavlo.jpg" alt="..." />
                    <h4>Pavlo Pelikh</h4>
                    <p class="text-muted">PhD student&nbsp;&nbsp; <br> 
                      OT &amp; Machine Learning</p>
                    </div>
                    </div>
                    
                            <div class="col-lg-3">
                  <div class="team-member">
<div class="timeline-image">
<img class="mx-auto rounded-circle" src="assets/images/team/Zhiyi.jpg" alt="..." />
                    <h4>Zhiyi Lin</h4>
                    <p class="text-muted">MSc student<br> 
                      Mathematics</p>
                    </div>
                    </div>
					</div>
                    
                </div>
                
                
                
				
					
				
<header class="page-header">
			<h1 class="page-title">Open Positions</h1>
</header>
                
 <p>We are looking for talented candidates to join our research team, including: <br><br>
	 
	 -- One <font color="#2c0070"> PhD student in Mathematics</font>: potential candidates are expected to have experience or interest in conducting research on Calculus of Variations, Optimization, Mathematical Physics, Numerical Linear Algebra and/or Optimal Transport.<br>
<br>

	 -- One <font color="#2c0070">PhD student in Physics/Engineering</font>: potential candidates must have a strong background in quantum mechanics and/or scientific computing. She/he should be motivated to learn state-of-art methods in computational chemistry and to develop deep learning methods for quantum chemistry.<br><br>

	 -- One <font color="#2c0070">Postdoctoral Researcher in Computational Chemistry or AI</font>: potential candidates are expected hold a PhD in Chemistry, Physics or Computer Sciences, have interest in developing AI methods for Chemistry, and a strong background in Computational Chemistry and/or Deep Learning.  <br><br>

				
 Candidates are invited to apply by email via the address <a href="mailto:CRCAIMathChe@uottawa.ca">CRCAIMathChe@uottawa.ca</a> with subject<b> “PhD Math OT-RDMFT 2023”</b>, <b> “PhD Phy OT-RDMFT 2023”</b> or <b>“Postdoc OT-RDMFT 2023”</b>. The application package should include the following documents as attachment in a single pdf file:<br>
					 <br>
					 1) Cover Letter;<br>
					 2) <b>CV</b> with list of publications;<br>
					 3) Postdoc position:<b> Research statement</b> on current and planned research (max 5 pages);<br>
	 				 3') PhD position: <b>Transcript of records</b> and a brief description of research interest;<br>
					 4) <b>A list of at most three referees</b> who are willing to write a letter of recommendation.<br><br> 
						
					 Selected candidates will be requested to have their referees send a letter of recommendation directly to the search committee, and will be invited for an online interview. Applications will be evaluated starting from <b>November 15th</b>. The position will remain open until the appropriate candidate is hired.<br><br>
					
					While in Canada, the young researchers will perform a highly collaborative and interdisciplinary research, co-supervised by the entire research team. The PhD students and postdocs are expected to travel during the year between Ottawa, Queen's, McMaster and Guelph to attend the events and work together with the PIs and co-PIs. <br><br>
						 
			  </p>
				
				
<h1 class="page-title"> Activities </h1>
 <br><br>
              <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/images/ottawacity.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <p class="subtitle">Fall 2022: Kick-off meeting<br></p>
                                </div>
                              <div class="timeline-body">
                                    <font color="#00000"><p class="text-muted">18th-19th August, uOttawa<br><br></font>
								  	Talks by Nataliia Monina, David Kribs, Augusto Gerolin and Farnaz Heidar-Zadeh.<br><br>
								  Dmitry Evdokimov joined our team as a PhD student and will work on computational aspects of Optimal Transport.<br><br>
								  <a href="assets/images/nfrfottawaone.JPG" target="_blank">Meeting picture</a></p>
                                  
</div>&nbsp; </p>
                          </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/images/kingstom.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading" align="left">
                                  <p class="subtitle" align="left">Summer 2023: Tutorials</p>
                                </div>
                                <div class="timeline-body">
                                   <font color="#00000"><p class="text-muted">7th-12nd June<br>Queen's University<br><br></font>
								  	Talks by Valerii Chuiko, Fanch Coudreuse, Nataliia Monina, Dmitry Evdokimov and David Kribs.<br><br>
								  
								  Valerii Chuiko and Nataliia Monina joined the team and will be working next year on computational aspects of Reduced Density Matrix Functional Theory (RDMFT).<br><br>
								  
								  Pavlo Pelikh will also join the team and will be working on Machine Learning methods for RDMFT.<br><br>
								  
								  <a href="assets/images/elbow2023.jpg" target="_blank">Meeting picture</a></p>
                                   
                                   
                                  
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/images/mcmastercity.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                     <p class="subtitle">Summer 2024: Workshop</p>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
									TBA, McMaster University       
                                    </p>
                               
                        </li>
						    <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/images/guelphcity.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading" align="left">
                                  <p class="subtitle" align="left">2024: Final meeting</p>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">TBA, University of Guelph
                                    </p>
                                  
                                </div>
                            </div>
                        </li>
                    </ul>
</div>
    <br>
              <h1 class="page-title"> Publications </h1>
 <br>
		
<p>Augusto Gerolin and Nataliia Monina. Non-commutative Optimal Transport for semi-definite positive matrices. Submitted (2023).</p>
    
  
   
            
  </article>
			<!-- /Article -->
            
            
	</div>
	</div>	<!-- /container -->
	
</main>
<footer id="footer" class="topspace">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<!-- <h3 class="widget-title">Contact</h3>-->
						<div class="widget-body">
			<!--		<p>Department of Chemistry and Biomolecular Sciences<br>
				Department of Mathematics and Statistics<br>
				STEM building, Room 357 <br>
		        Faculty of Sciences <br>
				University of Ottawa<br>
                150 Louis-Pasteur Pvt <br>
				Ottawa, ON, Canada K1N 6N5<br>-->
				</div>
		
			</div>

			<div class="col-md-3 widget">
				<!-- <h3 class="widget-title">Follow me</h3>-->
				<div class="widget-body">
			<!--		<p class="follow-me-icons">
						<a href=""><i class="fa fa-twitter fa-2"></i></a>
						<a href=""><i class="fa fa-dribbble fa-2"></i></a>
						<a href=""><i class="fa fa-github fa-2"></i></a> -->
					</p>
				</div>
			</div>

		  <div class="col-md-5 widget">
			 	<!-- <div class="widget-body"><span class="entry-content"><a href=""><font color="#000000"><img src="assets/images/uottawa.png" alt="" width="320" height="86"  align="center"/></font></a></span></div>-->
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
