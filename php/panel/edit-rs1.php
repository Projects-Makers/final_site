<?php
require("config.php");

// Fetch the restaurant data based on the ID passed in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM restauracje WHERE id='$id'");
    $wiersz = mysqli_fetch_array($result);

    if (!$wiersz) {
        echo "Restaurant not found.";
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}
?>

<div class="profil-container">
<center>
<form method="post" action="index.php?strona=panel/edit-rs11">
        <input type="hidden" name="id" value="<?php echo $wiersz['id']; ?>">
        <p> Nazwa: <input type="text" name="xnazwa" size="40" maxlength="55" required value="<?php echo $wiersz['nazwa']; ?>"></p>
        <p> Cena: <input type="text" name="xcena" size="30" maxlength="55" required value="<?php echo $wiersz['cena']; ?>"></p>
        <p> Lokalizacja: <input type="text" name="xlok" size="40" maxlength="100" required value="<?php echo $wiersz['lokalizacja']; ?>"></p>
        <p> Godziny: <input type="text" name="xgodz" size="40" maxlength="50" required value="<?php echo $wiersz['godz']; ?>"></p>
        <p> Miasto: 
        <select name="xmiasto" required>
            <?php
            $wynik = mysqli_query($conn, "SELECT * FROM miasta");
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
        <p><input type="submit" value="Zaktualizuj restaurację">
           <input type="reset" value="Wyczyść">
        </p>
    </form>
</center>
</div>
