<!-- Edit Productinfo Modal -->
<div class="modal fade" id="editProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="newBrandLabel"> Edit Product Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/product-details.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="product_id" value="<?php echo $product_id; ?>" hidden />
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control"id="proName" placeholder="Product Name" name="product_name" value="<?php echo $product_details['product_name'] ?? ''; ?>" required />
                        <label for="proName">Product Name</label> 
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <textarea class="form-control" id="proDesc" rows="3" placeholder="Product Description" name="product_desc">
                            <?php echo $product_details['product_desc'] ?? ''; ?>
                        </textarea>
                        <label for="proDesc">Product Description</label>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Product Purchase Button Name" placeholder="Product Purchase Button Name" name="product_btn" value="<?php echo $product_details['product_purchase_btn_name'] ?? ''; ?>"/>
                        <label for="Product Purchase Button Name">Product Purchase Button Name</label>
                    </div>
                </div>
                <p class="modal-titles text-center">Select a new Photo</p>
                <div class="input-group modal-body">
                    <input type="text" name="product_img" value="<?php echo $product_details['product_img'];?>" hidden/>
                    <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture" name="product_img" onchange="previewImage(this, 'product-information-img-preview')"/>
                    <img id="product-information-img-preview" class="w-100 mx-auto d-block" src="<?php echo $product_details['product_img'];?>" alt="<?php echo $product_details['product_name'];?>" <?php if($product_details['product_img'] === null || $product_details['product_img'] === '') echo 'hidden';?> >
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="edit_product_information">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Features Modal -->
<div class="modal fade modal-fullscreen-md-down" id="editFeaturesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="/greendenpeak/includes/api/product-details.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="product_id" value="<?php echo $product_id; ?>" hidden />
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="newBrandLabel"> Edit Features</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Main Title" placeholder="Main Title" name="product_feature_main_title" value="<?php if($product_features) echo $product_features[0]['product_feature_main_title']?>" required></input>
                        <label for="Main Title">Feature Title</label>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <textarea class="form-control" id="Product Description" style="height: 100px" placeholder="Product Description" name="product_feature_description" required><?php if($product_features) echo $product_features[0]['product_feature_description']?></textarea>
                        <label for="Product Description">Feature Description</label>
                    </div>
                </div>
                <p class="modal-titles text-center">Select a new Photo</p>
                <div class="input-group modal-body">
                    <input type="text" name="product_feature_main_img" value="
                        <?php 
                            $is_image_exist = false;
                            if($product_features) {
                                echo $product_features[0]['product_feature_main_img'];
                                $is_image_exist = true;
                            } 
                        ?>" hidden />
                    <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture" name="product_feature_main_img" onchange="previewImage(this, 'features-preview-img')">
                    <img id="features-preview-img" class="w-100" src="<?php if($is_image_exist) echo $product_features[0]['product_feature_main_img']?>" <?php if(!$is_image_exist) echo 'hidden'; ?>>
                </div>
                <hr>
                <p class="modal-titles text-center">Features Carousel</p>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Carousel Title" placeholder="Carousel Title" name="product_feature_carousel_title" value="<?php echo $product_details['product_feature_carousel_title']?>" required></input>
                        <label for="Carousel Title">Carousel Title</label>
                    </div>
                </div>
                <hr>
                <div id="carousel-items">
                    <?php
                        if($product_carousel && count($product_carousel) > 0) {
                            foreach($product_carousel as $product) {
                                echo create_carousel_item(
                                    $product['product_feature_carousel_subtitle'], 
                                    $product['product_feature_carousel_desc'], 
                                    $product['product_feature_carousel_img'], 
                                    $product['product_feature_carousel_item_id'],
                                    $product_id
                                );
                            }
                        }
                    ?>
                </div>
                <div class="input-group modal-body d-grid gap-2">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="collapse" 
                    data-bs-target="#newFeature1" aria-expanded="false" aria-controls="collapseExample" onclick="addCarouselItem('carousel-items')">+New Carousel Item</button>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="method" value="edit_features" class="btn btn-primary">Ok</button>
                </div>  
            </div>
        </div>
    </form>
    
</div>

<!-- Edit Kit Modal -->
<div class="modal fade" id="editKitModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/greendenpeak/includes/api/product-details.php" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="newBrandLabel"> Edit Specification / Kit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <input type="text" name="product_id" value="<?php echo $product_id; ?>" hidden />
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Main Title" placeholder="Main Title" name="product_kit_title" value="<?php if($product_kit) echo $product_kit[0]['product_kit_title'];?>" required/>
                        <label for="Main Title">Kit Title</label>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <textarea class="form-control" id="Subtitle (optional)" style="height: 100px" placeholder="Subtitle (optional)" name="product_kit_subtitle">
                            <?php if($product_kit) echo $product_kit[0]['product_kit_subtitle'] ?>
                        </textarea>
                        <label for="Subtitle (optional)">Subtitle (optional)</label>
                    </div>
                </div>
                <hr>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Standard Kit Title" placeholder="Standard Kit Title" name="product_kit_standard_title" value="<?php if($product_kit) echo $product_kit[0]['product_kit_standard_title'] ?>" required/>
                        <label for="Standard Kit Title">Standard Kit Title</label>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-floating">
                        <textarea class="form-control" id="Subtitle (optional)" style="height: 100px" placeholder="Subtitle (optional)" name="product_kit_standard_desc">
                            <?php if($product_kit) echo $product_kit[0]['product_kit_standard_desc'] ?>
                        </textarea>
                        <label for="Subtitle (optional)">Standard Kit Description</label>
                    </div>
                </div>
                <hr>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Optional Kit Title" placeholder="Optional Kit Title" name="product_kit_optional_title" value="<?php if($product_kit) echo $product_kit[0]['product_kit_optional_title'] ?>" required/>
                        <label for="Optional Kit Title">Optional Kit Title</label>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-floating">
                        <textarea class="form-control" id="Subtitle (optional)" style="height: 100px" placeholder="Subtitle (optional)" name="product_kit_optional_desc">
                            <?php if($product_kit) echo $product_kit[0]['product_kit_optional_desc'] ?>
                        </textarea>
                        <label for="Subtitle (optional)">Optional Kit Description</label>
                    </div>
                </div>
                <hr>

                <div class="input-group modal-body">
                    <input type="text" name="product_kit_img" value="<?php if(isset($product_kit[0]['product_kit_img'])) echo $product_kit[0]['product_kit_img'];?>" hidden/>
                    <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture" name="product_kit_img" onchange="previewImage(this, 'kit-img-preview')" required/>
                    <img id="kit-img-preview" class="w-100 mx-auto d-block" src="<?php 
                    if(isset($product_kit) && $product_kit[0]['product_kit_img'] !== null && $product_kit[0]['product_kit_img'] !== '') 
                        echo $product_kit[0]['product_kit_img'];
                    else 
                        echo " "
                    ?>" alt=" <?php 
                        if(isset($product_kit[0]['product_kit_title']))
                            echo $product_kit[0]['product_kit_title'];
                        else 
                            echo " ";
                    ?>" <?php if(!$product_kit || $product_kit[0]['product_kit_img'] === null || $product_kit[0]['product_kit_img'] === '') echo 'hidden'; ?> />
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="method" value="edit_kit">Ok</button>
                </div>
            </form>
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