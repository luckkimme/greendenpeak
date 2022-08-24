<?php
    function create_brand_item(int $brand_id, string $brand_name) {
        return <<< EOL
            <tr>
                <td class="tdproduct">$brand_name</td>
                <td class="alignment">
                    <a href="/greendenpeak/page/admin/product-cms.php?brand_id=$brand_id" type="button" class="btn btn-secondary">View Products</a>
                    <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editbrandmodal" onclick="setHiddenIdField('brand-id-field', $brand_id)">Edit</a>
                    <form class="d-inline" method="POST"action="/greendenpeak/includes/api/brand.php" >
                        <input type="text" name="brand_id" value="$brand_id" hidden>
                        <button class="btn btn-danger" type="submit" name="method" value="delete">Delete</button>
                    </form>
                </td>
            </tr>  
        EOL;
    }

    function create_product_item(int $product_id, string $product_name, int $brand_id) {
        return <<< EOL
            <tr>
                <td class="tdproduct">$product_name</td>
                <td class="alignment">
                    <a href="/greendenpeak/page/admin/product-details-cms.php?product_id=$product_id" type="button" class="btn btn-secondary button-padding">Edit</a>
                    <form class="d-inline" method="POST" action="/greendenpeak/includes/api/product.php">
                        <input type="text" name="brand_id" value="$brand_id" hidden>
                        <input type="text" name="product_id" value="$product_id" hidden>
                        <button class="btn btn-danger" type="submit" name="method" value="delete">Delete</button>
                    </form>
                </td> 
            </tr>
        EOL;
    }

    function create_carousel_item(string $carousel_title, string $carousel_desc, string $carousel_img, string $carousel_id) {
        $element_id = uniqid();
        return <<< EOL
            <div id="$element_id">
                <p class="modal-titles text-center">Carousel Item</p>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Carousel Item Title" placeholder="Carousel Item Title" value="$carousel_title" disabled/>
                        <label for="Carousel Item Title">Carousel Item Title</label>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Carousel Description" placeholder="Carousel Description" value="$carousel_desc" disabled/>
                        <label for="Carousel Description">Carousel Description</label>
                    </div>
                </div>
                <div class="input-group modal-body">
                    <img src="$carousel_img" class="w-100"/>
                </div>
                <div class="input-group modal-body">
                    <button type="button" class="btn btn-secondary btn-sm" onclick="deleteCarouselItem($carousel_id, '$element_id')">Delete Item</button>
                </div>
                <hr>
            </div>
        EOL;
    }

    function create_accessory_item(string $accessory_title, string $accessory_desc, string $accessory_img, string $accessory_id) {
        $element_id = uniqid();
        return <<< EOL
            <div id="$element_id">
                <p class="modal-titles text-center">Accessory Item</p>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Accessory Item Title" placeholder="Accessory Item Title" value="$accessory_title" disabled/>
                        <label for="Accessory Item Title">Accessory Item Title</label>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <input class="form-control" id="Accessory Description" placeholder="Accessory Description" value="$accessory_desc" disabled/>
                        <label for="Accessory Description">Accessory Description</label>
                    </div>
                </div>
                <div class="input-group modal-body">
                    <img src="$accessory_img" class="w-100"/>
                </div>
                <div class="input-group modal-body">
                    <button type="button" class="btn btn-secondary btn-sm" onclick="deleteAccessoryItem($accessory_id, '$element_id')">Delete Item</button>
                </div>
                <hr>
            </div>
        EOL;
    }

    function create_user_manual_item(int $manual_id, string $manual_name) {
        return <<< EOL
            <option value="$manual_id">$manual_name</option> 
        EOL;
    }
?>