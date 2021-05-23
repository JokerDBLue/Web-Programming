<?php
	if (!empty($_POST)){
		session_start();
		$titlu = $_POST['titlu'];
		$continut = $_POST['continut'];
		$tipStire = $_POST['tipStire'];
		$idUser = $_SESSION["idUser"];
		if (empty($titlu) || empty($continut)){
			echo "<span style='color:red'>Trebuie completat tot</span>";
		}
		else{
			require_once 'dbh.inc.php';
			$sql = "INSERT INTO articol (titlu, continut, idUtilizator, tipContinut) VALUES (?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)){
				echo "<span style='color:red'>A avut loc o eroare</span>";
				exit();
			}
			mysqli_stmt_bind_param($stmt, "ssis", $titlu, $continut, $idUser, $tipStire);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			
			echo "<script>location.replace('ultimeleStiri.php')</script>";
		}
	}
	else {
		echo "<span style='color:red'>A avut loc o eroare</span>";
	}
?>