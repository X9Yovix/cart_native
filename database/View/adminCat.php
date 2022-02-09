<?php
ob_start();
?>

<section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Category List</h2>
            </div>
            <div class="col-12 text-right pt-3"">
                    <button type=" button" class="btn btn-warning addcategory" name="mybutton2" data-toggle="modal" data-target="#exampleModal"> Add Category </button>
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
                                <th>Name</th>
                                <th>Modify</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($cat as $key => $value) {
                            ?>
                                <tr>
                                    <td><?= $value['reference'] ?></td>
                                    <td><?= $value['name_cat'] ?></td>

                                    <td>
                                        <button type="button" class="btn btn-primary editbtn" name="mybutton"><i class="fas fa-edit"></i> Modify </button>
                                    </td>
                                    <td><a class="btn btn-danger" href="deleteCat.php?ref=<?= $value['reference'] ?>"><i class="far fa-trash-alt"></i> Delete</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <label>Reference</label>
                                                <input type="text" name="ref_cat" id="ref_cat" class="form-control" placeholder="Enter Category Reference">
                                                <input type="hidden" name="old_ref" id="old_ref" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Name Category</label>
                                                <input type="text" name="name_cat" id="name_cat" class="form-control" placeholder="Enter Category Name">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="update_id" id="update_id">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Reference</label>
                                                <input type="text" name="add_ref_cat" id="add_ref_cat" class="form-control" placeholder="Enter Category Reference">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Name Category</label>
                                                <input type="text" name="add_name_cat" id="add_name_cat" class="form-control" placeholder="Enter Category Name">
                                            </div>
                                        </div>

                                        <input type="hidden" name="add_product" value="1">
                                        <div class="col-12">
                                            <button type="submit" name="addcategory" class="btn btn-primary add-product">Add</button>
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
