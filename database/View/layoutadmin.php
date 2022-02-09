<?php

if (isset($_SESSION['user_log']) && $_SESSION['user_log'] === 'admin') {
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

        <!-- Data Table -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../lib/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        <!-- my own css -->
        <link rel="stylesheet" href="../../style.css" />

    </head>

    <!-- start header -->
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-brand">Admin Panel</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto" id="navList">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Index</a>
                    </li>

                    <li class="nav-item dropdown mx-5 px-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            List
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="adminCat.php">Category</a>
                            <a class="dropdown-item" href="adminProd.php">Product</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- end header -->

    <!-- start main -->
    <main>
        <?= $page ?>
    </main>
    <!-- end main -->

    <script type="text/javascript" src="../../lib/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../lib/js/popper.min.js"></script>
    <script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../../lib/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../../lib/js/dataTables.bootstrap4.min.js"></script>
    
    <!-- my own js -->
    <!-- <script src="../../lib/js/index.js"></script> -->
    <script src="../../lib/js/admin.js"></script>

    </body>

    </html>
<?php } else {
    header("location:index.php");
}
?>