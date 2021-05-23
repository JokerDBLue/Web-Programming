<?php 
	include_once 'header.php';
	if (!isset($_SESSION["idUser"]) || strcmp($_SESSION["tipUtilizator"], "2") !== 0){
		header('location: index.php');
		exit();
	}
?>
		<section id="utilizatori">
			<?php
				$sql = "SELECT * FROM users WHERE aprobat = 0";
				require_once 'dbh.inc.php';
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
			?>
		</section>
		</main>
		<footer style="position:absolute;bottom:0;">
			<p>Eu sunt aici jos de tot</p>
		</footer>
		<script src="aprobareScript.js"></script>
	</body>
</html>