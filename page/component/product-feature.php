<div id="product-feature-container">
    <div class="b-example-divider-v2"></div>
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
            <!-- <div class="carousel-item active">
                <img src="../asset/img/placeholder/m.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>The Power of Water<h3>
                    <h5>1. Wet Dust Can't Fly</h5>
                    <p>The Rainbow uses Mother Nature’s most powerful element, water, to trap dirt and odors, returning only naturally clean, water-washed air to your home environment.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="../asset/img/placeholder/m.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>The Power of Water<h3>
                <h5>2. TWICE AS CLEAN</h5>
                <p>This unique water filtration system captures typical household dirt, while remaining microscopic particles are caught by our HEPA Neutralizer Filtration System. This two-stage filtration combination removes nearly 100% of dirt and contaminants from your home.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="../asset/img/placeholder/m.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>The Power of Water<h3>
                <h5>3. HURRICANE MOTOR</h5>
                <p>Powered by switched-reluctance technology, our powerful Hurricane® motor has the force to tackle your toughest cleaning jobs and offers indefinite motor life.</p>
            </div>
            </div> -->
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
</div>