<div class="profil-container">
    <form method="post" action="index.php?strona=panel/delete-at">
        <p>Wybierz atrakcję do usunięcia:</p>
        <p>
            <select name="xatrakcja" required>
                <?php
                require("config.php");
                $wynik = mysqli_query($conn,"SELECT * FROM atrakcje");
                while ($wiersz = mysqli_fetch_array($wynik)) {
                    echo '<option value="' . $wiersz["id"] . '">'. $wiersz["nazwa"] .'</option>';
                }
                ?>
            </select>
        </p>
        <p>
            <input type="submit" value="Usuń atrakcję">
            <input type="reset" value="Wyczyść wybór">
        </p>
    </form>
</div>
