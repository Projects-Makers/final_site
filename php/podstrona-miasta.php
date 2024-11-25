<div class="section1">
<div class="center1">
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
    <?php
    require("config.php");
    $nr = $_GET["id"];
    $wynik = mysqli_query($conn,"SELECT * FROM  miasta where id='$nr'");
    $wiersz = mysqli_fetch_array($wynik);
    echo '<b>' . $wiersz["miasto"] . '</b>';
    ?>

<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<p>
<?php
    $wynik = mysqli_query($conn,"SELECT * FROM  miasta where id='$nr'");
    $wiersz = mysqli_fetch_array($wynik);
    echo '<b>' . $wiersz["opis_miasto"] . '</b>';
?>
</div>
</div>