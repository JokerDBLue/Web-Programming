<?php

function emailExist($conn, $email) {
	$sql = "SELECT * FROM users WHERE email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: crearecont.php?error=stmtfaillinia7");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
}

function createUser($conn, $nume, $prenume, $parola, $telefon, $data, $tipUtilizator, $despre, $mail) {
	$sql = "INSERT INTO users(firstName, lastName, parola, nrTelefon, email, tipUtilizator, despre, dataNasterii, aprobat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'false');";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: crearecont.php?error=stmtfaillinia31");
		exit();
	}
	
	$hashedPwd = password_hash($parola, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "ssssssss", $nume, $prenume, $hashedPwd, $telefon, $mail, $tipUtilizator, $despre, $data);
	mysqli_stmt_execute($stmt);	
	mysqli_stmt_close($stmt);
	
	header("location: index.php?error=none");
	exit();
}

function emptyInputLogin($mail, $parola){
	$result;
	if (empty($mail) || empty($parola)){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $mail, $parola){
	$mailExists = emailExist($conn, $mail);
	
	if ($mailExists === false){
		header("location: index.php?error=nouser__$mail");
		exit();
	}
	
	if($mailExists["aprobat"] === 0){
		header("location: index.php?error=notapproved__$mail");
		exit();
	}
	$pwdHashed = $mailExists["parola"];	
	$checkPwd = password_verify($parola, $pwdHashed);
	
	if ($checkPwd === false){
		header("location: index.php?error=nouser__$parola"); //aA1B!
		exit();
	}
	else if ($checkPwd === true){
		session_start();
		$_SESSION["idUser"] = $mailExists["idUser"];
		$_SESSION["email"] = $mailExists["email"];
		$_SESSION["tipUtilizator"] = $mailExists["tipUtilizator"];
		header("location: ultimeleStiri.php");
		exit();
	}
}