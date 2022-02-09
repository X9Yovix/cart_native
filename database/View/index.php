<?php
ob_start();
?>

<section id="banner-area" class="py-2">
  <div class="owl-carousel owl-theme">
    <div class="item">
      <img src="../../img/lenovo-i7.jpg" alt="Banner1" srcset="">
    </div>
    <div class="item">
      <img src="../../img/asus-zenbook.png" alt="Banner2" srcset="">
    </div>
    <div class="item">
      <img src="../../img/pc-portable-msi-modern-14-2412.jpg" alt="Banner3" srcset="">
    </div>
  </div>
</section>
<section id="promo" class="bg-light">
  <div class="container py-2 my-1">
    <h4 class="font-rubik font-size-20">Sale</h4>
    <hr>
    <div class="owl-carousel owl-theme">
      <?php foreach ($promo as $key => $value) { ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="<?= $value['image_product']; ?>" alt="product1" class="img-fluid img-thumbnail"></a>
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
      <?php } ?>
    </div>
    <!-- end carousel -->
  </div>
</section>

<?php
$page = ob_get_clean();
include('layout.php');
