<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodawanie</title>
</head>
<body>
    <center>
        <h2>Dodawanie</h2>
    </center>
    <form method="post" action="add.php">
        <p> Nazwa: <input type="text" name="xtyt" size="40" maxlength="55" required></p>
        <p> Cena: <input type="text" name="xcena" size="50" maxlength="55" required></p>
        <p>godz: <input type="text" name="xgodz" size="50" maxlength="55" required></p>
        <p> lokalizacja: <input type="text" name="xlok" size="50" maxlength="55" required></p>
        <p> rodzaj (43 dla katowic | 44 dla gliwic): <input type="text" name="xrodzaj" size="30" maxlength="55" required></p>
        </p>
        <p>Opis:<br>
            <textarea name="xopis" cols="70" rows="5" required></textarea>
        </p>
        <p><input type="submit" value="Dodaj opis->">
           <input type="reset" value="..::Wyczyść opis::..">
        </p>
    </form>
</body>
</html>