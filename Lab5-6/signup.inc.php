<?php

session_start();

if (isset($_POST["submit"])) {
	$nume = $_POST["lastName"];
	$prenume = $_POST["firstName"];
	$parola = $_POST["password"];
	$telefon = $_POST["phone"];
	$data = $_POST["date"];
	$tipUtilizator = $_POST["tipUtilizator"];
	$despre = $_POST["about"];
	$mail = $_POST["email"];
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (emailExist($conn, $mail) !== false){
		header("location: crearecont.php?error=emailused");
		exit();
	}
	
	createUser($conn, $nume, $prenume, $parola, $telefon, $data, $tipUtilizator, $despre, $mail);
}
else {
	header("location: crearecont.php?error=nosubmitfunctions");
	exit();
}