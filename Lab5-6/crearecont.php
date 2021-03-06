<?php 
	include_once 'header.php';
	if (isset($_SESSION["idUser"])){
		header('location: ultimeleStiri.php');
		exit();
	}
?>
			<h1>Creare cont</h1>
			<div id="childLeft">
				<img src="images/blog-newsstand.png" alt="News booth" width="600" height="800">
			</div>
			<div id="childRight">
				<form id="autentificare" action="signup.inc.php" method="post">
					<fieldset>
						<legend>Introduceti datele:</legend>
						<i class="fas fa-user"><label>Nume:</label><input id="nume" type="text" name="lastName" placeholder="Introduceti numele" maxlength="20" size="50">
						<span id="1" class="dot"></span>
						</i><br>
						<i class="fas fa-user"><label>Prenume:</label><input id="prenume" type="text" name="firstName" placeholder="Introduceti prenumele" maxlength="30" size="50">
						<span id="2" class="dot"></span>
						</i><br>
						<i class="fas fa-square-root-alt"><label>Parola:</label><input id="parola" type="password" name="password">
						<span id="3" class="dot"></span>
						</i><br>
						<i class="fas fa-address-book"><label for="phone">Enter a phone number:</label></i>
						<input type="tel" id="telefon" name="phone" placeholder="(+40)777 777 777" maxlength="16">
						<span id="4" class="dot"></span>
						<br>
						<small>Format: (+40)777 777 777</small><br>
						<i class="fas fa-address-book"><label>Email:</label><input id="mail" type="email" name="email" placeholder="nume.prenume@adresa.ro" maxlength="30" size="50">
						<span id="5" class="dot"></span>
						</i><br>
						<i class="fas fa-calendar-alt"><label>Data nasterii:</label></i><br>
						<input id="format" type="text" name="dateFormat" value="zz/ll/aaaa">
						<input id="data" type="text" name="date" placeholder="zz/ll/aaaa">
						<span id="6" class="dot"></span>
						<br>
						<label>Tip de utilizator</label>
						<input type="radio" checked name="tipUtilizator" value="0"> Cititor
						<input type="radio" name="tipUtilizator" value="1"> Scriitor
						<input type="radio" name="tipUtilizator" value="2"> Editor
						<br>
						<table id="tabelReguli">
						  <tr>
							<th></th>
							<th>Cititor</th>
							<th>Scriitor</th>
							<th>Editor</th>
						  </tr>
						  <tr>
							<td>Drepturi de a scrie un articol</td>
							<td>NU</td>
							<td>DA</td>
							<td>NU</td>
						  </tr>
						  <tr>
							<td>Dreptul de a manca pizza in timp ce citeste</td>
							<td>DA</td>
							<td>DA</td>
							<td>DA</td>
						  </tr>
						  <tr>
							<td>Dreptul a comenta</td>
							<td>DA</td>
							<td>DA</td>
							<td>DA</td>
						  </tr>
						  <tr>
							<td>Dreptul de a edita</td>
							<td>DA</td>
							<td>DA</td>
							<td>DA</td>
						  </tr>
						  <tr>
							<td>Trebuie aprobat contul de cineva?</td>
							<td>Nu</td>
							<td>Da, de un editor</td>
							<td>Da, de un alt editor</td>
						  </tr>
						  <tr>
							<td>Alte drepturi</td>
							<td>
								<ol>
								  <li>Dreptul de a incepe de la 1:)</li>
								  <li>Dreptul de a sta pe loc</li>
								  <li>Dreptul de a lua stangul</li>
								</ol>
							</td>
							<td>
								<ol start="3">
								  <li>Dreptul de a incepe de la 3:)</li>
								  <li>Dreptul de a lua stangul</li>
								</ol>
							</td>
							<td>
								<ul>
								  <li>Dreptul de a avea drepturi</li>
								  <li>Dreptul de a lua stangul</li>
								</ul>
							</td>
						  </tr>
						</table>
						<label>Interese principale</label>
						<input type="checkbox" checked name="interes" value="politica"> Politica
						<input type="checkbox" name="interes" value="sport"> Sport
						<input type="checkbox" name="interes" value="false"> Stiri false
						<input type="checkbox" name="interes" value="amuzante"> Stiri amuzante
						<br>
						<i class="fas fa-coffee"><label>Ceva despre tine: </label></i>
						<div class="container">
							<div class="comment">
								<textarea id="despre" class="textinput" cols="40" rows="10" placeholder="Despre tine" name="about"></textarea><br>
							</div>
						</div>
						<label for="tari">Tara de origine: </label>
						<input list="tarile" name="tari" id="tari">
						<datalist id="tarile">
							<option value="Romania">
							<option value="Franta">
							<option value="Ungaria">
							<option value="Bulgaria">
							<option value="Croatia">
						</datalist>
						<br><br>
						Judet: <select name="judete" id="judete">
							<option value="" selected="selected">JUDET</option>
						  </select>
						  <br><br>
						Oras: <select name="orase" id="orase">
							<option value="" selected="selected">ORASE</option>
						  </select>
						<br><br>
						<input type="checkbox" name="termeni" value="accept"> Accept termenii si conditiile<br><br>
						<input type="submit" value="Submit" id="submit" name="submit">
					</fieldset>
					<?php
						if (isset($_GET["error"])){
							if ($_GET["error"] == "stmtfaile"){
								echo "<p>Ceva nu a mers bine</p>";
							}
							else if ($_GET["error"] == "emailused"){
								echo "<p>Email deja folosit</p>";
							}
							else if ($_GET["error"] == "none"){
								echo "<p>YaY :D</p>";
							}
						}
					?>
				</form>
			</div>
			<div id="TabelaDemo">
				<table id="tabelSite">
				  <tr>
					<th>Nr</th>
					<th>Alte site-uri utile</th>
					<th>Sport</th>
					<th>Politica</th>
					<th>Actualitate</th>
				  </tr>
				  <tr>
					<td>2</td>
					<td>Digi24</td>
					<td><a href="https://www.digi24.ro/stiri/sport">Rubrica de sport</a></td>
					<td><a href="https://www.digi24.ro/stiri/actualitate/politica">Stiri despre politica</a></td>
					<td><a href="https://www.digi24.ro/stiri/actualitate">Stiri mai noi</a></td>
				  </tr>
				  <tr>
					<td>1</td>
					<td>ProTV</td>
					<td>Nu exista aceasta categorie pe site :(</td>
					<td><a href="https://stirileprotv.ro/stiri/politic/">Politica</a></td>
					<td><a href="https://stirileprotv.ro/ultimele-stiri/">Ultimele stiri</a></td>
				  </tr>
				  <tr>
					<td>10</td>
					<td>ProTV</td>
					<td>Nu exista aceasta categorie pe site :(</td>
					<td><a href="https://stirileprotv.ro/stiri/politic/">Politica</a></td>
					<td><a href="https://stirileprotv.ro/ultimele-stiri/">Ultimele stiri</a></td>
				  </tr>
				</table>
			</div>
		</main>
		<footer>
			<p class="footerP">
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.scs.ubbcluj.ro%2F%7Elmar1989%2Flab2%2Fcrearecont.html" target="_blank">
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
		<script src="validationScript.min.js"></script>
		<script src="tableScript.min.js"></script>
		<script src="myScript.js"></script>
	</body>
</html>