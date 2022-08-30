<?php

    session_start();

    //Includes Scripts
    require_once __DIR__ . '/../includes/connection.php';
    require_once __DIR__ . '/../includes/function/db.php';
    require_once __DIR__ . '/../includes/processor/product-processor.php';

    //Product Brands for the navbar
    $brand = get_brand($conn);
    $product = get_products($conn);

    //View Scripts
    require_once __DIR__ . '/../includes/view/product-view.php';

    //Get Product ID
    if(!isset($_GET['productID'])){
        header("Location: ../index.php");
        exit;
    } 
    else{
        $productID = $_GET['productID']; 
        /* echo '<script language="javascript">';
        echo 'alert(' . $productID . ');';
        echo '</script>'; */
    }

    //Get Product Information to display
        //basic information
        $product_info = get_product_info($conn, $productID);
        $productDescList = get_product_info_desc_list($conn, $productID);

        //features
        $product_feature = get_product_feature($conn, $productID);
        $product_feature_carousel = get_product_feature_carousel($conn, $productID);
        $product_feature_carousel_count = count_product_feature_carousel_item($conn, $productID);

        //kit
        $product_kit = get_product_kit($conn, $productID);
        $product_kit_standard = get_product_kit_standard($conn, $productID);
        $product_kit_optional = get_product_kit_optional($conn, $productID);

        //accessory
        $product_accessory_title = get_accessories($conn, $productID);
        $product_accessory = get_accessory_item($conn, $productID);
        $product_accessory_desc = get_accessory_item_desc($conn, $productID);
        $product_accessory_desc_list = get_accessory_item_desc_list($conn, $productID);

        //other info
        $product_other_title = get_other_info($conn, $productID);
        $product_other_info = get_other_info_item($conn, $productID);
        $product_other_info_desc = get_other_info_item_desc($conn, $productID);
        $product_other_info_desc_list = get_other_info_item_desc_list($conn, $productID);

        //gallery
        $product_img = get_product_img($conn, $productID);
        $product_vid = get_product_vid($conn, $productID);

        //user manual
        $product_user_manual = get_user_manual($conn, $productID);

        /* echo "<br><br><br><br><br><br>";
        var_dump($product_other_title); */
        //end of other info
    //end of getting product information

    
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../asset/css/navbar.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link href="../asset/css/product.css?d=<?php echo time(); ?>" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	
        <!-- Bootstrap core CSS -->
        <link href="../asset/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
        <link href="../asset/css/offcanvas.css?d=<?php echo time(); ?>" rel="stylesheet">
        <!-- Custom styles for offcanvas navbar -->
        <link href="../asset/css/heroes.css?d=<?php echo time(); ?>" rel="stylesheet">
    
    </head>
	<body>
		<main id="div-product">
			<?php 
		        include_once __DIR__ . '/component/navbar.php';
		    ?>
            <div id="div-main-tab" class="nav-scroller fixed-top">
                <nav id="div-main-nav" class="navbar nav-underline navbar-light bg-light px-3 fixed-top">
                    <a class="navbar-brand product-brand display-5 fw-bold" href="#"><?php echo $product_info['brand_name']; ?></a>
                    <ul class="nav nav-pills mb-3" id="ul-pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="btn-product-tab" data-bs-toggle="pill" data-bs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="true"><?php echo $product_info['product_name']; ?></button>
                        </li>
                        <?php 
                            if($product_feature){
                                echo '<li class="nav-item" role="presentation">';
                                echo '<button class="nav-link" id="btn-feature-tab" data-bs-toggle="pill" data-bs-target="#product-features" type="button" role="tab" aria-controls="product-features" aria-selected="false">product features</button>';
                                echo '</li>';
                            } 
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btn-specification-tab" data-bs-toggle="pill" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">specifications / kit</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btn-accessory-tab" data-bs-toggle="pill" data-bs-target="#optional-accessories" type="button" role="tab" aria-controls="optional-accessories" aria-selected="false">optional accessories</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btn-other-info-tab" data-bs-toggle="pill" data-bs-target="#other-info" type="button" role="tab" aria-controls="other-info" aria-selected="false">other information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btn-gallery-tab" data-bs-toggle="pill" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">gallery</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btn-manual-tab" data-bs-toggle="pill" data-bs-target="#user-manual" type="button" role="tab" aria-controls="user-manual" aria-selected="false">user manual</button>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="tab-content" id="div-tabContent">
                <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="btn-product-tab">
                    <div id="product-info" class="container col-xxl-8 px-4">
                        <div class="row flex-lg-row-reverse align-items-center g-5 pt-3 div-product-desc">
                            <?php echo display_product_info($product_info); ?>
                        </div>
                    </div>
                </div>
                <?php 
                    if($product_feature) {
                        echo '<div id="product-features" class="tab-item tab-pane fade" role="tabpanel" aria-labelledby="btn-feature-tab">';
                                include_once("component/product-feature.php");
                        echo '</div>';
                    } 
                ?>
                <div id="specifications" class="tab-item tab-pane fade" role="tabpanel" aria-labelledby="btn-specification-tab">
                    <?php include_once("component/product-kit.php"); ?>
                </div> 
                
                <div id="optional-accessories" class="tab-item tab-pane fade" role="tabpanel" aria-labelledby="btn-accessory-tab">
                    <?php include_once("component/product-accessories.php"); ?>    
                </div>
                
                <div id="other-info" class="tab-item tab-pane fade" role="tabpanel" aria-labelledby="btn-other-info-tab">
                    <?php include_once("component/product-other-info.php"); ?>
                </div>

                <div id="gallery" class="tab-item tab-pane fade" role="tabpanel" aria-labelledby="btn-gallery-tab">
                    <?php include_once("component/product-gallery.php"); ?>
                </div>

                <div id="user-manual" class="tab-item tab-pane fade" role="tabpanel" aria-labelledby="btn-manual-tab">
                    <h4 class="lh-1 mb-3 py-3 text-center">In need of assistance for using the Rainbow Vacuum Cleaner?</h4>
                    <h5 class="text-center mx-5">Check out the links below:</h6>
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-4 g-4 py-3">
                        <?php 
                            $product_manual = "";
                            if($product_user_manual) {
                                foreach($product_user_manual as $manual) {
                                    $product_manual .= '<div class="col">';
                                    $product_manual .= '<div class="p-3 h-100 border bg-light link-container">';
                                    $product_manual .= '<h6>' . $manual['product_manual_name'] . '</h6>';
                                    $product_manual .= '<a href="' . $manual['product_manual_src'] . '" target="_blank" class="btn btn-primary">';
                                    $product_manual .= '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">';
                                    $product_manual .= '<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>';
                                    $product_manual .= '</svg>';
                                    $product_manual .= 'Download</a></div></div>';
                                }
                                echo $product_manual;
                            }
                            else {
                                echo "There are no Manuals for this product.";
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="../asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="../asset/js/offcanvas.js"></script>

        <script>
            //show image in modal
            var img = document.querySelectorAll('.btnImgID'); 

            for (i = 0; i < img.length; ++i) {
                img[i].addEventListener("click", displayImgInfo);

                function displayImgInfo() {
                    //alert(this.value);
                    var str = this.value;
                    
                    var imgName = str.substring( 0, str.indexOf("*"));
                    var imgDesc = str.substring(str.indexOf("*") + 1, str.indexOf("+"));
                    var imgSrc = str.substring(str.indexOf("+") + 1, str.indexOf(";"));
                    //alert(imgName + "\n" + imgDesc + "\n" + imgSrc);

                    var title = document.getElementById("showImgLabel");
                    var desc = document.getElementById("showImgDesc");
                    var img = document.getElementById("showImgSrc");

                    title.innerHTML = imgName;
                    desc.innerHTML = imgDesc;
                    img.src = imgSrc;

                }
            };

            //show video in modal
            var vid = document.querySelectorAll('.btnVidID'); 

            for (i = 0; i < vid.length; ++i) {
                vid[i].addEventListener("click", displayVidInfo);

                function displayVidInfo() {
                    //alert(this.value);
                    var str = this.value;
                    
                    var vidName = str.substring( 0, str.indexOf("*"));
                    var vidDesc = str.substring(str.indexOf("*") + 1, str.indexOf("+"));
                    var vidSrc = str.substring(str.indexOf("+") + 1, str.indexOf(";"));
                    //alert(imgName + "\n" + imgDesc + "\n" + imgSrc);

                    var title = document.getElementById("showVidLabel");
                    var desc = document.getElementById("showVidDesc");
                    var vid = document.getElementById("showVidSrc");

                    title.innerHTML = vidName;
                    desc.innerHTML = vidDesc;
                    vid.src = vidSrc;

                }
            };
        </script>

        <?php include_once __DIR__ . '/component/footer.php'; ?>
	</body>
</html>