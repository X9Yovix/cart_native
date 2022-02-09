<?php
/* session_start(); */
if (!isset($_SESSION['user_log'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Basket</title>
        <link rel="shortcut icon" href="../../img/logo.png" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="../../lib/css/bootstrap.min.css" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../lib/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        <!-- my own css -->
        <link rel="stylesheet" href="../../style.css" />

    </head>

    <!-- start main -->
    <main>
        <?= $page ?>
    </main>
    <!-- end main -->

    <script type="text/javascript" src="../../lib/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../lib/js/popper.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>

    <!-- my own js -->
    <script src="../../lib/js/index.js"></script>
    <script src="../../lib/js/admin.js"></script>

    </body>

    </html>
<?php } else {
    header("location:index.php");
}
