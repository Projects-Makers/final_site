<body>
    <center>
        <h2>Dodawanie</h2>
    </center>
    <form method="post" action="add.php">
        <p> Nazwa: <input type="text" name="xnazwa" size="40" maxlength="55" required></p>
        <p> Cena : <input type="text" name="xcena" size="30" maxlength="55" required></p>
        <p> Lokalizacja : <input type="text" name="xlok" size="4" maxlength="4"></p>
        <p> Godzina : <input type="text" name="xgodz" size="7" maxlength="14"></p>
        <p>Lp : <input type="text" name="xlp" size="30" maxlength="55" required></p>
        <p><input type="submit" value="Dodaj opis->">
           <input type="reset" value="..::Wyczyść opis::..">
        </p>
    </form>
</body>
</html>