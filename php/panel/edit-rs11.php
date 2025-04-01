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

    // Update the restaurant in the database
    $query = "UPDATE restauracje SET nazwa='$xnazwa', cena='$xcena', lokalizacja='$xlok', godz='$xgodz', opis='$xopis', lp='$xmiasto' WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Restauracja została zaktualizowana!'); window.location.href='index.php?strona=admin';</script>";
    } else {
        echo "Error updating restaurant: " . mysqli_error($conn);
    }
}
?>
