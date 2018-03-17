<!--
Names: Group 10
Assignment: Total Recall
Class: CS361-400-W2018
-->

<!-- Modal begin -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="closeEditProductModal" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Edit Product</h4>
            </div>
            <div class="modal-body">

                <!-- Disply error when add product did not work -->

                <!--
                <?php if (isset($addProductError)): ?>

                    <div id="addProductError" class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="alert alert-danger" role="alert">
                                <strong>Oops!</strong> <?php echo $addProductError; ?>
                            </div>
                        </div>
                    </div>

                <?php endif ?>
                -->
                
                <!-- Add Product form -->

                <form action="editProduct.php" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-md-10 offset-md-1 col-form-label">Name</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="text" class="form-control form-control-lg" name="product_name" placeholder="Autofill from current Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quantity" class="col-md-10 offset-md-1 col-form-label">Quantity</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="number" min=1 oninput="validity.valid||(value='');" class="form-control form-control-lg" name="quantity" placeholder="Autofill from current Quantity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-10 offset-md-1 col-form-label">Description</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="text" class="form-control form-control-lg" name="description" placeholder="Autofill from current Description">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <button class="btn btn-secondary btn-lg btn-block" type="submit">Save Product Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
