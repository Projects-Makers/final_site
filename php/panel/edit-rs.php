<?php
require("config.php");
?>

<div class="profil-container">
    <center>


            <?php
            $miastaQuery = mysqli_query($conn, "SELECT * FROM miasta");
            
            while ($miasto = mysqli_fetch_array($miastaQuery)) {
                echo '<div class="title-miasto">' . $miasto['name'] . '</div>';
                
                $restauracjeQuery = mysqli_query($conn, "SELECT * FROM restauracje WHERE lp = " . $miasto['id_miasta']);
                
                while ($restauracja = mysqli_fetch_array($restauracjeQuery)) {

					$imagePath = 'zdj-atrakcje/' . $restauracja["id"] . '.jpg';


					echo '<div class="title-miasto-rozwin miasto-rozwin">';
					if (file_exists($imagePath)) {
						echo '<img src="' . $imagePath . '" alt="' . $wiersz["nazwa"] . '">';
					} else {
						echo '<img src="zdj_atrakcje/nic.png" alt="Brak zdjęcia">';
					}
                    echo '<div class="nazwa">' . $restauracja['nazwa'] . '</div>';
                    echo '<div class="nazwa-link"><a href="index.php?strona=panel/edit-rs1&id=' . $restauracja['id'] . '">Edit</a></div>';
					echo '</div>';
                }
            }
            ?>
    </center>
</div>
