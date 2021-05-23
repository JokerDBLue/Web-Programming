<?php 
	include_once 'header.php';
?>
			<section id="stirileDeAcuma">
				<h1><i class="fas fa-coffee"></i>Ultimele sitri</h1>
				<!-- Slideshow container -->
				<div class="slideshow-container">
					<!-- Pot folosi o lista pentru a imita face totul mai adaptabil -->
					<!-- Full-width images with number and caption text -->
					<div class="mySlides fade">
						<img src="images/space-kid.jpg" style="width:100%">
					</div>

					<div class="mySlides fade">
						<img src="images/sunflower.jpg" style="width:100%">
					</div>

					<div class="mySlides fade">
						<img src="images/imagine.jpg" style="width:100%">
					</div>

					<div class="mySlides fade">
						<video width="100%" controls>
							<source src="images/bunica.mp4">
						</video>
					</div>

					<!-- Next and previous buttons -->
					<a id="prev" class="prev">&#10094;</a>
					<a id="next" class="next">&#10095;</a>
				</div>
				<br>

				<!-- Optiuni pentru slider -->
				<label for="sec"> După câte secunde se face schimbarea</label>
				<select name="seconds" id="sec">
					<option value="2">2</option>
					<option value="3" selected>3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				<label for="nrImg"> Câte imagini se află în slideshow</label>
				<select name="nrImagini" id="nrImg">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<section id="articolele">
					<?php
						$sql = "SELECT * FROM articol LIMIT 1";
						require_once 'dbh.inc.php';
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0){
							while ($row = mysqli_fetch_assoc($result)){
								echo "<article>";
								echo "<h2><a href='articol.php'>";
								echo $row["titlu"];
								echo "</a></h2>";
								if (!is_null($row['imagine'])){
									echo "<figure>";
									echo "<img src=";
									echo $row["imagine"];
									echo " alt='imagineRep' width='200' height='150' title='imagine'>";
									echo "<figcaption>Fig.1 - imagine reprezentativa</figcaption>";
									echo "</figure>";
								}
								echo "<p>";
								echo $row["continut"];
								echo "</p>";
								echo "</article>";
							}
						}
						else {
							echo "<p>Nu exista articole</p>";
						}
					?>
				</section>
				<button>Mai multe</button>
			</section>
		</main>
		<footer>
			<p class="footerP">
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.scs.ubbcluj.ro%2F%7Elmar1989%2Flab2%2Farticol.html" target="_blank">
				Verifica pagina
				</a>
			</p>
			<p class="footerP">
				<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.scs.ubbcluj.ro%2F%7Elmar1989%2Flab2%2FmyStyle.css&profile=css3svg&usermedium=all&warning=1&vextwarning=">
					<img style="border:0;width:88px;height:20px"
						src="http://jigsaw.w3.org/css-validator/images/vcss"
						alt="Valid CSS!" />
				</a>
			</p>
			<p class="footerP">
				<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.scs.ubbcluj.ro%2F%7Elmar1989%2Flab2%2FmyStyle.css&profile=css3svg&usermedium=all&warning=1&vextwarning=">
					<img style="border:0;width:88px;height:20px"
						src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
						alt="Valid CSS!" />
				</a>
			</p>
		</footer>
		<script src="sliderScript.js"></script>
		<script src="loadMore.js"></script>
	</body>
</html>