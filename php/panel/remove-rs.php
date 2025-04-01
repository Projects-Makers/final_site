<div class="profil-container-remove">

<a href="index.php?strona=admin" class="back-button">← Powrót do panelu</a>

    <form method="post" action="index.php?strona=panel/delete-rs">
        <p>Wybierz restaurację do usunięcia:</p>
        <select name="xrestaurant" required>
            <?php
            $wynik = mysqli_query($conn, "SELECT * FROM restauracje");
            while ($wiersz = mysqli_fetch_array($wynik)) {
                echo '<option value="' . $wiersz["id"] . '">' . $wiersz["nazwa"] . '</option>';
            }
            ?>
        </select>
        <p><input type="submit" value="Usuń"> <input type="reset" value="Wyczyść"></p>
    </form>
</div>