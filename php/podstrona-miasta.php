<div class="section1">
<?php
$wynik = mysqli_query($conn,"SELECT * FROM Miasta"); 
$wiersz = mysqli_fetch_array($wynik);
    echo '<b>' . $wiersz["miasto"] . '</b>';
    ?>
</div>