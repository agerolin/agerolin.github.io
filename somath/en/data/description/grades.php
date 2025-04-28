
    
<div class="content">
			<div class="single">
				<div class="single-top">
					<script src="../../../js/responsiveslides.min.js"></script>
					<script>
						$(function () {
						  $("#slider4").responsiveSlides({
							auto: true,
							speed: 500,
							namespace: "callbacks",
								pager: true,
						  });
						});
					</script>
					
					<h2>Gradient Descent 
					  <div style="float:right;"><a href="#finnish"><img src="../../../images/iconinfinnish"  alt=""/></a></div></h2><br>
					<p class="para">    <p>This is a preliminary (testing) pages used for a course.<br><br> Linear regression is perhaps one of the most well known and well understood algorithms in machine learning and statistics. Learning a (simple) linear regression model means estimating the values of the coefficients of an affine function (a line!)<br> </p><br>
    
     <div align="center"> $f(x) = ax + b, a,b\in \mathbb{R}.$</div><br><p> 
     
by means of the data that we have available.<br></p>
					    <br>
                        
<h3> Learning the best line! </h3>
	
<p>Click on the gray region below to provide a data set for our learning program. The program will ajust the line according to the new data will provide.</p> <br><br>
    
<script language="javascript" type="text/javascript" src="../../../js/p5.js"></script>
    <script language="javascript" type="text/javascript" src="../../../js/p5.dom.js"></script>
    <script language="javascript" type="text/javascript" src="linreg.js"></script>

<div id ="canvascontainer"></div>

  <div id="interface">
    <p>learning rate: <input id="lrslider" type="range" min="0" max="0.5" step="0.00001"></input> <span id="lr"></span></p>
  </div>
<br><br>
<h3> How it works? </h3>
					    <br>
   <p>By straightforward computations we can obtain explicitly the coeficients a and b of the best affine function - check it all in the follow up section. <br><br>
   
   However, obtain an analytical solution for our model is very rare in statistics and machine learning. We often needs to design algorthms to compute numerically the solution of our model. For example, if instead of find the best line we are interested in finding best polynomial of degree 3 approximating our data points, no analytical solutions are available.<br>
                        <br>
                        The main mathematical idea used to compute the best curve is the so-called <b> Gradient Descent method</b>.</p><br><br><br>
			
				<div class="top-single">
				
				<div class="clear"> </div>
			</div>
				</div>
				<div class="single-in">
                <div class="slider">
						<div class="callbacks_container">
						  <ul class="rslides" id="slider4">
							<li>
							  <video autoplay muted preload id="myVideo">
  							<source src="../../top/topgalton.mp4" type="video/mp4" poster="../../top/topgalton.png">
 							 <p> Try this page in a modern browser! </p>
							</video>
							  
							</li>
							
						  </ul>
					  </div>
					</div>
                
              <br>
					
                   <div class="archive">
					<h3>Do you know that?</h3>
                    <br>
                    <p>Using concepts studied in the first year Linear Algebra course at the University, you can also studied the problem in dimensions higher than one. In this case we are looking for the best plane (or hyperplane) approximating my data. More generally, the linear regression model can be written (in matrix notation)</p><br><br>
                    
                  <div align="center">$ Y = \beta X + \beta_0, \quad Y,\beta_0\in\mathbb{R}^N, \beta_0\in\mathbb{R}^p $ </div> 
                   <p><br> Now we are dealing with vectors and then we aim to <i>"learn"</i> the coeficients of the Nxp matrix A.	<br>
                    
                    </div>
                    <br>
					<div class="archive">
					<h3>Follow-up</h3>
                    <br>
						<ul class="archive-grid">
							<li><i class="fa fa-youtube-play" style="font-size:18px;color:red"></i>   Solving (simple) Linear Regression <a href="https://www.khanacademy.org/math/statistics-probability/describing-relationships-quantitative-data/more-on-regression/v/squared-error-of-regression-line" target="new"> Khan Academy</a></li>
                            <li><i class="fa fa-youtube-play" style="font-size:18px;color:red"></i>   Linear Regression and Machine Learning <a href="https://www.youtube.com/watch?v=kHwlB_j7Hkc" target="new"> Andrew Ng's course</a></li>
							<li><i class="fa fa-youtube-play" style="font-size:18px;color:red"></i>   Implementation of Linear Regression in python <a href="https://www.geeksforgeeks.org/linear-regression-python-implementation/" target="new"> Geeks for Geeks</a></li>

					  </ul>
				  </div>
            <br>
                   					<div class="tags">
					<h3>Related to</h3>
						<ul class="tag">
							<li><a href="gatlon.html">Galton Board</a></li>
							<li><a href="grades.html">Gradient Descent</a></li>
						</ul>
					</div>
            
				</div>
				<div class="clear"> </div>
			</div>
		</div>
