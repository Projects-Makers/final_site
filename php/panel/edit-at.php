<?php
	require("config.php");
?>

<div class="profil-container">
<center>
	<table>
		<tr>
			<th>Nazwa</th>
			<th>miasto</th>
			<th>Edit</th>
		</tr>
		<?php
		$wynik = mysqli_query($conn, "SELECT * FROM atrakcje, miasta WHERE lp = id_miasta");
		while ($wiersz = mysqli_fetch_array($wynik)) {
			echo '<tr>';
			echo '<td>' . $wiersz['nazwa'] . '</td>';
			echo '<td>' . $wiersz['name'] . '</td>';
			// Pass the attraction id to the edit page
			echo '<td><a href="index.php?strona=panel/edit-at1&id=' . $wiersz['id'] . '">Edit</a></td>';
			echo '</tr>';
		}
		?>
	</table>
</center>
</div>
