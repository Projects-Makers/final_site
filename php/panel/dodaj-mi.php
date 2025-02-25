<div class="profil-container">
<center>
<form method="post" action="index.php?strona=panel/add-mi">
        <p> Nazwa: <input type="text" name="xname" size="40" maxlength="55" required></p>
        <p> Populacja: <input type="text" name="xpopulation" size="30" maxlength="55" required></p>
        <p> land: <input type="text" name="xland" size="4" maxlength="4"  required></p>
        <p> lng: <input type="text" name="xlng" size="7" maxlength="14" required></p>
        <p> lat: <input type="text" name="xlat" size="7" maxlength="14" required></p>
        <p>Opis:<br>
            <textarea name="xdescription" cols="70" rows="5" required></textarea>
        </p>
        <p><input type="submit" value="Dodaj miasto->">
           <input type="reset" value="..::Wyczyść opis::..">
        </p>
    </form>
</center>
</div>