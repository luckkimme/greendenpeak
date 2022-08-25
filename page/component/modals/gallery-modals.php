<!-- Add New Image Modal -->
<div class="modal fade" id="addImg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addImgLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addImgLabel">Add New Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/gallery.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="product_id" value="<?php echo $product_id?>" hidden>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="newImg" placeholder="New Image" name='img_name' required/>
                        <label for="newImg">Image Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="newImgDesc" placeholder="New Image Name" name='img_desc'></textarea>
                        <label for="newImgDesc">Description</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" name="img_src" class="form-control" aria-describedby="" aria-label="Upload" placeholder="Select a new Picture" name="" accept="image/*" onchange="previewImage(this,'add-img')" required/>
                        <img id="add-img" class="w-100 mx-auto d-block" src="" />
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="add_img">Submit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Add New Video Modal -->
<div class="modal fade" id="addVid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addVidLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVidLabel">Add New Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <input type="text" name="product_id" value="<?php echo $product_id?>" hidden>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="newVid" placeholder="New Video" name='vid_name' required/>
                        <label for="newVid">Image Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="newVidDesc" placeholder="Edit Vid Name" name='vid_desc'></textarea>
                        <label for="newVidDesc">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="vidSrc" placeholder="Video Source" name='vid_src' required/>
                        <label for="vidSrc">Video Source</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="" id="" value="" hidden/>
                        <iframe class="w-100" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                            src="https://www.youtube.com/embed/bK-MbkKhGyw">
                        </iframe>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="">Save</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Edit Image -->
<div class="modal fade overflow-y-scroll" id="editImg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editImgLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editImgLabel">Edit Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <input type="text" name="product_id" value="<?php echo $product_id?>" hidden>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="editImg" placeholder="Edit Image" name='img_name' required/>
                        <label for="editImg">Edit Image</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="editImgDesc" placeholder="Edit Image Name" name='img_desc'></textarea>
                        <label for="editImgDesc">Description</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="" id="" value="" hidden/>
                        <input type="file" name="" class="form-control" id="" aria-describedby="" aria-label="Upload" placeholder="Select a new Picture" name="" accept="image/*" onchange=""/>
                        <img id="edit-img" class="w-100 mx-auto d-block" src="" />
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="create_category">Submit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Edit Video Modal -->
<div class="modal fade" id="editVid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editVidLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editVidLabel">Edit Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <input type="text" name="product_id" value="<?php echo $product_id?>" hidden>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="edit-vid" placeholder="Edit Video" name='vid_name' required/>
                        <label for="edit-Vid">Video Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="editVidDesc" placeholder="Edit Vid Description" name='vid_desc'></textarea>
                        <label for="editVidDesc">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="EditVidSrc" placeholder="Video Source" name='vid_src' required/>
                        <label for="EditVidSrc">Video Source</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="" id="" value="" hidden/>
                        <iframe class="w-100" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                            src="https://www.youtube.com/embed/bK-MbkKhGyw">
                        </iframe>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="">Save</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Delete Img Alert -->
<div class="modal fade" id="deleteImg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteImgLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteImgLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete "insert img name" from this list?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Vid Alert -->
<div class="modal fade" id="deleteVid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteVidLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteVidLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete "insert vid name" from this list?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>