<aside>
<div class="pismo">Wyszukaj nazwę miasta:</div>
<div class="search">
<input type="search" class="searchbar" id="searchInput"></input>
</div>
<hr style="width: 300px; height: 1px; background-color: gray; "></hr>
<div class="info"> 
<div class="Miasta">Miasta:</div>
<ul> 
<?php
$wynik = mysqli_query($conn,"SELECT * FROM Miasta"); 
while ($wiersz = mysqli_fetch_array($wynik)) {
    echo '<li><span class="text">';
    echo '<a href="index.php?strona=podstrona-miasta&id=' . htmlspecialchars($wiersz["id"]) . '">';
    echo htmlspecialchars($wiersz["miasto"]);
    echo '</a></span> →</li>';
}
// (wstępnie do wyjebania) ----> echo'  <div class="Miasta">Miejscowosc:</div>' ;
// //   $wynik = mysqli_query($conn,"SELECT * FROM miasta where miejscowosc=2"); 
// //   while ($wiersz = mysqli_fetch_array($wynik)) 
// //  {
// //   echo'<li><span class="text"><a href="index.php?strona=cos&id=' . htmlspecialchars($wiersz["id"]) . '">' . htmlspecialchars($wiersz["miasto"]) . '</span>→</a></li>';
// //   }
 // (wstępnie do wyjebania) ----> echo'  <div class="Miasta">Wieś:</div>' ;
// //   $wynik = mysqli_query($conn,"SELECT * FROM miasta where miejscowosc=3"); 
// //   while ($wiersz = mysqli_fetch_array($wynik))
// //  {
// //   echo'<li><span class="text"><a href="index.php?strona=cos&id=' . htmlspecialchars($wiersz["id"]) . '">' . htmlspecialchars($wiersz["miasto"]) . '</span>→</a></li>';
// //   } 
?>
</ul>
</div> 
<hr style="width: 300px; height: 1px; background-color: gray; "></hr>
<!-- Przerwa jest tu po to bo mnie wkurza kod do przycisku by Purple -->
</aside>
<!-- <script>
// Pobierz elementy
const searchInput = document.getElementById('searchInput');
const cityList = document.querySelector('.info ul'); 

// Funkcja do filtrowania miast
searchInput.addEventListener('input', function() {
    const filter = searchInput.value.toLowerCase();
    const cities = cityList.getElementsByTagName('li');

    for (let i = 0; i < cities.length; i++) {
        const cityName = cities[i].textContent.toLowerCase();
        if (cityName.includes(filter)) {
            cities[i].style.display = ""; // Pokazuje miasto
        } else {
            cities[i].style.display = "none"; // Ukrywa miasto
        }
    }
});
</script> -->
