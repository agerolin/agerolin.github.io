<div class="content">
			<div class="single">
				<div class="single-top">
					<script src="../../js/responsiveslides.min.js"></script>
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
					
					<h2>The Galton Board <div style="float:right;"><a href="#finnish"><img src="../../images/iconinfinnish"  alt=""/></a></div></h2><br>
					<p class="para">    <p>The Galton Board, also known as the bean machine or quincunx, is a device invented by <a href="https://en.wikipedia.org/wiki/Francis_Galton" target="new">Sir Francis Galton</a>.<br>
					    <br>
				     In this device, a great number of balls are released from the top to several rows of nails. Bouncing from the nails, and in reality from each other also, the balls end in some of the pegs below. 
 We next model the trajectory of a single ball.
Each time a ball hits one of the nails, it bounces right or left with equal probability <br><br></p>
                      <div align="center"> $p_{left}=q_{right}=1/2$.</div><br><p> 
The ball makes this bouncing on every row of nails and there are in total </p>$N$<p> of those rows. Each ball crosses the bottom row hitting the </p>$n$-th<p> peg from the left (where </p>$0\leq n \leq N$<p>) if and only if it has taken exactly </p>$n$<p> right bounces and </p>$N-n$<p> left bounces. <br>
					    <br>
					    Every path has the same probability </p>$1/2^N$<p>, but there are more paths leading to central part of the machine than to the sides. There are exactly </p>$\binom{N}{n}$ <p> paths to the </p>$n \text{th}$<p> peg, so the ball ends to that peg with probability<br>
				      </p>
                      <div align="center"><br>
                        $P(n|N) = \binom{N}{n} p_{left}^n q_{right}^{N-n} = \binom{N}{n} 2^{-N}$<br>
                        <br>
                      </div>
                      <p>When </p>$N$<p> is big enough, the distribution of balls has a Gaussian shape (above). This is precisely formulated by the central limit theorem, which was among the first investigated by a Finnish mathematician <a href="https://en.wikipedia.org/wiki/Jarl_Waldemar_Lindeberg" target="new">Jarl Waldemar Lindeberg</a>. <br>
                        <br>
                        This machine shows a beautiful feature of chaos: although the trajectory of every single 
                        ball is <b>unpredictable</b> (sensitivity to the initial conditions) the <b>statistics</b> (e.g., frequency)
                        of many of the events <b>are predictable </b> (Gaussian-like shape) and has no sensitivity to the initial conditions.</p><br><br><br>
			
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
					<h3>Follow-up</h3>
                    <br>
						<ul class="archive-grid">
						  <li><i class="fa fa-youtube-play" style="font-size:18px;color:red"></i> Demonstration made by <a href="https://www.youtube.com/watch?v=9xUBhhM4vbM" target="new"> IFA Galton Board: from order to Chaos </a></li>
							<li><i class="fa fa-youtube-play" style="font-size:18px;color:red"></i>   Theory about the Central Limit Theorem  on <a href="https://www.khanacademy.org/math/ap-statistics/sampling-distribution-ap/sampling-distribution-mean/v/central-limit-theorem" target="new"> Khan Academy</a></li>
							<li><i class="fa fa-wikipedia-w" style="font-size:18px"></i> Wikipedia Biography <a href="https://en.wikipedia.org/wiki/Francis_Galton" target="new"> Sir Francis Galton </a></li>

					  </ul>
				  </div>
            <br>
                   					<div class="tags">
					<h3>Related to</h3>
						<ul class="tag">
							<li><a href="ellipticalbilliard.html">Elliptical billiard</a></li>
							<li><a href="magneticpendulum.html">Magnetic Pendulum</a></li>
						</ul>
					</div>
            
				</div>
				<div class="clear"> </div>
			</div>
		</div>
