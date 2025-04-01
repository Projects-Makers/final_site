<div class="profil-container-dodaj">

<a href="index.php?strona=admin" class="back-button">← Powrót do panelu</a>

    <form method="post" action="index.php?strona=panel/add-at" class="form-container-1">
        <h2>Dodaj Atrakcję</h2>

        <label for="xnazwa">Nazwa:</label>
        <input type="text" id="xnazwa" name="xnazwa" maxlength="55" required>

        <label for="xcena">Cena:</label>
        <input type="text" id="xcena" name="xcena" maxlength="55" required>

        <label for="xlok">Lokalizacja:</label>
        <input type="text" id="xlok" name="xlok" maxlength="4" required>

        <label for="xgodz">Godziny otwarcia:</label>
        <input type="text" id="xgodz" name="xgodz" maxlength="14" required>

        <label for="xmiasto">Miasto:</label>
        <select id="xmiasto" name="xmiasto" required>
            <?php
            require("config.php");
            $wynik = mysqli_query($conn, "SELECT * FROM miasta");
            while ($wiersz = mysqli_fetch_array($wynik)) {
                echo '<option value="' . $wiersz["id_miasta"] . '">' . $wiersz["name"] . '</option>';
            }
            ?>
        </select>

        <label for="xopis">Opis:</label>
        <textarea id="xopis" name="xopis" rows="5" required></textarea>

        <div class="form-buttons">
            <input type="submit" value="Dodaj atrakcję">
            <input type="reset" value="Wyczyść">
        </div>
    </form>
</div>
