<?php

if (isset($_POST["submit"])){
	$mail = $_POST["email"];
	$parola = $_POST["password"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputLogin($mail, $parola) !== false){
		header("location: index.php?error=emptyinput");
		exit();
	}
	
	
	loginUser($conn, $mail, $parola);
}
else{
	header("location: index.php?error=nosubmit");
	exit();
}