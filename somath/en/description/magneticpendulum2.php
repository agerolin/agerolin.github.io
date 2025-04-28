	<div class="content">
			<div class="single">
				<div class="single-top">
					<script src="../js/responsiveslides.min.js"></script>
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
					<div class="slider">
						<div class="callbacks_container">
						  <ul class="rslides" id="slider4">
							<li>
							  <img src="../images/w1.jpg" alt="">
							  
							</li>
							<li>
							  <img src="../images/w2.jpg" alt="">
								
							</li>
							<li>
							  <img src="../images/w3.jpg" alt="">
							  
							</li>
							<li>
							  <img src="../images/w4.jpg" alt="">
							  
							</li>
						  </ul>
					  </div>
					</div>
					<h2>Magnetic Pendulum:<br> 
					  Follow up 
					    <div style="float:right;"><a href="#finnish"><img src="../images/iconinfinnish"  alt=""/></a><br>
					</div></h2>
					<p class="para">    <p>In our Magnetic <a href="https://en.wikipedia.org/wiki/Pendulum_(mathematics)" title="A pendulum is a weight suspended from a pivot so that it can swing freely. When a pendulum is displaced sideways from its resting, equilibrium position, it is subject to a restoring force due to gravity that will accelerate it back toward the equilibrium position." target="_new">pendulum</a> a metallic ball X is attached on a string, which is fixed on a pivot (top of pendulum base). Additionally to the pendulum the magnets - denoted by R, G and B - are placed on the bottom in such a way they form an equilateral triangle.   <br><br>

If we start the pendulum at various initial positions (out of its equilibrium position), it will swing according to the net force produced by the gravity and the magnetic attraction.  <br><br>

Due to the friction and the magnetic force, pendulum will lose steadily its kinetic energy as it swings and the swinging will slow down. The mass of the ball X is designed light enough so that in the end X will converge on vicinity of one of the magnets, i.e., the magnetic force dominates over the gravity. <br><br>

Feel free to play with our magnetic pendulum (or its <a href=#virtualpendulum#> virtual version </a>). You will notice that depending on the initial position that the ball is placed its may end on different magnets. In fact, unless we start in immediate vicinity of one of the magnets, the tiniest change of the initial position of the pendulum can cause the ball X to take a totally different path and end on top of a different magnet. <br><br>

We are interested in the following <b>question</b>: <br>

<em>Given an initial position for the ball, can one predicts on which magnets its going to end up?</em><br><br>

If you make more experiments and observe them more carefully, you get the intuition that we understand and predict the movement of the pendulum in the next few seconds the ball is left from its initial position, but it can be very hard to predicted the forthcoming trajectory - and even! - to guess on which magnets R, G or B the ball may end up. <br><Br>

Click <a href="magneticpendulumfollow.html"> here </a> if you are curious and want to know more!
<br><br></p>
				  <h3 id="virtualpendulum"> Virtual Pendulum </h3>

<p> In the simulation below, the pendulum is pictured from above. Using the mouse you can choose a starting position on the pendulum, and the simulation will show the path the pendulum takes from there. For every pixel of the simulation, the colour of the pixel indicates at which magnet the pendulum will stop. The brightness of the colour indicates the length of the corresponding path: the darker the pixel, the longer will be the path.</p><br><br><br><br>
			
			
            	<div class="tags">
					<h3>Related to</h3>
						<ul class="tag">
								<li><a href="magneticpendulumfollow.html">Magnetic Pendulum: follow-up</a></li>
                            <li><a href="ellipticalbilliard.html">Elliptical billiard</a></li>
						</ul>
					</div>
					
					<div class="archive">
					<h3>Follow-up</h3>
                    <br>
						<ul class="archive-grid">
						  <li><i class="fa fa-file-text-o" style="font-size:18px;color:red"></i> More about the physics of the Magnetic Pendulum and how to code the above Virtual Pendulm can be find in<a href="http://beltoforion.de/article.php?a=magnetic_pendulum" target="new"> beltoforion.de: Understanding the world through coding</a></li>
							<li><i class="fa fa-youtube-play" style="font-size:18px;color:red"></i> Very interesting video on experiments and computations on Magnetic Pendulum<a href="https://www.youtube.com/watch?v=xHux2AIM0a4" target="new"> Pendulum Interacting with 3 Magnets</a></li>

					  </ul>
				  </div>
            
				<div class="top-single">
				
				<div class="clear"> </div>
			</div>
				</div>
				<div class="single-in">
                    <div class="info">
                   <div style="float:left;"><img src="../images/flagfin.png"></div> 
					<div style="float:left;"><h2 id="finnish"> &nbsp; Galtonin quincunx</h2></div>
                    
                    <p></p><br><br><br><br>
                    
                    
                    
					<p class="para">Galtonin quincunx, also known as the bean machine or quincunx, is a device invented by <a href="https://en.wikipedia.org/wiki/Francis_Galton" target="new">Sir Francis Galton</a>. Aina pallon osuessa naulaan se pomppaa oikealle tai vasemmalle samalla todennäköisyydellä</p>
                    <div align="center"><br> $p_{vasen}=q_{oikea}=1/2$.<p>
                    </div><br> Tämä tapahtuu jokaisella naularivillä, joita on yhteensä </p>$N$<p> kappaletta. Pallo päätyy lopulta kouruun numero </p>$n$<p> vasemmalta laskien (missä </p>$0\leq n \leq N$<p>) täsmälleen siinä tapauksessa, että se on pomppinut yhteensä </p>$n$<p> kertaa oikealle. Kunkin polun todennäköisyys on sama </p>$1/2N$<p>, mutta keskelle johtaa useampi polku kuin laidoille. Kouruun </p>$n$<p> johtaa polkua, joten todennäköisyys päätyä sinne on
					    <br>
                      <div align="center"><br>
                        $P(n|N) = \binom{N}{n} p_{vasen}^n q_{oikea}^{N-n} = \binom{N}{n} 2^{-N}$<br>
                        <br>
                      </div>
                      <p>Kun </p>$N$<p> on riittävän suuri, saatu jakauma muistuttaa Gaussin käyrää. Täsmällisesti tämän kertoo keskeinen raja-arvolause, jota ensimmäisten joukossa tutki suomalainen matemaatikko <a href="https://en.wikipedia.org/wiki/Jarl_Waldemar_Lindeberg" target="new">Jarl Waldemar Lindeberg</a>. <br>
                        <br>
                        <p>Galtonin quincunx ilmentää kaaosta eli sekasortoa: vaikka yksittäisen pallon rataa ei voida ennustaa (rata on herkkä alkuarvoille), niin tapahtumien tilastolliset ominaisuudet ovat ennustettavissa, janämä ominaisuudet eivät ole lainkaan herkkiä alkuarvoille: laite tuottaa suurella varmuudella Gaussin käyrää muistuttavan jakauman.</p>   
                    
                    
                    
                    
					</div>
					<div class="tags">
					<h3>Related to</h3>
						<ul class="tag">
							<li><a href="#">Elliptic Billard</a></li>
							<li><a href="#">Magnetic Pendulum</a></li>
						</ul>
					</div>
					
					<div class="archive">
					<h3>Follow-up</h3>
						<ul class="archive-grid">
						  <li>1. IFA Galton Board: from order to Chaos. <a href="https://www.youtube.com/watch?v=9xUBhhM4vbM" target="new"><i class="fa fa-youtube-play" style="font-size:18px;color:red"></i> Youtube video</a></li>
							<li>2. Central Limit Theorem <a href="https://www.khanacademy.org/math/ap-statistics/sampling-distribution-ap/sampling-distribution-mean/v/central-limit-theorem" target="new"><i class="fa fa-youtube-play" style="font-size:18px;color:red"></i> Khan Academy</a></li>
							<li>3. Sir Francis Galton <a href="https://en.wikipedia.org/wiki/Francis_Galton" target="new"><i class="fa fa-wikipedia-w" style="font-size:18px"></i> Wikipedia</a></li>

					  </ul>
				  </div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>