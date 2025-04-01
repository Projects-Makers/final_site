<div class="profil-container-remove">

<a href="index.php?strona=admin" class="back-button">← Powrót do panelu</a>

    <form method="post" action="index.php?strona=panel/delete-mi">
        <p>Wybierz miasto do usunięcia:</p>
        <select name="xmiasto" required>
            <?php
            $wynik = mysqli_query($conn, "SELECT * FROM miasta");
            while ($wiersz = mysqli_fetch_array($wynik)) {
                echo '<option value="' . $wiersz["id_miasta"] . '">' . $wiersz["name"] . '</option>';
            }
            ?>
        </select>
        <p><input type="submit" value="Usuń"> <input type="reset" value="Wyczyść"></p>
    </form>
</div>