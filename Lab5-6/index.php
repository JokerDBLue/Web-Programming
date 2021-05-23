<?php 
	include_once 'header.php';
	if (isset($_SESSION["idUser"])){
		header('location: ultimeleStiri.php');
		exit();
	}
?>
			<h1>Autentificare</h1>
			<div id="childLeft">
				<img src="images/blog-newsstand.png" alt="News booth" width="500" height="600">
			</div>
			<div id="childRight">
				<form action="login.inc.php" method="post">
					<fieldset>
						<legend>Introduceti datele:</legend>
						<label for="email">Email:</label>
						<input type="text" id="email" name="email"><br><br>
						<label for="password">Password:</label>
						<input type="password" id="password" name="password"><br><br>
						<input type="submit" value="submit" name="submit">
					</fieldset>
					<?php
						if (isset($_GET["error"])){
							if ($_GET["error"] == "stmtfaillinia7"){
								echo "<p>Ceva nu a mers bine</p>";
							}
							else if ($_GET["error"] == "emptyinput"){
								echo "<p>Trebuie sa completati campurile</p>";
							}
							else if ($_GET["error"] == "nouser"){
								echo "<p>Nu exista acest user</p>";
							}
						}
					?>
				</form>
			</div>
		</main>
		<footer>
			<p class="footerP">
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.scs.ubbcluj.ro%2F%7Elmar1989%2Flab2%2Findex.html" target="_blank">
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
	</body>
</html>