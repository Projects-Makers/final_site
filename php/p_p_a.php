<section>
    <div class="baner-container2">
        <div class="lacznik">
            <div class="zdjecie12">
                <div class="city-card-info">
                    <?php
                    require("config.php");

                    $nr = $_GET["nr"];

                    $wynik = mysqli_query($conn, "SELECT * from atrakcje where id = $nr");
                    $wiersz = mysqli_fetch_array($wynik);

                    $imagePath = 'zdj_atrakcje/' . $wiersz["id"] . '.webp';
                    if (file_exists($imagePath)) {
                        echo '<img src="' . $imagePath . '" alt="Zdjęcie atrakcji">';
                    } else {
                        echo '<img src="zdj_atrakcje/nic.webp" alt="Brak zdjęcia">';
                    }
                    ?>
                </div>
            </div>
            <div class="informacje1">
                <hr class="hr-czcionki1">
                <?php
                require("config.php");
                $nr = $_GET["nr"];
                $wynik = mysqli_query($conn, "SELECT * from atrakcje where id = $nr");
                $wiersz = mysqli_fetch_array($wynik);
                echo '' . $wiersz["nazwa"] . '';
                ?>
                <hr class="hr-czcionki1">
                <?php
                require("config.php");
                $nr = $_GET["nr"];
                $wynik = mysqli_query($conn, "SELECT * from atrakcje where id = $nr");
                $wiersz = mysqli_fetch_array($wynik);
                echo '' . $wiersz["opis"] . '';
                ?>
                <table class="tabela">
                    <thead>
                        <tr>
                            <th>Cena</th>
                            <th>Godzina</th>
                            <th>Lokalizacja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
							<?php
								require("config.php");
								$nr = $_GET["nr"];
								$wynik = mysqli_query($conn, "SELECT * from atrakcje where id = $nr");
								$wiersz = mysqli_fetch_array($wynik);
								echo '' . $wiersz["cena"] . '';
							?>
							</td>
                            <td>
							<?php
								require("config.php");
								$nr = $_GET["nr"];
								$wynik = mysqli_query($conn, "SELECT * from atrakcje where id = $nr");
								$wiersz = mysqli_fetch_array($wynik);
								echo '' . $wiersz["godz"] . '';
							?>
							</td>
                            <td>
							<?php
								require("config.php");
								$nr = $_GET["nr"];
								$wynik = mysqli_query($conn, "SELECT * from atrakcje where id = $nr");
								$wiersz = mysqli_fetch_array($wynik);
								echo '' . $wiersz["lokalizacja"] . '';
							?>
							</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
