<?php
	require_once 'dbh.inc.php';
	$number = $_POST['commentNewCount'];
	$sql = "SELECT * FROM articol LIMIT $number";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)){
			echo "<article>";
			echo "<h2><a href='articol.php'>";
			echo $row["titlu"];
			echo "</a></h2>";
			if (!is_null($row['imagine'])){
				echo "<figure>";
				echo "<img src=";
				echo $row["imagine"];
				echo " alt='imagineRep' width='200' height='150' title='imagine'>";
				echo "<figcaption>Fig.1 - imagine reprezentativa</figcaption>";
				echo "</figure>";
			}
			echo "<p>";
			echo $row["continut"];
			echo "</p>";
			echo "</article>";
		}
	}
	else {
		echo "<p>Nu exista articole</p>";
	}
?>