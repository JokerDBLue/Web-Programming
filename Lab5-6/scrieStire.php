<?php 
	include_once 'header.php';
	if (!isset($_SESSION["idUser"]) || strcmp($_SESSION["tipUtilizator"], "1") !== 0){
		header('location: index.php');
		exit();
	}
?>
			<h1>Scrie o stire</h1>
			<div id="childLeft">
				<img src="images/scriitor.png" alt="Masina de scris" width="500" height="600">
			</div>
			<div id="childRight">
				<form action="adaugareStire.php" method="post">
					<fieldset>
						<legend>Formular de scris stire:</legend>
						<label>Titlu: </label>
						<input type="text" id="titluStire" name="titlu" placeholder="Titlu" maxlength="20" size="50"><br>
						<label>Continut:</label><br><br>
						<div class="container">
							<div class="comment">
								<textarea id="continut" class="textinput" cols="100" rows="20" placeholder="Continut" name="continut"></textarea><br>
							</div>
						</div>
						<label>Tip stire: </label>
						<input type="radio" checked name="tipStire" value="sport"> Sport
						<input type="radio" name="tipStire" value="politica"> Politica
						<input type="radio" name="tipStire" value="false"> Stire falsa
						<input type="radio" name="tipStire" value="amuzante"> Stire amuzanta
						<br>
						<table>
						  <tr>
							<th></th>
							<th>Sport</th>
							<th>Politica</th>
							<th>Stire falsa</th>
							<th>Stire amuzanta</th>
						  </tr>
						  <tr>
							<td>Trebuie aprobata</td>
							<td>DA</td>
							<td>DA</td>
							<td>NU</td>
							<td>DA</td>
						  </tr>
						  <tr>
							<td>
								Poate sa fie roportata
								<table>
									<tr>
										<th>
											In caz de informatie falsa
										</th>
									</tr>
									<tr>
										<th>
											In caz de informatie adevarata
										</th>
									</tr>
								</table>
							</td>
							<td>
								Poate sa fie roportata
								<table>
									<tr>
										<th>
											DA
										</th>
									</tr>
									<tr>
										<th>
											NU
										</th>
									</tr>
								</table>
							</td>
							<td>
								Poate sa fie roportata
								<table>
									<tr>
										<th>
											DA
										</th>
									</tr>
									<tr>
										<th>
											NU
										</th>
									</tr>
								</table>
							</td>
							<td>
								Poate sa fie roportata
								<table>
									<tr>
										<th>
											NU
										</th>
									</tr>
									<tr>
										<th>
											DA
										</th>
									</tr>
								</table>
							</td>
							<td>
								Poate sa fie roportata
								<table>
									<tr>
										<th>
											DA
										</th>
									</tr>
									<tr>
										<th>
											DA
										</th>
									</tr>
								</table>
							</td>
						  </tr>
						  <tr>
							<td>Cerinte suplimentare</td>
							<td colspan="2">
								<ol start="1" type="A">
									<li>Trebuie sa contina: <ul>
										<li>Adevar maxim</li>
										<li>Fara satira sau sarcasm</li>
									</ul></li>
								  <li>Trebuie sa fie o parodie a realitatii</li>
								</ol>
							</td>
							<td>
								<ol start="1" type="A">
									<li>Trebuie sa contina: <ul>
										<li>Adevar minim</li>
										<li>Satira si sarcasm</li>
									</ul></li>
								  <li>Trebuie sa fie o parodie a realitatii</li>
								</ol>
							</td>
							<td>
								Sa fie amuzanta
							</td>
						  </tr>
						</table>
						<input type="submit" id="submit" value="submit" name="submit">
						<p id="adaugat"></p>
					</fieldset>
				</form>
			</div>
		</main>
		<footer>
			<p class="footerP">
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.scs.ubbcluj.ro%2F%7Elmar1989%2Flab2%2FscrieStire.html" target="_blank">
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
		<script src="validateArticol.js"></script>
	</body>
</html>