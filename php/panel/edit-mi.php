<?php
	require("config.php");
?>

<div class="profil-container">
<center>
	<table>
		<tr>
			<th>miasto</th>
			<th>Edit</th>
		</tr>
		<?php
		$wynik = mysqli_query($conn, "SELECT * FROM miasta");
		while ($wiersz = mysqli_fetch_array($wynik)) {
			echo '<tr>';
			echo '<td>' . $wiersz['name'] . '</td>';
			// Pass the attraction id to the edit page
			echo '<td><a href="index.php?strona=panel/edit-mi1&id=' . $wiersz['id_miasta'] . '">Edit</a></td>';
			echo '</tr>';
		}
		?>
	</table>
</center>
</div>
