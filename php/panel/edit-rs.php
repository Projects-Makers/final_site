<?php
require("config.php");
?>

<div class="profil-container-dodaj">
<a href="index.php?strona=admin" class="back-button">← Powrót do panelu</a>

	
<form class="edit-form" onsubmit="return false;">
	<input type="search" id="search-attraction" name="szukaj" placeholder="Szukaj atrakcji..." class="search-bar">
	<input type="reset" id="search-button" value="Wyczyść">
</form>

	<div id="no-results" style="display: none; text-align: center; margin-top: 20px; font-weight: bold;">
    Brak wyników
</div>
    <center>
        <?php
        // Pobieramy wszystkie miasta
        $citiesQuery = mysqli_query($conn, "SELECT * FROM miasta");

        while ($city = mysqli_fetch_array($citiesQuery)) {
            echo'<hr class="banner-divider">';
            echo '<h1 class="title-centered-edit">' . $city['name'] . '</h1>';
            echo'<hr class="banner-divider">';
            // Pobieramy restauracje z danego miasta
            $restaurantsQuery = mysqli_query($conn, "SELECT * FROM restauracje WHERE lp = " . $city['id_miasta']);

            // Iterujemy przez restauracje
            while ($restaurant = mysqli_fetch_array($restaurantsQuery)) {
                echo '<div class="miasto-item-box">';

                echo '<div class="miasto-item">' . $restaurant['nazwa'] . '</div>';

                echo '<div class="miasto-item-link"><a href="index.php?strona=panel/edit-rs1&id=' . $restaurant['id'] . '">Edit</a></div>';

                echo '</div>';  
            }
        }
        ?>
    </center>
</div>
<script>
document.getElementById('search-attraction').addEventListener('input', function () {
    const searchTerm = this.value.toLowerCase();

    // znajdź wszystkie nagłówki miast i kontenery z atrakcjami
    const allHeaders = document.querySelectorAll('.title-centered-edit');
    const allDividers = document.querySelectorAll('.banner-divider');
    const allGroups = []; // grupy między nagłówkami

    let currentGroup = [];

    const attractionBoxes = document.querySelectorAll('.miasto-item-box');
    attractionBoxes.forEach((box, index) => {
        const text = box.querySelector('.miasto-item').textContent.toLowerCase();

        if (text.includes(searchTerm)) {
            box.style.display = 'flex';
        } else {
            box.style.display = 'none';
        }
    });

    // ukryj nagłówki miast, które nie mają żadnej widocznej atrakcji
    allHeaders.forEach((header, i) => {
        let hasVisible = false;
        let sibling = header.nextElementSibling;

        while (sibling && !sibling.classList.contains('title-centered-edit')) {
            if (sibling.classList.contains('miasto-item-box') && sibling.style.display !== 'none') {
                hasVisible = true;
            }
            sibling = sibling.nextElementSibling;
        }

        header.style.display = hasVisible ? 'block' : 'none';
        if (allDividers[i * 2]) allDividers[i * 2].style.display = hasVisible ? 'block' : 'none'; // górny divider
        if (allDividers[i * 2 + 1]) allDividers[i * 2 + 1].style.display = hasVisible ? 'block' : 'none'; // dolny divider
    });
});
</script>