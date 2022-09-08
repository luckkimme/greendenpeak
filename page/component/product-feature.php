<div id="product-feature-container">
    <!-- <div class="b-example-divider-v2"></div> -->
    <div class="container div-feature">
        <div class="row align-items-center rounded-3 border shadow-lg div-feature-desc">
            <?php echo display_product_feature($product_feature); ?>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div id="div-carousel-product-feature" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php echo display_product_feature_carousel_indicators($product_feature_carousel_count); ?>
        </div>
        
        <div class="carousel-inner">
            <?php  echo display_product_feature_carousel_items($product_feature, $product_feature_carousel, $product_feature_carousel_count); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#div-carousel-product-feature" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#div-carousel-product-feature" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="b-example-divider"></div>
</div>