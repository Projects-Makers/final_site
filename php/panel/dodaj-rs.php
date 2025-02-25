<div class="profil-container">
<center>
<form method="post" action="index.php?strona=panel/add-rs">
        <p> Nazwa: <input type="text" name="xnazwa" size="40" maxlength="100" required></p>
        <p> Cena: <input type="text" name="xcena" size="30" maxlength="100" required></p>
        <p> Lokalizacja: <input type="text" name="xlok" size="4" maxlength="100"  required></p>
        <p> Godz: <input type="text" name="xgodz" size="7" maxlength="100" required></p>
        <p> Miasto: 
            <select name="xmiasto">
                <?php
                require("config.php");
                $wynik = mysqli_query($conn,"SELECT * from miasta, restauracje where id_miasta=lp");
                while ($wiersz = mysqli_fetch_array($wynik)) {
                    echo '<option value="' . $wiersz["lp"] . '">'. $wiersz["name"] .'</option>';
                }
                ?>
            </select>	
        </p>
        <p>Opis:<br>
            <textarea name="xopis" cols="70" rows="5" required></textarea>
        </p>
        <p><input type="submit" value="Dodaj restauracje->">
           <input type="reset" value="..::Wyczyść opis::..">
        </p>
    </form>
</center>
</div>