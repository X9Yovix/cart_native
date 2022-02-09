<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Basket</title>
    <link rel="shortcut icon" href="../../img/logo.png" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../lib/css/dark-mode.css" />

    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../lib/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../lib/css/owl.theme.default.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../lib/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- my own css -->
    <link rel="stylesheet" href="../../style.css" />

</head>

<!-- start header -->
<header id="header" class="header_main">
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php"><img src="../../img/logo.png" alt="" width="70" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item px-5">
                    <a class="nav-link" href="index.php">
                        <div class="pullUp1">
                            Home
                        </div>
                    </a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" href="allProducts.php">
                        <div class="pullUp2">
                            All Products
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown pr-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="category_pc.php">PC</a>
                        <a class="dropdown-item" href="category_sp.php">Smart Phone</a>
                    </div>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="searchRes.php">
                        <div class="pullUp3">
                            Search
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown ml-5 px-5">
                    <?php if (isset($_SESSION['user_log']) && $_SESSION['user_log'] === 'admin') { ?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAdmin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class=""><img src="../../img/admin.svg" width="40" height="30" alt="login"><?= $_SESSION['user_log'] ?></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarAdmin">
                            <a class="dropdown-item" href="./adminCat.php">Admin Panel</a>
                            <a class="dropdown-item" href="./logout.php">Disconnect</a>
                        </div>
                    <?php } elseif (isset($_SESSION['user_log']) && $_SESSION['user_log'] !== 'admin') { ?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAdmin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class=""><img src="../../img/user.svg" width="40" height="30" alt="login"><?= $_SESSION['user_log'] ?></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarAdmin">
                            <a class="dropdown-item" href="./cart.php">Cart</a>
                            <a class="dropdown-item" href="./logout.php">Disconnect</a>
                        </div>

                    <?php } else { ?>
                        <a class="nav-link" href="./login.php"><span class="px-5"><i class="fas fa-user pr-2"></i>Login</span></a>
                    <?php } ?>
                </li>
                <li class="nav-item pt-2">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                    </div>
                </li>
            </ul>
            <form action="#" method="POST" class="font-size-14 font-raleway ml-5 px-5" style="margin-left:15% !important;">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg countLink">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                        echo ('<span class="px-3 py-2 rounded-pill text-dark bg-light total_price" id="total_items">' . $count . '</span>');
                    } else {
                        echo ('<span class="px-3 py-2 rounded-pill text-dark bg-light total_price" id="total_items">0</span>');
                    }
                    ?>
                </a>
            </form>
        </div>
    </nav>
    <!-- end navbar -->
</header>
<!-- end header -->

<!-- start main -->
<main>
    <?= $page ?>
</main>
<!-- end main -->
<!-- start footer -->
<footer id="footer" class="bg-light py-5 mt-5">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <h4 class="font-rubik font-size-20">Name</h4>
                <p class="font-size-14 descComp font-raleway text-black-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat voluptas quibusdam, ratione officiis vel alias architecto officia nulla consequatur repudiandae placeat ea fugit minus atque esse dolore delectus? Veniam, aspernatur?</p>
            </div>
            <div class="col-md-2 col-sm-12">
                <h4 class="font-rubik font-size-20">My Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-size-14 descComp font-raleway text-black-50 pt-2">My Account</a>
                    <a href="#" class="font-size-14 descComp font-raleway text-black-50 pt-2">Cart</a>
                    <a href="#" class="font-size-14 descComp font-raleway text-black-50 pt-2">Order History</a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 text-center">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1SqgZAMK2akuSv2UUE1BA3XqYzONFj4ym" width="640" height="480"></iframe>
            </div>
            <div class="col-md-2 col-sm-12 text-center" style="margin-left: 252px ;">
                <h4 class="font-rubik font-size-20">Follow us</h4>
                <div class="d-flex flex-column flex-wrap" id="lab_social_icon_footer">
                    <a href="#" class="font-size-14 font-raleway descComp text-black-50 pb-1"><i class="fab fa-facebook fa-5x social" id="social-fb"></i><br>Facebook</a>
                    <a href="#" class="font-size-14 font-raleway descComp text-black-50 pb-1"><i class="fab fa-instagram fa-5x social" id="social-in"></i><br>Instagram</a>
                    <a href="#" class="font-size-14 font-raleway descComp text-black-50 pb-1"><i class="fab fa-twitter fa-5x social" id="social-tw"></i><br>Twitter</a>
                </div>
            </div>
        </div>
    </div>

</footer>

<div class="copyright text-center bg-dark text-white py-2">
    E-Basket <?= date("Y"); ?><i class="color-secondary fa fa-copyright px-1 pt-1" aria-hidden="true"> </i></span>All rights reserved
</div>
<!-- end footer -->

<!-- includes -->
<script type="text/javascript" src="../../lib/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../../lib/js/popper.min.js"></script>
<script type="text/javascript" src="../../lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../lib/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../../lib/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="../../lib/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../lib/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../../lib/js/dark-mode-switch.min.js"></script>

<!-- my own js -->
<script src="../../lib/js/index.js"></script>
<script src="../../lib/js/admin.js"></script>

</body>

</html>