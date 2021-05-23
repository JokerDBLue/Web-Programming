<?php
	require_once 'dbh.inc.php';
	$updateDelete = $_POST['updateDelete'];
	$idUser = $_POST['idUser'];
	$email = $_POST['email'];
	$sql;
	if (strcmp($updateDelete, "Aproba utilizator") === 0){
		$sql = "UPDATE users SET aprobat = 1 WHERE (email = ? AND idUser = ?);";
	}
	else if (strcmp($updateDelete, "Sterge utilizator") === 0){
		$sql = "DELETE FROM users WHERE (email = ? AND idUser = ?);";
	}
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		echo "<p>Problema de sistem</p>";
		exit();
	}
	mysqli_stmt_bind_param($stmt, "si", $email, $idUser);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	$sql = "SELECT * FROM users WHERE aprobat = 0";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
		echo "<table style='margin-left:auto;margin-right:auto;'>";
		echo "<tr>
				<th>Id</th>
				<th>Mail</th>
				<th>Aproba</th>
				<th>Sterge</th>
			  </tr>";
		while ($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>".$row["idUser"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td><button>Aproba utilizator</button></td>";
			echo "<td><button>Sterge utilizator</button></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else {
		echo "<p>Nu utilizatori neaprobati</p>";
	}