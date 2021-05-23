<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="ro">
	<head>
		<title>Stiri date in nestire</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="myStyle.css">
		<link rel="stylesheet" href="css/all.css">
		<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	</head>
	<body>
		<header>
			<div class="logo">
				<a href="ultimeleStiri.php">
				<img src="images/logo.png" alt="Stiri date in nestire" width="150" height="150" title="Logo pentru site">
				</a>
			</div>
			<nav>
				<ul id="menu">
					<li><a href="ultimeleStiri.php">Acasa</a><li>
					<li class="hasChild"><a href="ultimeleStiri.php">Tipuri de stiri</a>
						<ul>
							<li><a href="sport.php">Sport</a></li>
							<li><a href="politica.php">Politica</a></li>
							<li><a href="amuzante.php">Amuzante</a></li>
							<li><a href="false.php">False</a></li>
						</ul>
					</li>
					<li><a href="ultimeleStiri.php">Ultimele stiri</a></li>
					<?php
						if (isset($_SESSION["idUser"])){
							if (isset($_SESSION["tipUtilizator"])){
								if (strcmp($_SESSION["tipUtilizator"], "1") === 0){
									echo "<li><a href='scrieStire.php'>Scrie o stire</a></li>";
								}
								if (strcmp($_SESSION["tipUtilizator"], "2") === 0){
									echo "<li><a href='aproba.php'>Aproba utilizatori</a></li>";
								}
							}
							
							echo "<li><a href='logout.inc.php'>LOGOUT</a></li>";
						}
						else{
							echo "<li><a href='index.php'>LOGIN</a></li>";
							echo "<li><a href='crearecont.php'>Creare cont</a></li>";
						}
					?>
				</ul>
			</nav>
		</header>
		<main>