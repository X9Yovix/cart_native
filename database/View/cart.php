<?php
ob_start();
?>

<!-- start cart section -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20 mt-5">Shopping cart</h5>
        <hr>
        <?php
        //calcul total
        $total = 0;
        if (isset($_SESSION['cart'])) {
        ?>
            <div class="row">
                <div class="col-9">
                    <?php foreach ($_SESSION['cart'] as $key_cart => $value_cart) {
                        $articleInCart = $mp->findSession($value_cart['reference']); ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="frmCartEdit" id="form">
                            <div class="row py-3 mt-3">
                                <div class="col-2 py-3">
                                    <img src="<?= $articleInCart['image_product']; ?>" style="height: 120px;" class="img-fluid" alt="cart" srcset="">
                                </div>
                                <div class="col-8 py-3" id="hidearr">
                                    <h5 class="font-raleway font-size-20"><?= $articleInCart['name_product'] ?></h5>
                                    <small class="">By <?= $articleInCart['brand']; ?></small>
                                    <div class="rating text-warning font-size-12 pt-1">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-2">
                                            <a class="pmqty" href="plusqty.php?ref=<?= $value_cart['reference']; ?>"><input type="button" class="form-control" name="plus" id="plus" value="+"></a>
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" name="qty" id="qty" value="<?= $value_cart['qty'] ?>">
                                        </div>
                                        <div class="col-2">
                                            <a class="pmqty" href="minusqty.php?ref=<?= $value_cart['reference']; ?>"><input type="button" class="form-control" name="minus" id="minus" value="-"></a>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" name="delete" value="<?= $articleInCart['reference']; ?>" class="btn font-baloo text-danger px-3 border">Delete</button>
                                        </div>
                                    </div>

                                </div>
                                <div>

                                </div>
                                <div class="col-2 py-4">
                                    <div class="font-size-20 font-raleway text-danger">
                                        <span class="product_price"><?= $articleInCart['price'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
                <!-- start total -->
                <div class="col-3">
                    <?php
                    //if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $total += $value['price'] * $value['qty'];
                    }
                    if (!count($_SESSION['cart']) == 0) {
                    ?>
                        <form action="" method="POST">
                            <button type="submit" name="deleteAll" class="btn font-baloo text-danger px-3 border">Clear All</button>
                        </form>
                        <div class="total border text-center mt-2">
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20"> Total <?= count($_SESSION['cart']) ?> items: <span class="text-danger">
                                        <?= $total ?></span></h5>
                                <button type="submit" class="btn btn-warning mt-3">Proceed To Buy</button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php
        }
        //print_r($_SESSION['cart']);
        if (empty($_SESSION['cart'])) {
            echo ('<h5 class="font-baloo font-size-20">Your cart is empty</h5>');
        }
        ?>
        <!-- end total -->
    </div>
</section>
<!-- end cart section -->

<?php
$page = ob_get_clean();
include("layout.php");
