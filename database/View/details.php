<?php
ob_start();
?>

<!-- start product -->
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <?php
            foreach ($find as $key => $value) {
            }
            ?>
            <div class="col-sm-6">
                <img src="<?= $value['image_product'] ?>" alt="product" class="img-fluid">
                <form action="" method="post">
                    <div class="form-row pt-4 font-size-16 font-baloo">
                        <div class="col-12">
                            <button type="submit" class="btn-danger form-control" name="addToCart">Add to cart</button>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $value['reference']; ?>" name="reference">
                    <input type="hidden" value="<?= $value['price']; ?>" name="price">
                </form>
            </div>
            <div class="col-sm-6">
                <!-- start Title -->
                <h5 class="font-baloo font-size-20"><?= $value['name_product'] ?></h5>
                <small>By <?= $value['brand'] ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <a href="#" class="font-size-14 px-2 font-raleway">1000 ratings</a>
                </div>
                <hr class="m-0">
                <!-- end Title -->
                <div class="pt-2">
                    <div>
                        <h5 class="font-raleway"><?= $value['desc_product'] ?></h5>
                    </div>
                </div>
                <!-- start Price -->
                <div class="pt-2">
                    <table class="my-3">
                        <tr class="font-raleway font-size-14">
                            <td>Price: </td>
                            <td class="font-size-20 text-danger pb-2 pl-2"><span class="pricedarkmode"> <?= $value['price'] ?></span></td>
                        </tr>
                    </table>
                </div>
                <!-- end Price -->

                <!-- start Terms-->
                <div id="delivery">
                    <div class="d-flex pt-2">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <span class="font-raleway font-size-12">10 Days Replacement</span>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <span class="font-raleway font-size-12">Free shipping with 300DT purchase</span>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-secondary">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <span class="font-raleway font-size-12">1 Year Warranty</span>
                        </div>
                    </div>
                </div>
                <!-- end Terms-->

                <!-- start Order-->
                <div id="ordr-details" class="d-flex flex-column text-dark font-raleway pt-4">
                    <small class="font-size-16 pt-1 ml-2">Delivery by
                        <?php $start = date("m/d");
                        echo ($start); ?> - <?= date('m-d', strtotime('+7 day', strtotime($start))); ?> </small>
                </div>
                <!-- end Order-->
            </div>
        </div>
    </div>
</section>
<!-- end product -->

<?php
$page = ob_get_clean();
include("layout.php");
