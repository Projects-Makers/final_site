<section>
<?php

session_unset();
session_destroy();
header("Location: index.php?strona=login/login");
?>

</section>