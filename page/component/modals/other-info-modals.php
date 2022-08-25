<!-- Add New Category Button Modal -->
<div class="modal fade" id="newcategorymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newCategoryLabel">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/other-info.php" method="POST">
                <input type="text" name="product_id" value="<?php echo $product_id?>" hidden>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="newCateg" placeholder="New Category Name" name='categ_name' required/>
                        <label for="newBrand">New Category Name</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="create_category">Submit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Edit Product Other Information per Item -->
<div class="modal fade" id="editOtherInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editOtherInfoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editOtherInfoLabel">Edit Other Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/other-info.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="titleOtherInfo" placeholder="Other Info Item Title">
                        <label for="titleOtherInfo">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="subtitleOtherInfo" placeholder="Other Info Item Subtitle">
                        <label for="subtitleOtherInfo">SubTitle</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Description" id="textDesc"></textarea>
                        <label for="textDesc">Description <small>(In Paragraph)</small></label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control col-md-12" placeholder="Description" id="textDescList"></textarea>
                        <label for="textDesc">Description <small>(In List)</small></label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="product_other_info_img" value="" hidden/>
                        <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture" name="" accept="image/*" />
                        <img id="" class="w-100 mx-auto d-block" src="" />
                    </div>    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="method" value="delete" onclick="return confirm('Are you sure you want to delete?')">Delete Item</button>
                    <button type="submit" class="btn btn-primary" name="method" value="edit">Save</button>
                </div>   
            </form>
            
        </div>
    </div>
</div>

<!-- ADD Product Other Information per Item -->
<div class="modal fade" id="addOtherInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addOtherInfoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOtherInfoLabel">Add Other Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="addTitleOtherInfo" placeholder="Other Info Item Title">
                    <label for="titleOtherInfo">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="addSubtitleOtherInfo" placeholder="Other Info Item Subtitle">
                    <label for="subtitleOtherInfo">SubTitle</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Description" id="addTextDesc"></textarea>
                    <label for="textDesc">Description <small>(In Paragraph)</small></label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control col-md-12" placeholder="Description" id="addTextDescList"></textarea>
                    <label for="textDesc">Description <small>(In List)</small></label>
                </div>
                <div class="input-group">
                    <input type="text" name="product_other_info_img" value="" hidden/>
                    <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture" name="" accept="image/*" />
                    <img id="" class="w-100 mx-auto d-block" src="" />
                </div>    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Delete Item</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Alert -->
<div class="modal fade" id="deleteCateg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteCategLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete "insert category title" from this list?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>