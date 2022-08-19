<script src="/asset/js/textarea-bullets.js">console.log('try');</script>
<!-- Add New Brand Button Modal -->
<div class="modal fade" id="newbrandmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newBrandLabel">Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="newBrand"placeholder="New Brand Name" required></input>
                    <label for="newBrand">New Brand Name</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
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
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="editBrand" placeholder="Edit Brand Name" required></input>
                    <label for="editBrand">Edit Brand Name</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Add New Product Button Modal -->
<div class="modal fade" id="addProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newBrandLabel"> Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="newProd" placeholder="New Product Name" required></input>
                    <label for="newProd">New Product Name</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Productinfo Modal -->
<div class="modal fade" id="editProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="newBrandLabel"> Edit Product Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating my-3">
                    <input class="form-control"id="proName" placeholder="Product Name" required></input>
                    <label for="proName">Product Name</label>
                </div>
                <div class="form-floating my-3">
                    <textarea class="form-control" id="proDesc" placeholder="Product Description"></textarea>
                    <label for="proDesc">Product Description (Paragraph)</label>
                </div>
                <div class="form-floating my-3">
                    <textarea class="form-control" id="proDescList" onkeyup="handleInput(event)" placeholder="Product Description"></textarea>
                    <label for="proDescList">Product Description (List)</label>
                </div>
                <div class="form-floating my-3">
                    <input class="form-control" id="Product Purchase Button Name" placeholder="Product Purchase Button Name"></input>
                    <label for="Product Purchase Button Name">Product Purchase Button Name</label>
                </div>
                <p class="modal-titles text-center">Select a new Photo</p>
                <div class="input-group my-3">
                    <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Features Modal -->
<div class="modal fade modal-fullscreen-md-down" id="editFeaturesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="newBrandLabel"> Edit Features</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Main Title" placeholder="Main Title" required></input>
                    <label for="Main Title">Main Title</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <textarea class="form-control" id="Product Description (1 Paragraph)" style="height: 100px" placeholder="Product Description (1 Paragraph)" required></textarea>
                    <label for="Product Description (1 Paragraph)">Product Description (1 Paragraph)</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <textarea class="form-control" id="subProduct Description (1 Paragraph)" style="height: 100px" placeholder="Product Description (1 Paragraph)" required></textarea>
                    <label for="subProduct Description (1 Paragraph)">Product Description (1 Paragraph)</label>
                </div>
            </div>
            <p class="modal-titles text-center">Select a new Photo</p>
            <div class="input-group modal-body">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
            </div>
            <hr>
            <p class="modal-titles text-center">Features Carousel</p>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Title" placeholder="Carousel Title" required></input>
                    <label for="Carousel Title">Carousel Title</label>
                </div>
            </div>
            <hr>
            <p class="modal-titles text-center">Carousel Item</p>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Item Title" placeholder="Carousel Item Title" required></input>
                    <label for="Carousel Item Title">Carousel Item Title</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Description" placeholder="Carousel Description" required></input>
                    <label for="Carousel Description">Carousel Description</label>
                </div>
            </div>
            <p class="modal-titles text-center">Select a new Photo</p>
            <div class="input-group modal-body">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
            </div>
            <div class="input-group modal-body">
                <button type="button" class="btn btn-secondary btn-sm">Delete Item</button>
            </div>
            <hr>
            <p class="modal-titles text-center">Carousel Item (1)</p>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Item (1)" placeholder="Carousel Item (1)" required></input>
                    <label for="Carousel Item (1)">Carousel Item (1)</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Description (1)" placeholder="Carousel Description (1)" required></input>
                    <label for="Carousel Description (1)">Carousel Description (1)</label>
                </div>
            </div>
            <p class="modal-titles text-center">Select a new Photo</p>
            <div class="input-group modal-body">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
            </div>
            <div class="input-group modal-body">
                <button type="button" class="btn btn-secondary btn-sm">Delete Item</button>
            </div>

            <hr>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newFeature1" aria-expanded="false" aria-controls="collapseExample">+New Carousel Item</button>
            </div>
            <div class="modal-body collapse" id="newFeature1">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Item Title" placeholder="Carousel Item Title" required></input>
                    <label for="Carousel Item Title">Carousel Item Title</label>
                </div>
            </div>
            <div class="modal-body collapse" id="newFeature1">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Description" placeholder="Carousel Description" required></input>
                    <label for="Carousel Description">Carousel Description</label>
                </div>
            </div>
            <p class="modal-titles text-center collapse" id="newFeature1">Select a new Photo</p>
            <div class="input-group modal-body collapse" id="newFeature1">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
            </div>
            <div class="input-group modal-body collapse" id="newFeature1">
                <button type="button" class="btn btn-secondary btn-sm">Save Item</button>
            </div>
            <hr>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>  
        </div>
    </div>
</div>

<!-- Edit Kit Modal -->
<div class="modal fade" id="editKitModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="newBrandLabel"> Edit Specification / Kit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Main Title" placeholder="Main Title" required></input>
                    <label for="Main Title">Main Title</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <textarea class="form-control" id="Subtitle (optional)" style="height: 100px" placeholder="Subtitle (optional)" required></textarea>
                    <label for="Subtitle (optional)">Subtitle (optional)</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Standard Kit Title" placeholder="Standard Kit Title" required></input>
                    <label for="Standard Kit Title">Standard Kit Title</label>
                </div>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newKit1" aria-expanded="false" aria-controls="collapseExample">+New Standard Kit Item</button>
            </div>
            <div class="input-group modal-body collapse" id="newKit1">
                <div class="form-floating">
                    <input class="form-control" style="width: 390px" id="Standard Kit Item" placeholder="Standard Kit Item" required></input>
                    <label for="Standard Kit Item">Standard Kit Item</label>
                </div>
                <button type="button" class="btn btn-secondary">Delete</button>
            </div>
            <hr>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Optional Kit Title" placeholder="Optional Kit Title" required></input>
                    <label for="Optional Kit Title">Optional Kit Title</label>
                </div>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newKit2" aria-expanded="false" aria-controls="collapseExample">+New Optional Kit Item</button>
            </div>
            <div class="input-group modal-body collapse" id="newKit2">
                <div class="form-floating">
                    <input class="form-control" style="width: 390px" id="Optional Kit Item" placeholder="Optional Kit Item" required></input>
                    <label for="Optional Kit Item">Optional Kit Item</label>
                </div>
                <button type="button" class="btn btn-secondary">Delete</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Accessories Modal -->
<div class="modal fade" id="editAccessoriesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="newBrandLabel"> Edit Accessories</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Main Title" placeholder="Main Title" required></input>
                    <label for="Main Title">Main Title</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <textarea class="form-control" id="Subtitle (optional)" placeholder="Subtitle (optional)" required></textarea>
                    <label for="Subtitle (optional)">Subtitle (optional)</label>
                </div>
            </div>
            <hr>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Accessory Item Title" placeholder="Accessory Item Title" required></input>
                    <label for="Accessory Item Title">Accessory Item Title</label>
                </div>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newAccessories1" aria-expanded="false" aria-controls="collapseExample">+New Paragraph</button>
            </div>
            <div class="input-group modal-body collapse" id="newAccessories1">
                <div class="form-floating">
                    <input class="form-control" style="width: 390px" id="Accessory Description (Paragraph)" placeholder="Accessory Description (Paragraph)" required></input>
                    <label for="Accessory Description (Paragraph)">Accessory Description (Paragraph)</label>
                </div>
                <button type="button" class="btn btn-secondary">Delete</button>
            </div>
            <hr>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Accessory Item Title" placeholder="Accessory Item Title" required></input>
                    <label for="Accessory Item Title">Accessory Item Title</label>
                </div>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newAccessories2" aria-expanded="false" aria-controls="collapseExample">+New Description</button>
            </div>
            <div class="input-group modal-body collapse" id="newAccessories2">
                <div class="form-floating">
                    <input class="form-control" style="width: 390px" id="Accessory Description (List)" placeholder="Accessory Description (List)" required></input>
                    <label for="Accessory Description (List)">Accessory Description (List)</label>
                </div>
                <button type="button" class="btn btn-secondary">Delete</button>
            </div>
            <hr>
            <p class="modal-titles text-center">Select a new Photo</p>
            <div class="input-group modal-body">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Other Info Modal -->
<div class="modal fade" id="editOtherModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="newBrandLabel"> Edit Other Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Main Title (Keyword From Database" placeholder="Main Title (Keyword From Database" required></input>
                    <label for="Main Title (Keyword From Database">Main Title (Keyword From Database</label>
                </div>
            </div>
            <hr>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Other Information Title" placeholder="Other Information Title" required></input>
                    <label for="Other Information Title">Other Information Title</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Other Information Subtitle" placeholder="Other Information Subtitle" required></input>
                    <label for="Other Information Subtitle">Other Information Subtitle</label>
                </div>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newOther1" aria-expanded="false" aria-controls="collapseExample">+New Paragraph for Description</button>
            </div>
            <div class="modal-body collapse" id="newOther1">
                <div class="form-floating">
                    <input class="form-control" id="Description (Paragraph)" placeholder="Description (Paragraph)" required></input>
                    <label for="Description (Paragraph)">Description (Paragraph)</label>
                </div>
            </div>
            <hr>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newOther2" aria-expanded="false" aria-controls="collapseExample">+New list item for Description</button>
            </div>
            <div class="modal-body collapse" id="newOther2">
                <div class="form-floating">
                    <input class="form-control" id="Description (List)" placeholder="Description (List)" required></input>
                    <label for="Description (List)">Description (List)</label>
                </div>
            </div>
            <hr>
            <p class="modal-titles text-center">Select a new Photo</p>
            <div class="input-group modal-body">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>