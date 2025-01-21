<div class="profil-container">
<center>
<?php
require("config.php");

$sql = "SHOW TABLES";
$result = $conn->query($sql);

while ($row = $result->fetch_array()) {
    echo '<div class="table">' . $row[0] . '</div>';
}
?>
</center>
</div>