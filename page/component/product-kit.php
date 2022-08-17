<div class="col-xxl-8" id="div-product-kit">
    <!-- <div class="b-example-divider-v2"></div> -->

    <div class="row flex-lg-row-reverse align-items-center justify-content-center g-5 px-5 py-5 div-kit-container">
        <div class="col-10 col-sm-12 col-lg-4">
            <img src="<?php echo $product_kit['product_kit_img']; ?>" class="d-block mx-lg-auto img-fluid" alt="Product Photo" loading="lazy">
        </div>
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $product_kit['product_kit_title']; ?></h1>
            
            <div class="justify-content-md-start div-kit-list">
                <p class="lead"><?php echo $product_kit['product_kit_standard_title']; ?></p>
                <ul class="row ul-kit">
                    <?php echo display_product_kit_standard_items($product_kit_standard); ?>
                </ul>
            </div>
            <?php  
                if (!($product_kit['product_kit_optional_title'] == NULL)) {
                    echo display_product_kit_optional_items($product_kit, $product_kit_optional);
                } else {
                    //there is no optional kit
                }
            ?>
        </div>
    </div>
</div>