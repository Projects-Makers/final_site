<div class="profil-container-dodaj">

<a href="index.php?strona=admin" class="back-button">← Powrót do panelu</a>


    <form method="post" action="index.php?strona=panel/add-mi" class="form-container-1">
        <h2>Dodaj Miasto</h2>

        <label for="xname">Nazwa:</label>
        <input type="text" id="xname" name="xname" maxlength="55" required>

        <label for="xpopulation">Populacja:</label>
        <input type="text" id="xpopulation" name="xpopulation" maxlength="55" required>

        <label for="xland">Land:</label>
        <input type="text" id="xland" name="xland" maxlength="4" required>

        <label for="xlng">Długość geograficzna:</label>
        <input type="text" id="xlng" name="xlng" maxlength="14" required>

        <label for="xlat">Szerokość geograficzna:</label>
        <input type="text" id="xlat" name="xlat" maxlength="14" required>

        <label for="xdescription">Opis:</label>
        <textarea id="xdescription" name="xdescription" rows="5" required></textarea>

        <div class="form-buttons">
            <input type="submit" value="Dodaj miasto">
            <input type="reset" value="Wyczyść">
        </div>
    </form>
</div>
