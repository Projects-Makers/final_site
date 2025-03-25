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

<div class="profil-container">
<center>
<form method="post" action="index.php?strona=panel/edit-mi11">
        <input type="hidden" name="id" value="<?php echo $wiersz['id_miasta']; ?>">

        <!-- City Name -->
        <p> Nazwa: <input type="text" name="xnazwa" size="40" maxlength="55" required value="<?php echo $wiersz['name']; ?>"></p>

        <!-- City Lat and Lng (show current city data) -->
        <p> Szerokość geograficzna (Lat): <input type="text" name="xlat" size="30" maxlength="55" value="<?php echo $wiersz['lat']; ?>" readonly></p>
        <p> Długość geograficzna (Lng): <input type="text" name="xlng" size="30" maxlength="55" value="<?php echo $wiersz['lng']; ?>" readonly></p>

        <!-- Description -->
        <p>Opis:<br>
            <textarea name="xopis" cols="70" rows="5" required><?php echo $wiersz['description']; ?></textarea>
        </p>

        <!-- Form Actions -->
        <p><input type="submit" value="Zaktualizuj miasto->">
           <input type="reset" value="..::Wyczyść opis::..">
        </p>
    </form>
</center>
</div>
