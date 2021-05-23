<?php 
	include_once 'header.php';
?>
			<section id="articol">
				<h1><i class="fas fa-coffee"></i>Articolul apasat</h1>
				<article>
					<h2><span style="color:red">Copil pierdut in spatiu</span></h2>
					<figure>
						<img src="images/space-kid.jpg" alt="Copil in spatiu" width="148" height="200" title="Logo pentru site">
						<figcaption>Fig.1 - Copil in spatiu.</figcaption>
					</figure>
					<p class="textArticol">
						Un copil care a incercat sa zboare cu o racheta a ajuns in spatiu. E incredibil! E cutrmurator!
						Nimeni nu se astepta la asa ceva!
					</p>
					<aside>
					  <h4>Starea copilului</h4>
					  <p>Copilul e ok.</p>
					</aside>
				</article>
				<table>
					<tr>
						<th colspan="3">Poze cu spatiu</th>
					</tr>
					<tr>
						<td>
							<div class="containerImage">
								<img src="images/space-kid.jpg" alt="Copil" class="tableImage" width="200" height="200">
								<div class="middle">
									Copil in spatiu
								</div>
							</div>
						</td>
						<td>
							<div class="containerImage">
								<img src="images/rocket.jpg" alt="Racheta" class="tableImage" width="200" height="200">
								<div class="middle">
									Naveta spatiala
								</div>
							</div>
						</td>
						<td>
							<div class="containerImage">
								<img src="images/spaceCoffee.jpg" alt="Cafea" class="tableImage" width="200" height="200">
								<div class="middle">
									Cafea
								</div>
							</div>
						</td>
					</tr>
				</table>
				<br><br>
				<ol id="myList">
					<li class="box">
					<div>Cellular automata</div><br>
					<a href="https://en.wikipedia.org/wiki/Cellular_automaton">Read more</a>
					</li>
					<li class="box">
					<div>Neural networks</div><br>
					<a href="https://en.wikipedia.org/wiki/Neural_network">Read more</a>
					</li>
					<li class="box">
					<div>Conway's Game of Life</div><br>
					<a href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life">Read more</a>
					</li>
					<li class="box">
					<div>Artificial life</div><br>
					<a href="https://en.wikipedia.org/wiki/Artificial_life">Read more</a>
					</li>
					<li class="box">
					<div>PHP</div><br>
					<a href="https://en.wikipedia.org/wiki/PHP">Read more</a>
					</li>
				</ol>
				<button type="button" onclick="before()">Precedent</button>
				<button type="button" onclick="next()">Următorul</button>
			</section>
			<section id="comments">
				<h4>Sectia de comentarii</h4>
				<details>
				  <summary>Comentarii</summary>
				  <p>Ce copil nebun</p>
				  <p>Ce copil destept</p>
				</details>
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
		<script src="scriptList.js"></script>
	</body>
</html>