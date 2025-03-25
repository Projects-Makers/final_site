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

<div class="profil-container">
<center>
<form method="post" action="index.php?strona=panel/edit-at11">
        <input type="hidden" name="id" value="<?php echo $wiersz['id']; ?>">
        <p> Nazwa: <input type="text" name="xnazwa" size="40" maxlength="55" required value="<?php echo $wiersz['nazwa']; ?>"></p>
        <p> Cena: <input type="text" name="xcena" size="30" maxlength="55" required value="<?php echo $wiersz['cena']; ?>"></p>
        <p> Lokalizacja: <input type="text" name="xlok" size="4" maxlength="4" required value="<?php echo $wiersz['lokalizacja']; ?>"></p>
        <p> Godz: <input type="text" name="xgodz" size="7" maxlength="14" required value="<?php echo $wiersz['godz']; ?>"></p>
        <p> Miasto: 
        <select name="xmiasto" required>
            <?php
            $wynik = mysqli_query($conn,"SELECT * FROM miasta");
            while ($miersz = mysqli_fetch_array($wynik)) {
                $selected = ($miersz["id_miasta"] == $wiersz['lp']) ? 'selected' : '';
                echo '<option value="' . $miersz["id_miasta"] . '" ' . $selected . '>' . $miersz["name"] . '</option>';
            }
            ?>
        </select>  
    </p>
        <p>Opis:<br>
            <textarea name="xopis" cols="70" rows="5" required><?php echo $wiersz['opis']; ?></textarea>
        </p>
        <p><input type="submit" value="Zaktualizuj atrakcje->">
           <input type="reset" value="..::Wyczyść opis::..">
        </p>
    </form>
</center>
</div>
