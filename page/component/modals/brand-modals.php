<!-- Add New Brand Button Modal -->
<div class="modal fade" id="newbrandmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newBrandLabel">Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/brand.php" method="POST">
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="newBrand"placeholder="New Brand Name" name='brand_name' required/>
                        <label for="newBrand">New Brand Name</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="create">Submit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Edit Brand Modal -->
<div class="modal fade" id="editbrandmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="newBrandLabel">Edit Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/brand.php" method="POST">
                <input type="text" id="brand-id-field" name="brand_id" value="" hidden>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="editBrand" placeholder="Edit Brand Name" name="brand_name" required/>
                        <label for="editBrand">Edit Brand Name</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="edit">Save Changes</button>
                </div>
            </form>  
        </div>
    </div>
</div>

