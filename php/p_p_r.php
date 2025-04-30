<a href="index.php?strona=informacje&nr=<?php echo $_GET["l"];?>" class="back-button">← Powrót do wyboru</a>
<div class="baner-container2">
        <div class="lacznik">
            <div class="zdjecie12">
                <div class="baner-podstrona">
                    <?php
                    require("config.php");

                    $nr = $_GET["nr"];

                    $wynik = mysqli_query($conn, "SELECT * from restauracje where id = $nr");
                    $wiersz = mysqli_fetch_array($wynik);

                    $imagePath = 'zdj_restauracje/' . $wiersz["id"] . '.webp';
                    if (file_exists($imagePath)) {
                        echo '<img src="' . $imagePath . '" alt="Zdjęcie atrakcji">';
                    } else {
                        echo '<img src="zdj_restauracje/nic.webp" alt="Brak zdjęcia">';
                    }
                    ?>
                </div>
            </div>
            <div class="informacje1">
            <hr class="banner-divider">
                <h1 class="title-centered">
                <?php
                require("config.php");
                $nr = $_GET["nr"];
                $wynik = mysqli_query($conn, "SELECT * from restauracje where id = $nr");
                $wiersz = mysqli_fetch_array($wynik);
                echo '' . $wiersz["nazwa"] . '';
                ?>
                </h1>
		<hr class="banner-divider">

                <?php
                require("config.php");
                $nr = $_GET["nr"];
                $wynik = mysqli_query($conn, "SELECT * from restauracje where id = $nr");
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
								$wynik = mysqli_query($conn, "SELECT * from restauracje where id = $nr");
								$wiersz = mysqli_fetch_array($wynik);
								echo '' . $wiersz["cena"] . '';
							?>
							</td>
                            <td>
							<?php
								require("config.php");
								$nr = $_GET["nr"];
								$wynik = mysqli_query($conn, "SELECT * from restauracje where id = $nr");
								$wiersz = mysqli_fetch_array($wynik);
								echo '' . $wiersz["godz"] . '';
							?>
							</td>
                            <td>
							<?php
								require("config.php");
								$nr = $_GET["nr"];
								$wynik = mysqli_query($conn, "SELECT * from restauracje where id = $nr");
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