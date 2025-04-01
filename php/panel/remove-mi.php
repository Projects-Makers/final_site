<div class="profil-container">
    <center>
    <form method="post" action="index.php?strona=panel/delete-mi">
        <p>Wybierz miasto do usunięcia:</p>
        <p>
            <select name="xmiasto" required>
                <?php
                require("config.php");
                $wynik = mysqli_query($conn,"SELECT * FROM miasta");
                while ($wiersz = mysqli_fetch_array($wynik)) {
                    echo '<option value="' . $wiersz["id_miasta"] . '">' . $wiersz["name"] . '</option>';
                }
                ?>
            </select>
        </p>
        <p>
            <input type="submit" value="Usuń miasto">
            <input type="reset" value="Wyczyść wybór">
        </p>
    </form>
    </center>
</div>
