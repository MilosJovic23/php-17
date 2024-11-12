


<?php

    if ( session_status() == PHP_SESSION_NONE  ) {
        session_start();
    }


?>

<!doctype html>
<html lang="en">
    <head>
        <title>Document</title>
    </head>
    <body>

    <?php if (isset($_SESSION['ime'] )) : ?>
        <p>pozdrav <?= $_SESSION['ime']; ?></p>
        <a href="prekiniSesiju.php">obrisi sesiju</a>
    <?php else: ?>

    <form action="logika.php" method="POST">
        <input type="text" name="ime">
        <button type="submit">zapamti me</button>
    </form>

    <?php endif; ?>



    </body>
</html>