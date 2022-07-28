<!-- Add New Brand Button Modal -->
<div class="modal fade" id="newbrandmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newBrandLabel"> Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input class="form-control" placeholder="New Brand Name"></input>
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
                <h5 class="modal-title text-center" id="newBrandLabel"> Edit Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input class="form-control" placeholder="New Brand Name"></input>
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
                <input class="form-control" placeholder="Product Name"></input>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Product Description"></textarea>
            </div>
            <div class="modal-body">
                <input class="form-control" placeholder="Product Purchase Button Name"></input>
            </div>
            <p class="modal-titles text-center">Select a new Photo</p>
            <div class="input-group modal-body">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
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
                <input class="form-control" placeholder="Main Title"></input>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Product Description (1 Paragraph)"></textarea>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Product Description (1 Paragraph)"></textarea>
            </div>
            <p class="modal-titles text-center">Select a new Photo</p>
            <div class="input-group modal-body">
                <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture">
            </div>
            <hr>
            <p class="modal-titles text-center">Features Carousel</p>
            <div class="input-group modal-body">
            <input class="form-control" placeholder="Carousel Title"></input>
            </div>
            <hr>
            <p class="modal-titles text-center">Carousel Item</p>
            <div class="modal-body">
                <input class="form-control" placeholder="Carousel Item Title"></input>
            </div>
            <div class="modal-body">
                <input class="form-control" placeholder="Carousel Description"></input>
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
                <input class="form-control" placeholder="Carousel Item Title"></input>
            </div>
            <div class="modal-body">
                <input class="form-control" placeholder="Carousel Description"></input>
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
                <input class="form-control" placeholder="Carousel Item Title"></input>
            </div>
            <div class="modal-body collapse" id="newFeature1"">
                <input class="form-control" placeholder="Carousel Description"></input>
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
                <input class="form-control" placeholder="Main Title"></input>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Subtitle (optional)"></textarea>
            </div>
            <div class="modal-body">
                <input class="form-control" placeholder="Standard Kit Title"></input>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newKit1" aria-expanded="false" aria-controls="collapseExample">+New Standard Kit Item</button>
            </div>
            <div class="input-group modal-body collapse" id="newKit1">
                <input class="form-control" placeholder="Standard Kit Item"></input>
                <button type="button" class="btn btn-secondary">Delete</button>
            </div>
            <hr>
            <div class="modal-body">
                <input class="form-control" placeholder="Optional Kit Title"></input>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newKit2" aria-expanded="false" aria-controls="collapseExample">+New Optional Kit Item</button>
            </div>
            <div class="input-group modal-body collapse" id="newKit2">
                <input class="form-control" placeholder="Optional Kit Item"></input>
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
                <input class="form-control" placeholder="Main Title"></input>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Subtitle (optional)"></textarea>
            </div>
            <hr>
            <div class="modal-body">
                <input class="form-control" placeholder="Accessory Item Title"></input>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newAccessories1" aria-expanded="false" aria-controls="collapseExample">+New Paragraph</button>
            </div>
            <div class="input-group modal-body collapse" id="newAccessories1">
                <input class="form-control" placeholder="Accessory Description (Paragraph)"></input>
                <button type="button" class="btn btn-secondary">Delete</button>
            </div>
            <hr>
            <div class="modal-body">
                <input class="form-control" placeholder="Accessory Item Title"></input>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newAccessories2" aria-expanded="false" aria-controls="collapseExample">+New Description</button>
            </div>
            <div class="input-group modal-body collapse" id="newAccessories2">
                <input class="form-control" placeholder="Accessory Description (List)"></input>
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
                <input class="form-control" placeholder="Main Title (Keyword From Database"></input>
            </div>
            <hr>
            <div class="modal-body">
                <input class="form-control" placeholder="Other Information Title"></input>
            </div>
            <div class="modal-body">
                <input class="form-control" placeholder="Other Information Subtitle"></input>
            </div>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newOther1" aria-expanded="false" aria-controls="collapseExample">+New Paragraph for Description</button>
            </div>
            <div class="modal-body collapse" id="newOther1">
                <input class="form-control" placeholder="Description (Paragraph)"></input>
            </div>
            <hr>
            <div class="input-group modal-body d-grid gap-2">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                data-bs-target="#newOther2" aria-expanded="false" aria-controls="collapseExample">+New list item for Description</button>
            </div>
            <div class="input-group modal-body collapse" id="newOther2">
                <input class="form-control" placeholder="Description (List)"></input>
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