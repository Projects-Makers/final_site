<?php
require("config.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form values
    $id = $_POST['id'];
    $xnazwa = mysqli_real_escape_string($conn, $_POST['xnazwa']);
    $xlat = mysqli_real_escape_string($conn, $_POST['xlat']);
    $xlng = mysqli_real_escape_string($conn, $_POST['xlng']);
    $xopis = mysqli_real_escape_string($conn, $_POST['xopis']);

    // Update the city data in the database
    $update_query = "UPDATE miasta SET 
                     name = '$xnazwa', 
                     lat = '$xlat', 
                     lng = '$xlng', 
                     description = '$xopis' 
                     WHERE id_miasta = '$id'";

    if (mysqli_query($conn, $update_query)) {
        // If the update was successful, redirect or show a success message
        echo "<script>alert('Miasto zostało zaktualizowane!'); window.location.href='index.php?strona=admin';</script>";
    } else {
        echo "Błąd podczas aktualizacji miasta: " . mysqli_error($conn);
    }
    exit;
} else {
    echo "Błąd: Zły typ żądania.";
    exit;
}
?>
