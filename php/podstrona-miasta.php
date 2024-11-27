<div class="section1">
<div class="center1">
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<div class="czcionka">
    <?php
    require("config.php");
    $nr = $_GET["id"];
    $wynik = mysqli_query($conn,"SELECT * FROM  miasta where id='$nr'");
    $wiersz = mysqli_fetch_array($wynik);
    echo '<b>' . $wiersz["miasto"] . '</b>';
    ?>
</div>
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<div class="info1">
    <?php
    $wynik = mysqli_query($conn,"SELECT * FROM  miasta where id='$nr'");
    $wiersz = mysqli_fetch_array($wynik);
    echo '<b>' . $wiersz["opis_miasto"] . '</b>';
    ?>
</div>
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<div class="czcionka"><b>Atrakcje</b></div>
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
</div>
</div>