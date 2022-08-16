<div id="product-accessories">
    <!-- <div class="b-example-divider-v2"></div> -->
    
    <h3 class="fw-bold lh-1 text-center mb-3 py-3"><?php echo $product_accessory_title['product_accessory_title']; ?></h3>
    <p class="text-center"><?php echo $product_accessory_title['product_accessory_subtitle']; ?></p>    
    <div class="row d-flex flex-row flex-wrap align-content-around justify-content-evenly py-5">
        <?php echo display_product_accessory($product_accessory, $product_accessory_desc, $product_accessory_desc_list); ?>
    </div>
</div>