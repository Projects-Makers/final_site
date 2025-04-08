<?php
	require("config.php");
?>

<div class="profil-container-dodaj">
<a href="index.php?strona=admin" class="back-button">← Powrót do panelu</a>

	
<form class="edit-form" onsubmit="return false;">
	<input type="search" id="search-attraction" name="szukaj" placeholder="Szukaj atrakcji..." class="search-bar">
	<input type="button" id="search-button" value="Wyczyść">
</form>

	<div id="no-results" style="display: none; text-align: center; margin-top: 20px; font-weight: bold;">
    Brak wyników
</div>


		<?php
		$wynik = mysqli_query($conn, "SELECT atrakcje.id, atrakcje.nazwa, miasta.name FROM atrakcje JOIN miasta ON lp = id_miasta ORDER BY miasta.name, atrakcje.nazwa");

		$aktualne_miasto = null;

		while ($wiersz = mysqli_fetch_array($wynik)) {
			// Jeśli zmienia się miasto, wypisujemy je jako nowy nagłówek
			if ($aktualne_miasto !== $wiersz['name']) {
				$aktualne_miasto = $wiersz['name'];
				echo'<hr class="banner-divider">';
				echo '<h1 class="title-centered-edit">' . $aktualne_miasto . '</h1>';
				echo'<hr class="banner-divider">';

			}
			echo '<div class="miasto-item-box">';
			echo '<div class="miasto-item">' . $wiersz['nazwa'] . '</div>';
			echo '<div class="miasto-item-link"><a href="index.php?strona=panel/edit-at1&id=' . $wiersz['id'] . '">Edit</a></div></div>';
		}
		?>

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
