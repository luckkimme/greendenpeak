<?php 

    //Includes Scripts
    require_once __DIR__ . '/includes/connection.php';
    require_once __DIR__ . '/includes/processor/product-processor.php';

    //Product Brands
    $brand = get_brand($conn);
    $product_name = get_product_name($conn);
    //echo $brand['brand_name'];
    foreach($product_name as $product) {
        echo $product['product_name'];
    }
    //View Scripts
    require_once __DIR__ . '/includes/view/product-view.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Greendenpeak Website">
    <meta name="author" content="Kimberly Mae Soguilon and Ryu Juanito Pagkaliwangan IV">
    <title>Greendenpeak, OPC</title>
    

    <!-- Bootstrap core CSS -->
    <link href="asset/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
    </style>

    
    <!-- Custom styles for offcanvas navbar -->
    <link href="asset/css/offcanvas.css?d=<?php echo time(); ?>" rel="stylesheet">
    <!-- Custom styles for the product display -->
    <link href="asset/css/heroes.css" rel="stylesheet">
    <!-- Custom styles for navbar -->
    <link href="asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
    <!-- Custom styles index page -->
    <link href="asset/css/index.css?d=<?php echo time(); ?>" rel="stylesheet">

</head>
<body class="bg-light">
    
    <?php include_once __DIR__ . '/page/component/navbar.php'; ?>

    <main>
        <div id="div-index-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#div-index-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#div-index-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#div-index-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active index-carousel-item">
                    <img src="asset/img/index/carousel/carousel-1.png">
                </div>
                <div class="carousel-item index-carousel-item">
                    <img src="asset/img/index/carousel/carousel-2.jpg">
                </div>
                <div class="carousel-item index-carousel-item">
                    <img src="asset/img/index/carousel/carousel-3.jpg">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#div-index-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#div-index-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5 div-index-product">
            <div class="row flex-lg-row-reverse align-items-center px-3 py-3">
                <div class="col-10 col-sm-8 col-lg-6 div-index-product-image">
                    <img src="asset/img/products/rainbow/rainbow-vacuum-no-bg.png" class="d-block mx-lg-auto img-fluid" alt="Product Image" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Rainbow Vacuum</h1>
                    <p class="lead">Great technology for dust-free cleaning for all surfaces with the power of water.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Learn More ></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5 div-index-product">
            <div class="row flex-lg-row-reverse align-items-center px-3 py-3">
                <div class="col-10 col-sm-8 col-lg-6 div-index-product-image">
                    <img src="asset/img/index/carousel/carousel-3.jpg" class="d-block mx-lg-auto img-fluid" alt="Product Image" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Thermostar Dry Cleaner</h1>
                    <p class="lead">At least 180°C micro dry steam perfect for DIY heat sterilization and disinfection on surfaces.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Learn More ></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="my-3 p-3 bg-body rounded shadow-sm container">
            <h6 class="border-bottom pb-2 mb-0">frequently asked questions (faq)</h6>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Question 1
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Question 2
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Question 3
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>
                </div>
                
                <small class="d-block text-end mt-3">
                    <a href="#">View All</a>
                </small>
            </div>
        </div>

    </main>


        <script src="asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="asset/js/offcanvas.js"></script>
        <?php include_once("page/component/footer.php"); ?>
</body>
</html>
