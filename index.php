<?php 

    //Includes Scripts
    require_once __DIR__ . '/includes/connection.php';
    require_once __DIR__ . '/includes/processor/product-processor.php';
    require_once __DIR__ . '/includes/processor/index-processor.php';

    //Product Brands
    $available = get_available($conn);
    $brand = get_brand($conn);
    $product = get_products($conn);

    //Index Carousel
    $carousel = get_index_carousel($conn);
    $carousel_count = get_carousel_count($conn);
    $faq = get_faq($conn);

    //Company Information
    $company = get_company_info($conn);

    //View Scripts
    require_once __DIR__ . '/includes/view/product-view.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company['company_name']; ?></title>
    <link rel="icon" href="<?php echo $company['company_logo']; ?>">

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

    <script type="text/javascript" src="asset/js/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#nav-main ul li a").removeClass("active");
            $("#nav-home").addClass("active");
        })
    </script>

</head>
<body class="bg-light">
    
    <?php include_once __DIR__ . '/page/component/navbar.php'; ?>

    <main>
        <div id="div-index-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                    for($i = 0; $i < $carousel_count['count']; $i++) {
                        $n = $i + 1;
                        if($i == 0) {
                            echo '<button type="button" data-bs-target="#div-index-carousel" data-bs-slide-to="'. $i .'" class="active" aria-current="true" aria-label="Slide '. $n .'"></button>';
                        } else {
                            echo '<button type="button" data-bs-target="#div-index-carousel" data-bs-slide-to="'. $i .'" aria-label="Slide '. $n .'"></button>';
                        }
                    }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                    $i = 0;
                    $carousel_item = '';
                    foreach($carousel as $image) {
                        if($i == 0) {
                            echo '<div class="carousel-item active index-carousel-item">';
                        } else {
                            echo '<div class="carousel-item index-carousel-item">';
                        }
                        echo '<img src="'. $image['carousel_img'] .'" alt="'. $image['carousel_title'] .'">';
                        echo '</div>';
                        $i++;
                    }
                ?>
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

        <?php

            foreach($product as $p) {
                echo '<div class="container col-xxl-8 px-4 py-5 div-index-product">';
                echo '<div class="row flex-lg-row-reverse align-items-center px-3 py-3">';
                echo '<div class="col-10 col-sm-8 col-lg-6 div-index-product-image">';
                echo '<img src="'. $p['product_img'] .'" class="d-block mx-lg-auto img-fluid" alt="Product Image" loading="lazy">';
                echo '</div>';
                echo '<div class="col-lg-6">';
                echo '<h1 class="display-5 fw-bold lh-1 mb-3">'. $p['product_name'] .'</h1>';
                echo '<p class="lead">'. $p['product_desc'] .'</p>';
                echo '<div class="d-grid gap-2 d-md-flex justify-content-md-start">';
                echo '<a href="page/product.php?productID='. $p['product_id'] .'" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Learn More</a>';
                echo '</div></div></div></div>';
                echo '<div class="b-example-divider"></div>';
            }

        ?>
    </main>

    <script src="asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="asset/js/offcanvas.js"></script>
    <?php include_once("page/component/footer.php"); ?>
</body>
</html>