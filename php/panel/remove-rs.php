<div class="profil-container">
    <center>
    <form method="post" action="index.php?strona=panel/delete-rs">
        <p>Wybierz restaurację do usunięcia:</p>
        <p>
            <select name="xrestaurant" required>
                <?php
                require("config.php");
                $wynik = mysqli_query($conn,"SELECT * FROM restauracje");
                while ($wiersz = mysqli_fetch_array($wynik)) {
                    echo '<option value="' . $wiersz["id"] . '">' . $wiersz["nazwa"] . '</option>';
                }
                ?>
            </select>
        </p>
        <p>
            <input type="submit" value="Usuń restaurację">
            <input type="reset" value="Wyczyść wybór">
        </p>
    </form>
    </center>
</div>
