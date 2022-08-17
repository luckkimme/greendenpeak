<div id="product-accessories">
    <!-- <div class="b-example-divider-v2"></div> -->
    
    <h3 class="fw-bold lh-1 text-center mb-3 py-3"><?php echo $product_accessory_title['product_accessory_title']; ?></h3>
    <p class="text-center mx-5"><?php echo $product_accessory_title['product_accessory_subtitle']; ?></p>    
    <div class="row row-cols-2 row-cols-md-3 g-4 px-3 py-3">
    <?php echo display_product_accessory($product_accessory, $product_accessory_desc, $product_accessory_desc_list); ?>
        <!-- <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer d-grid gap-0">
                    <button class="btn btn-primary">Get Yours Now!</button>
                </div>
            </div>
        </div> -->
    </div>
    
    <!-- <div class="row row-cols-3 row-cols-sm-3 d-flex flex-row justify-content-evenly flex-wrap py-5">
        
    </div> -->
</div>