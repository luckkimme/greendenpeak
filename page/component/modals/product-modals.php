<!-- Add New Product Button Modal -->
<div class="modal fade" id="addProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newBrandLabel"> Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/greendenpeak/includes/api/product.php" method="POST">
                    <input type="text" name="brand_id" value="<?php echo $brand_id;?>" hidden>
                    <div class="form-floating">
                        <input class="form-control" id="newProd" placeholder="New Product Name" name="product_name" required></input>
                        <label for="newProd">New Product Name</label>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="method" value="create">Add</button>
                    </div>
                </form>
                
        </div>
    </div>
</div>
