<?php
require("config.php");

// Fetch the attraction data based on the ID passed in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM atrakcje WHERE id='$id'");
    $wiersz = mysqli_fetch_array($result);

    if (!$wiersz) {
        echo "Attraction not found.";
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}
?>

<div class="profil-container-dodaj">
    <a href="index.php?strona=admin" class="back-button">← Powrót do panelu</a>

    <form method="post" action="index.php?strona=panel/edit-at11" class="form-container-1">
        <h2>Edytuj Atrakcję</h2>

        <!-- Attraction Name -->
        <label for="xnazwa">Nazwa:</label>
        <input type="text" id="xnazwa" name="xnazwa" size="40" maxlength="55" required value="<?php echo $wiersz['nazwa']; ?>">

        <!-- Price -->
        <label for="xcena">Cena:</label>
        <input type="text" id="xcena" name="xcena" size="30" maxlength="55" required value="<?php echo $wiersz['cena']; ?>">

        <!-- Location -->
        <label for="xlok">Lokalizacja:</label>
        <input type="text" id="xlok" name="xlok" size="4" maxlength="4" required value="<?php echo $wiersz['lokalizacja']; ?>">

        <!-- Opening Hours -->
        <label for="xgodz">Godziny otwarcia:</label>
        <input type="text" id="xgodz" name="xgodz" size="7" maxlength="14" required value="<?php echo $wiersz['godz']; ?>">

        <!-- City -->
        <label for="xmiasto">Miasto:</label>
        <select id="xmiasto" name="xmiasto" required>
            <?php
            $wynik = mysqli_query($conn, "SELECT * FROM miasta");
            while ($miersz = mysqli_fetch_array($wynik)) {
                $selected = ($miersz["id_miasta"] == $wiersz['lp']) ? 'selected' : '';
                echo '<option value="' . $miersz["id_miasta"] . '" ' . $selected . '>' . $miersz["name"] . '</option>';
            }
            ?>
        </select>

        <!-- Description -->
        <label for="xopis">Opis:</label>
        <textarea id="xopis" name="xopis" rows="5" required><?php echo $wiersz['opis']; ?></textarea>

        <div class="form-buttons">
            <input type="submit" value="Zaktualizuj atrakcje">
            <input type="reset" value="Wyczyść">
        </div>
    </form>
</div>
