<?php
require("config.php");

// Fetch the attraction data based on the ID passed in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the city data from the database based on the city ID
    $result = mysqli_query($conn, "SELECT * FROM miasta WHERE id_miasta = '$id'");

    // Check if the query returned any result
    $wiersz = mysqli_fetch_array($result);

    if (!$wiersz) {
        echo "City not found.";
        exit;
    }

} else {
    echo "No ID provided.";
    exit;
}
?>

<div class="profil-container-dodaj">
    <a href="index.php?strona=admin" class="back-button">← Powrót do panelu</a>

    <form method="post" action="index.php?strona=panel/edit-mi11" class="form-container-1">
        <h2>Edytuj Miasto</h2>

        <!-- City Name -->
        <label for="xnazwa">Nazwa:</label>
        <input type="text" id="xnazwa" name="xnazwa" maxlength="55" required value="<?php echo $wiersz['name']; ?>">

        <!-- City Lat and Lng (show current city data) -->
        <label for="xlat">Szerokość geograficzna (Lat):</label>
        <input type="text" id="xlat" name="xlat" maxlength="55" value="<?php echo $wiersz['lat']; ?>" readonly>

        <label for="xlng">Długość geograficzna (Lng):</label>
        <input type="text" id="xlng" name="xlng" maxlength="55" value="<?php echo $wiersz['lng']; ?>" readonly>

        <!-- Description -->
        <label for="xopis">Opis:</label>
        <textarea id="xopis" name="xopis" rows="5" required><?php echo $wiersz['description']; ?></textarea>

        <div class="form-buttons">
            <input type="submit" value="Zaktualizuj miasto">
            <input type="reset" value="Wyczyść">
        </div>
    </form>
</div>
