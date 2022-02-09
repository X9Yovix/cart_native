<?php
ob_start();
?>

<section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Products List</h2>
            </div>
            <div class="col-12 text-right pt-3">
                <button type="button" class="btn btn-warning addproduct" name="mybutton2" data-toggle="modal" data-target="#exampleModal"> Add Product </button>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-12">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Reference</th>
                                <th>Name Product</th>
                                <th>Brand</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image Product</th>
                                <th>Promo</th>
                                <th>Quantity</th>
                                <th>Ref Category</th>
                                <th>Modify</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($prod as $key => $value) {
                            ?>
                                <tr>
                                    <td><?= $value['reference'] ?></td>
                                    <td><?= $value['name_product'] ?></td>
                                    <td><?= $value['brand'] ?></td>
                                    <td><?= $value['desc_product'] ?></td>
                                    <td><?= $value['price'] ?></td>
                                    <td><img src="<?= $value['image_product'] ?>" alt="PC" width="100" height="100" class="img-fluid"></td>
                                    <td><?= $value['promo'] ?></td>
                                    <td><?= $value['qty'] ?></td>
                                    <td><?= $value['ref_cat'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary editProduct" name="mybutton"><i class="fas fa-edit"></i> Modify </button>
                                    </td>
                                    <td><a class="btn btn-danger" href="deleteProd.php?ref=<?= $value['reference'] ?>"><i class="far fa-trash-alt"></i> Delete</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modify</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="update_id" id="update_id">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="ref_prod">Reference</label>
                                                <input type="text" name="ref_prod" id="ref_prod" class="form-control" placeholder="Enter Product Reference">
                                                <input type="hidden" name="oldRef_prod" id="oldRef_prod" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name_prod">Name Product</label>
                                                <input type="text" name="name_prod" id="name_prod" class="form-control" placeholder="Enter Product Name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="brand">Brand</label>
                                                <input type="text" name="brand" id="brand" class="form-control" placeholder="Enter Product Brand">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="desc_prod">Description</label>
                                                <textarea class="form-control" name="desc_prod" id="desc_prod" cols="30" rows="10" placeholder="Enter Product Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="number" onkeypress="return event.charCode >= 48" min="1" step="0.01" name="price" id="price" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Image Product</label>
                                                <input type="file" name="img_prod" id="img_prod" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="promo">Promo</label>
                                                <select class="form-control" name="promo" id="promo">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="qty">Quantity</label>
                                                <input type="number" onkeypress="return event.charCode >= 48" min="1" name="qty" id="qty" class="form-control" placeholder="Enter Product Name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="refCat">ref cat</label>
                                                <select class="form-control" name="refCat" id="refCat">
                                                    <?php
                                                    foreach ($showAllCat as $key => $value) {
                                                    ?>
                                                        <option value="<?php echo $value['reference']; ?>">
                                                            <?php echo $value['reference']; ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="add_product" value="1">
                                        <div class="col-12">
                                            <button type="submit" name="updatedata" class="btn btn-primary add-product">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="update_id" id="update_id">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="add_ref_prod">Reference</label>
                                                <input type="text" name="add_ref_prod" id="add_ref_prod" class="form-control" placeholder="Enter Product Reference">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="add_name_prod">Name Product</label>
                                                <input type="text" name="add_name_prod" id="add_name_prod" class="form-control" placeholder="Enter Product Name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="add_brand">Brand</label>
                                                <input type="text" name="add_brand" id="add_brand" class="form-control" placeholder="Enter Product Brand">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="add_desc_prod">Description</label>
                                                <textarea class="form-control" name="add_desc_prod" id="desc_prod" cols="30" rows="10" placeholder="Enter Product Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="add_price">Price</label>
                                                <input type="number" onkeypress="return event.charCode >= 48" min="1" step="0.01" name="add_price" id="add_price" class="form-control" placeholder="Enter Product Price">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="add_img_prod">Image Product</label>
                                                <input type="file" name="add_img_prod" id="add_img_prod" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="promo">Promo</label>
                                                <select class="form-control" name="add_promo" id="add_promo">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="qty">Quantity</label>
                                                <input type="number" onkeypress="return event.charCode >= 48" min="1" name="add_qty" id="add_qty" class="form-control" placeholder="Enter Product Quantity">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="refCat">ref cat</label>
                                                <select class="form-control" name="add_refCat" id="add_refCat">
                                                    <?php
                                                    foreach ($showAllCat as $key => $value) {
                                                    ?>
                                                        <option value="<?php echo $value['reference']; ?>">
                                                            <?php echo $value['reference']; ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="addproduct" class="btn btn-primary add-product">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
$page = ob_get_clean();
include('layoutadmin.php');
