<div class="section1">
<p>
<?php
require("../config.php");
    $wynik = mysqli_query($conn,"SELECT * FROM  miasta where id='$nr'");
    $wiersz = mysqli_fetch_array($wynik);
    echo '<b>' . $wiersz["opis_miasto"] . '</b>';
?>
</div>
</div>