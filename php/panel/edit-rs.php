<?php
require("config.php");
?>

<div class="profil-container">
<center>
	<table>
		<tr>
			<th>Nazwa</th>
			<th>Miasto</th>
			<th>Edit</th>
		</tr>
		<?php
		// Query to get the list of restaurants with their associated cities
		$wynik = mysqli_query($conn, "SELECT * FROM restauracje, miasta WHERE lp = id_miasta");
		while ($wiersz = mysqli_fetch_array($wynik)) {
			echo '<tr>';
			echo '<td>' . $wiersz['nazwa'] . '</td>';
			echo '<td>' . $wiersz['name'] . '</td>';
			// Link to edit page with the restaurant ID
			echo '<td><a href="index.php?strona=panel/edit-rs1&id=' . $wiersz['id'] . '">Edit</a></td>';
			echo '</tr>';
		}
		?>
	</table>
</center>
</div>
