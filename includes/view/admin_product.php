<?php
    function create_brand_item($brand_id, $brand_name) {
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

    function create_product_item($product_id, $product_name, $brand_id) {
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

    function create_carousel_item($carousel_title, $carousel_desc, $carousel_img, ) {
        return <<< EOL
            <p class="modal-titles text-center">Carousel Item</p>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Item Title" placeholder="Carousel Item Title" name="carousel_title" value="$carousel_title" required/>
                    <label for="Carousel Item Title">Carousel Item Title</label>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input class="form-control" id="Carousel Description" placeholder="Carousel Description" value="$carousel_desc" required/>
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
        EOL;
    }
?>