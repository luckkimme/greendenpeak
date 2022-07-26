<?php

    //require_once __DIR__ . '/../processor/product-processor.php';

    function display_brand_products($brand, $product_name) {
        $productBrand = '';
        $productName = '';
        $productID = '';
        $brandName = '';
        $currBrand = '';
        
        foreach($brand as $pBrand) {
            $currBrand = $pBrand['brand_id'];
            
            $productBrand = '<li class="dropdown">';
            $productBrand .='<a tabindex="0" class="dropdown-item dropdown-toggle" role="button"';
            $productBrand .='data-bs-toggle="dropdown" data-bs-trigger="focus" title="Click to view ' . $pBrand['brand_name'] . '">';
            $productBrand .= $pBrand['brand_name'] . '</a>';
            $productBrand .='<ul class="dropdown-menu">';
            
            foreach($product_name as $pName) {
                if($currBrand == $pName['fk_brand_id']) {
                    $productBrand .= '<li><a class="dropdown-item" href="/greendenpeak/page/product.php?productID=' . $pName['product_id'] .'">';
                    $productBrand .= $pName['product_name'] . '</a></li>';
                }
            } 
            $productBrand .='</ul></li>';
            
            echo $productBrand;
        }
        return 0;
    }

    function display_product_info($product, $productDescList) {
        $product_name = $product['product_name'];
        $product_desc = $product['product_desc'];
        $product_btn_name = $product['product_purchase_btn_name'];
        $product_img_src = $product['product_img'];
        $product_desc_list = '';
        $prodInfo = '';

        $prodInfo ='<div class="col-10 col-sm-8 col-lg-6">';
        $prodInfo .='<img src="' . $product_img_src . '" class="d-block mx-lg-auto img-fluid" alt="Product Image" loading="lazy">';
        $prodInfo .='</div><div class="col-lg-6 pt-3 div-product-desc">';
        $prodInfo .='<h1 class="display-5 fw-bold lh-1 mb-3">' . $product_name . '</h1>';
        $prodInfo .='<p class="lead">' . $product_desc . '</p>';
        $prodInfo .='<ul>';
        
        foreach($productDescList as $listItem) {
            $prodInfo .= '<li>' . $listItem['li'] . '</li>';
        }
        $prodInfo .='</ul><div class="d-grid">';
        $prodInfo .='<button type="button" class="btn btn-primary btn-lg px-4">' . $product_btn_name . '</button></div></div>';
        
        return $prodInfo;
    }

    function display_product_feature($product_feature){
        $product_feature_title = $product_feature['product_feature_main_title'];
        $product_feature_subtitle = $product_feature['product_feature_subtitle'];
        $product_feature_subtitle_desc = $product_feature['product_feature_subtitle_desc'];
        $product_feature_imgSrc = $product_feature['product_feature_main_img'];
        $prodFeature = '';

        $prodFeature = '<div class="col-lg-7">';
        $prodFeature.= '<h1 class="display-4 lh-1">' . $product_feature_title . '</h1>';   
        if($product_feature_subtitle){
            $prodFeature.= '<p class="lead">' . $product_feature_subtitle . '</p>';
        }
        $prodFeature.= '<p class="lead">' . $product_feature_subtitle_desc . '</p></div>';       
        $prodFeature.= '<div class="col-lg-4 p-0 shadow-lg">';
        $prodFeature.= '<img class="rounded-lg-3" src="' . $product_feature_imgSrc . '" alt="Feature Image"></div>';
    
        return $prodFeature;
    }
    
    function display_product_feature_carousel_indicators($product_feature_carousel_count){
        $itemCount = $product_feature_carousel_count['count'];
        $carouselIndicator = '';
        $i = 0;
        $n = 0;
        
        for($i=0; $i < $itemCount; $i++) {
            if(!($i==0)) {
                //the succeeding indicators after the 1st one
                $n = $i + 1;
                $carouselIndicator .= '<button type="button" data-bs-target="#div-carousel-product-feature" data-bs-slide-to="'. $i . '" aria-label="Slide ' . $n . '"></button>';
            } else if($i == 0) {
                //the first indicator which is active
                $carouselIndicator = '<button type="button" data-bs-target="#div-carousel-product-feature" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
            }
        }
        return $carouselIndicator;
    }

    function display_product_feature_carousel_items($product_feature, $product_feature_carousel, $carouselCount){
        $carousel_title = $product_feature['product_feature_carousel_title'];
        $carousel_count = $carouselCount['count'];
        $carouselItem = '';
        $i = 0;

        foreach ($product_feature_carousel as $feature){
            if(!($i==0)) {
                //the succeeding indicators after the 1st one
                $carouselItem.= '<div class="carousel-item">';
                $carouselItem.= '<img src="' . $feature['product_feature_carousel_img'] . '" class="d-block w-100" alt="Carousel Image">';
                $carouselItem.= '<div class="carousel-caption d-none d-md-block">';
                $carouselItem.= '<h3>' . $carousel_title . '</h3>';
                $carouselItem.= '<h5>' . $feature['product_feature_carousel_subtitle'] . '</h5>';
                $carouselItem.= '<p>' . $feature['product_feature_carousel_desc'] . '</p></div></div>';
            } else if($i == 0) {
                //the first carousel which is active
                $carouselItem = '<div class="carousel-item active">';
                $carouselItem.= '<img src="' . $feature['product_feature_carousel_img'] . '" class="d-block w-100" alt="Carousel Image">';
                $carouselItem.= '<div class="carousel-caption d-none d-md-block">';
                $carouselItem.= '<h3>' . $carousel_title . '</h3>';
                $carouselItem.= '<h5>' . $feature['product_feature_carousel_subtitle'] . '</h5>';
                $carouselItem.= '<p>' . $feature['product_feature_carousel_desc'] . '</p></div></div>';
            }
            $i++;
        }

        return $carouselItem;
    }

    function display_product_kit_standard_items($product_kit_standard){
        $product_kit_standard_item = '';
        foreach($product_kit_standard as $standard_kit){
            $product_kit_standard_item .= '<li class="col-6">' . $standard_kit['product_kit_standard_item_name'] . '</li>';
        }

        return $product_kit_standard_item;
    }

    function display_product_kit_optional_items($product_kit, $product_kit_optional){
        $product_kit_optional_item = '';

        $product_kit_optional_item = '<div class="justify-content-md-start div-kit-list">';
        $product_kit_optional_item.= '<p class="lead">' . $product_kit['product_kit_optional_title'] . '</p>';
        $product_kit_optional_item.= '<ul class="row">';

        foreach($product_kit_optional as $optional_kit) {
            $product_kit_optional_item .= '<li class="col-6">' . $optional_kit['product_kit_optional_item_name'] . '</li>';
        }
        $product_kit_optional_item.= '</ul></div>';

        return $product_kit_optional_item;
    }
?>