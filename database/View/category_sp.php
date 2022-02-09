<?php
ob_start();
?>

<!-- start category -->
<section id="category" class="py-3">
    <div class="container">
        <h4 class="font-rubik font-size-20">Category Smart Phone</h4>
        <hr>
        <div class="button-group text-right font-baloo font-size-16" id="filters">
            <button class="btn is-checked btn-isotop" data-filter="*">All Brand</button>
            <button class="btn btn-isotop" data-filter=".Samsung">Samsung</button>
            <button class="btn btn-isotop" data-filter=".Huawei">Huawei</button>
            <button class="btn btn-isotop" data-filter=".Apple">Apple</button>
        </div>
        <div class="grid">
            <?php foreach ($showSpSamsung as $key => $value) { ?>
                <div class="grid-item Samsung col-3">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="">
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
                </div>
            <?php } ?>
            <?php foreach ($showSpHuawei as $key => $value) { ?>
                <div class="grid-item Huawei col-3">
                    <form action="" method="post" class="">
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
                </div>
            <?php } ?>
            <?php foreach ($showSpApple as $key => $value) { ?>
                <div class="grid-item Apple col-3">
                    <form action="" method="post" class="">
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
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end category -->

<?php
$page = ob_get_clean();
include("layout.php");
