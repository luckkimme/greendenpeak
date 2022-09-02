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

    function create_other_info_header(string $other_info_title, string $tag_id_target) {
        return <<< EOL
        <h2 class="accordion-header" id="heading$tag_id_target">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse$tag_id_target" aria-expanded="true" aria-controls="collapse$tag_id_target">
                $other_info_title
            </button>
        </h2>
        EOL;
    }

    function create_other_info_row(array $detail) {
        $item_id = $detail['product_info_item_id'];
        $item_title = $detail['product_info_item_title'];
        return <<< EOL
            <tr>
                <td>$item_title</td>
                <td><a type="button" class="btn btn-secondary button-padding float-end" 
                data-bs-toggle="modal" data-bs-target="#editOtherInfo" aria-expanded="false" aria-controls="editOtherInfo" onclick="setOtherInfoItemEdit($item_id)">Edit</a></td>
            </tr>
        EOL;
    }

    function create_other_info(array $other_info, ?array $other_info_items) {
        $other_info_item_template = '';

        foreach($other_info as $info) {
            $tag_id = uniqid();
            $other_info_id = $info['product_other_info_id'];
            $other_info_header = create_other_info_header($info['product_other_info_title'], $tag_id);
            $other_info_items_row = '';

            if($other_info_items) {
                foreach($other_info_items as $detail) {
                    if($detail['fk_other_info_item_id'] === $info['product_other_info_id']) {
                        $other_info_items_row .= create_other_info_row($detail);
                    }
                }
            }

            $other_info_item_template .= <<< EOL
            <div id="$tag_id">
                $other_info_header
                <div id="collapse$tag_id" class="accordion-collapse collapse" aria-labelledby="heading$tag_id" data-bs-parent="#accordionExample">
                    <div class="accordion-body table-responsive-lg w-100">
                        <table class="table table-striped w-100">
                            <thead>
                                <tr>
                                    <th><h1 class="h5 float-start">Title</h1></th>
                                    <th><h1 class="h5 float-end">Action<h1></th>
                                </tr>
                            </thead>
                            <tbody> 
                                $other_info_items_row
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-danger mx-3 mb-3" onclick="deleteCategory($other_info_id,'$tag_id')">Delete this Category</button>
                    <a type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addOtherInfo" aria-expanded="false" aria-controls="addOtherInfo" onclick="setTextFieldById('category-id-field', $other_info_id)">Add New Title</a>     
                </div>
            </div>
            EOL;
        }
        

        return <<< EOL
            <tr>
                <td class="w-100">
                    <div class="accordion" id="accordionExample">
                            $other_info_item_template
                    </div>
                </td>
            </tr>
        EOL; 
    }

    function create_img_item(string $img_name, string $img_src, int $img_id) {
        return <<< EOL
        <div class="col">
            <div class="card h-100">
                <img src="$img_src">
                <div class="card-body">
                    <h5 class="card-title">$img_name</h5>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between">
                    <button class="btn btn-danger mb-3" type="button" data-bs-toggle="modal" data-bs-target="#deleteImg" onclick="setIdField($img_id, 'delete-img-field')">Delete</button>
                    <a type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#editImg" aria-expanded="false" aria-controls="editImg" onclick="setEditImageModal($img_id)">Edit Image</a> 
                </div>
            </div>
        </div>
        EOL;
    }

    function create_video_item(string $vid_name, string $vid_src, int $vid_id) {
        return <<< EOL
        <div class="col">
            <div class="card h-100">
                <iframe class="w-100" height="200" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    src="$vid_src">
                </iframe>
                <div class="card-body">
                    <h5 class="card-title">$vid_name</h5>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between">
                    <button class="btn btn-danger mb-3" type="button" data-bs-toggle="modal" data-bs-target="#deleteVid" onclick="setIdField($vid_id, 'delete-vid-field')">Delete</button>
                    <a type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#editVid" aria-expanded="false" aria-controls="editVid" onclick="setEditVideoModal($vid_id)">Edit Video</a> 
                </div>
            </div>
        </div>
        EOL;
    }
?>