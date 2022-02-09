<?php
ob_start();
?>

<div class="container">
    <div class="row">
        <div class="col-12 pt-5">
            <h3 class="color-primary text-center">Search</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <form class="d-flex posSearch" method="POST" action="">
                    <input class="form-control col-4" type="text" name="searchinput" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success ml-2 col-2" name="searchbtn" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row pt-2">
        <?php
        foreach ($res as $key => $value) { ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="col-3">
                <div class="item py-2">
                    <div class="product font-raleway">
                        <a href="#"><img src="<?= $value['image_product']; ?>" alt="product1" class="img-fluid img-thumbnail"></a>
                        <?php if ($value['promo'] == "yes") { ?>
                            <img src="../../img/promo.png" class="promoImg" alt="">
                        <?php } ?>
                        <div class="text-center">
                            <h6 class="mt-4 font-size-14"><?= $value['name_product']; ?></h6>

                            <div class="price ">
                                <span class='text-success pricedarkmode'><?= $value['price']; ?> DT</span>
                            </div>

                            <button type="submit" class="btn btn-warning font-size-12" value="addToCart" name="addToCart"><i class="fas fa-cart-plus"></i> Add to cart</button>
                            <a href="details.php?ref=<?= $value['reference']; ?>"><button type="button" class="btn btn-warning font-size-12" value="ok" name="ok"><i class="fas fa-info-circle"></i> Details</button></a>

                            <input type="hidden" value="<?= $value['reference']; ?>" name="reference">
                            <input type="hidden" value="<?= $value['price']; ?>" name="price">
                        </div>
                    </div>
                </div>
            </form>
        <?php }

        ?>
    </div>

</div>

<?php
$page = ob_get_clean();
include('layout.php');
