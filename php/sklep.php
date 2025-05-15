<div class="baner-container2">
        <div class="lacznik">
		<a href="index.php?strona=srodek&nr=<?php echo $_GET["nr"];?>" class="back-button">← Powrót do wyboru</a>
            <div class="zdjecie12">
                <div class="baner-podstrona">
                    <?php
                    require("config.php");

                    $nr = $_GET["nr"];

                    $wynik = mysqli_query($conn, "SELECT * from wycieczki where id = $nr");
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
            <hr class="banner-divider">
                <h1 class="title-centered">
                <?php
                require("config.php");
                $nr = $_GET["nr"];
                $wynik = mysqli_query($conn, "SELECT * from wycieczki where id = $nr");
                $wiersz = mysqli_fetch_array($wynik);
                echo '' . $wiersz["nazwa"] . '';
                ?>
                </h1>
		<hr class="banner-divider">

                <?php
                require("config.php");
                $nr = $_GET["nr"];
                $wynik = mysqli_query($conn, "SELECT * from wycieczki where id = $nr");
                $wiersz = mysqli_fetch_array($wynik);
                echo '' . $wiersz["opis"] . '';
                ?>
            </div>
			
        </div>
		                <table class="tabela">
                    <thead>
                        <tr>
                            <th>Cena</th>
                            <th>Czas Trwania</th>
                            <th>Dystans wycieczki</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
							<?php
								require("config.php");
								$nr = $_GET["nr"];
								$wynik = mysqli_query($conn, "SELECT * from wycieczki where id = $nr");
								$wiersz = mysqli_fetch_array($wynik);
								echo '' . $wiersz["cena"] . '';
							?>
							</td>
                            <td>
							<?php
								require("config.php");
								$nr = $_GET["nr"];
								$wynik = mysqli_query($conn, "SELECT * from wycieczki where id = $nr");
								$wiersz = mysqli_fetch_array($wynik);
								echo '' . $wiersz["czas_trwania"] . '';
							?>
							</td>
                            <td>
							<?php
								require("config.php");
								$nr = $_GET["nr"];
								$wynik = mysqli_query($conn, "SELECT * from wycieczki where id = $nr");
								$wiersz = mysqli_fetch_array($wynik);
								echo '' . $wiersz["dystans"] . ' km';
							?>
							</td>
                        </tr>
                    </tbody>
                </table>
		<center>
		Po więcej informacji na temat wycieczki dzwonić pod numer: <b>111111111111</b>
		</center>
    </div>