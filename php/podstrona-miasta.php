<div class="section1">
<?php
$wynik = mysqli_query($conn,"SELECT * FROM Miasta"); 
    while ($wiersz = mysqli_fetch_array($wynik))  {
    echo'<li><span class="text"><a href="index.php?strona=podstrona-miasta&id=' . htmlspecialchars($wiersz["id"]) . '">' . htmlspecialchars($wiersz["miasto"]) . '</span>→</a></li>';
    }
    ?>
</div>