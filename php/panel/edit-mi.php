<?php
require("config.php");
?>

<div class="profil-container">
    <center>
        <?php
        // Pobieramy wszystkie miasta
        $miastaQuery = mysqli_query($conn, "SELECT * FROM miasta");

        while ($miasto = mysqli_fetch_array($miastaQuery)) {
            // Dodajemy unikalny id dla każdego miasta, np. za pomocą id_miasta
            echo '<div class="title-miasto" id="miasto-' . $miasto['id_miasta'] . '" onclick="toggleCity(' . $miasto['id_miasta'] . ')">' . $miasto['name'] . '</div>';
            
            // Pobieramy atrakcje z danego miasta
            $atrakcjeQuery = mysqli_query($conn, "SELECT * FROM atrakcje WHERE lp = " . $miasto['id_miasta']);
            
            // Tworzymy kontener na atrakcje, który będzie początkowo ukryty
            echo '<div class="title-miasto-rozwin miasto-rozwin" id="city-' . $miasto['id_miasta'] . '" >';

            while ($atrakcje = mysqli_fetch_array($atrakcjeQuery)) {
                // Ścieżka do zdjęcia restauracji
                $imagePath = 'zdj_atrakcje/' . $atrakcje["id"] . '.webp';

                // Rozwijany kontener z restauracjami
                echo '<div class="miasto-rozwin">';

                // Sprawdzamy, czy zdjęcie istnieje
                echo '<div class="nazwa">';
                if (file_exists($imagePath)) {
                    echo '<img src="' . $imagePath . '" alt="' . $atrakcje["nazwa"] . '">';
                } else {
                    echo '<img src="zdj_atrakcje/nic.png" alt="Brak zdjęcia">';
                }
                echo $atrakcje['nazwa'];
                echo '</div>';
                echo '<div class="nazwa-link"><a href="index.php?strona=panel/edit-rs1&id=' . $atrakcje['id'] . '">Edit</a></div>';
                echo '</div>';
            }

            echo '</div>';  // Zamyka title-miasto-rozwin
        }
        ?>
    </center>
</div>
<script>
    // Funkcja do rozwijania i zwijania sekcji
    function toggleCity(cityId) {
        // Znajdujemy kontener z atrakcjami tego miasta
        var cityContainer = document.getElementById('city-' + cityId);

        // Przełączamy klasę 'open', aby zmienić max-height
        if (cityContainer.classList.contains('open')) {
            cityContainer.classList.remove('open');  // Ukryj
        } else {
            cityContainer.classList.add('open');  // Pokaż
        }
    }
</script>
