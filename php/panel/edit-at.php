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
		$wynik= mysqli_query($conn,"SELECT * FROM atrakcje, miasta where lp=	id_miasta");
	while ($wiersz = mysqli_fetch_array($wynik))
	{
		
		echo'<tr>';
			echo '<td>' . $wiersz['nazwa'] . '</td>';
			echo'<td>' . $wiersz['name'] . '</td>';
			echo'<td>Edit</td>';
		echo'</tr>';
		
	}
	?>
	</table>
</center>
</div>