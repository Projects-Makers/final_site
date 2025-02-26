<?php
require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $xnazwa = $_POST["xnazwa"];
    $xcena = $_POST["xcena"];
    $xlok = $_POST["xlok"];
    $xgodz = $_POST["xgodz"];
    $xmiasto = $_POST["xmiasto"];
    $xopis = $_POST["xopis"];

    // Update the attraction in the database
    $query = "UPDATE atrakcje SET nazwa='$xnazwa', cena='$xcena', lokalizacja='$xlok', godz='$xgodz', id_miasta='$xmiasto', opis='$xopis' WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) {
        header("Location: index.php?strona=srodek");
    } else {
        echo "Error updating attraction: " . mysqli_error($conn);
    }
}
?>
