<?php

    //require_once __DIR__ . '/../processor/product-processor.php';

    function display_brand_products($available, $brand, $product) {
        $productBrand = '';
        
        //checking brands with available products
        foreach($brand as $b) {
            $currBrand = $b['brand_id'];
            foreach($available as $a) {
                if($a['brand_id'] == $currBrand){
                    $productBrand ='<a tabindex="0" class="dropdown-item nav-menu" role="button"';
                    $productBrand .='data-bs-toggle="collapse" aria-expanded="false" aria-controls="nav-collapse-' . $b['brand_name'] . '" href="#nav-collapse-' . $b['brand_name'] . '" title="Click to view ' . $b['brand_name'] . '">';
                    $productBrand .= $b['brand_name'] . '<span class="nav-down-arrow float-end"><i class="arrow down"></i></span></a>';
                    $productBrand .='<div class="collapse div-collapse-nav-item" id="nav-collapse-' . $b['brand_name'] . '">';
                    
                    foreach($product as $p) {
                        if($currBrand == $p['fk_brand_id']) {
                            $productBrand .= '<span><a class="dropdown-item nav-menu" href="page/product.php?productID=' . $p['product_id'] .'">';
                            $productBrand .= $p['product_name'] . '</a></span>';
                        }
                    } 
                    $productBrand .='</div>';
                    
                    echo $productBrand;
                }
            }
        }
        
        /* foreach($brand as $pBrand) {
            $currBrand = $pBrand['brand_id'];
            $productBrand ='<a tabindex="0" class="dropdown-item" role="button"';
            $productBrand .='data-bs-toggle="collapse" aria-expanded="false" aria-controls="nav-collapse-' . $pBrand['brand_name'] . '" href="#nav-collapse-' . $pBrand['brand_name'] . '" title="Click to view ' . $pBrand['brand_name'] . '">';
            $productBrand .= $pBrand['brand_name'] . '<span class="nav-down-arrow float-end">&#x25BC;</span></a>';
            $productBrand .='<div class="collapse div-collapse-nav-item" id="nav-collapse-' . $pBrand['brand_name'] . '">';
            
            foreach($product as $pName) {
                if($currBrand == $pName['fk_brand_id']) {
                    $productBrand .= '<span>&#x26AB;<a class="dropdown-item" href="/greendenpeak/page/product.php?productID=' . $pName['product_id'] .'">';
                    $productBrand .= $pName['product_name'] . '</a></span>';
                }
            } 
            $productBrand .='</div>';
            
            echo $productBrand;
        }
        return 0; */
    }

    function display_product_info($product) {
        $product_name = $product['product_name'];
        $product_desc = $product['product_desc'];
        $product_desc_list = $product['product_desc_list'];
        $product_btn_name = $product['product_purchase_btn_name'];
        $product_img_src = $product['product_img'];
        $prodInfo = '';

        $prodInfo ='<div class="col-12 col-sm-12 col-lg-6 justify-content-center div-p-img">';
        $prodInfo .='<img src="' . $product_img_src . '" class="d-block mx-lg-auto mx-auto img-fluid" alt="Product Image" loading="lazy">';
        $prodInfo .='</div><div class="col-lg-6 pt-3 div-product-desc">';
        $prodInfo .='<h1 class="display-5 fw-bold lh-1 mb-3">' . $product_name . '</h1>';
        $prodInfo .='<p class="lead">' . $product_desc . '</p>';
        $prodInfo .='<p class="px-3" style="white-space:pre;">' . $product_desc_list . '</p>';
        $prodInfo .='<div class="d-grid">';
        $prodInfo .='<a href="page/contact-us.php" type="button" class="btn btn-primary btn-lg px-4 btn-page">' . $product_btn_name . '</a></div></div>';
        
        return $prodInfo;
    }

    //Prev code for display of product info without css whitespace
    /* function display_product_info($product, $productDescList) {
        $product_name = $product['product_name'];
        $product_desc = $product['product_desc'];
        $product_btn_name = $product['product_purchase_btn_name'];
        $product_img_src = $product['product_img'];
        $product_desc_list = '';
        $prodInfo = '';

        $prodInfo ='<div class="col-12 col-sm-8 col-lg-6 justify-content-center div-p-img">';
        $prodInfo .='<img src="' . $product_img_src . '" class="d-block mx-lg-auto mx-auto img-fluid" alt="Product Image" loading="lazy">';
        $prodInfo .='</div><div class="col-lg-6 pt-3 div-product-desc">';
        $prodInfo .='<h1 class="display-5 fw-bold lh-1 mb-3">' . $product_name . '</h1>';
        $prodInfo .='<p class="lead">' . $product_desc . '</p>';
        $prodInfo .='<ul>';
        
        foreach($productDescList as $listItem) {
            $prodInfo .= '<li>' . $listItem['li'] . '</li>';
        }
        $prodInfo .='</ul><div class="d-grid">';
        $prodInfo .='<a href="/greendenpeak/page/contact-us.php" type="button" class="btn btn-primary btn-lg px-4 btn-page">' . $product_btn_name . '</a></div></div>';
        
        return $prodInfo;
    } */

    function display_product_feature($product_feature){
        $product_feature_title = $product_feature['product_feature_main_title'];
        $product_feature_desc = $product_feature['product_feature_description'];
        $product_feature_imgSrc = $product_feature['product_feature_main_img'];
        $prodFeature = '';

        $prodFeature = '<div class="col-lg-7 text-wrap feature-container">';
        $prodFeature.= '<h1 class="display-4 lh-1">' . $product_feature_title . '</h1>';   
        $prodFeature.= '<p>' . $product_feature_desc . '</p></div>';       
        $prodFeature.= '<div class="col-lg-4 p-0 shadow-lg">';
        $prodFeature.= '<img class="rounded-lg-3" src="' . $product_feature_imgSrc . '" alt="Feature Image"></div>';
    
        return $prodFeature;
    }

    /* function display_product_feature($product_feature){
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
    } */
    
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
                $carouselItem.= '<div class="carousel-caption d-md-block">';
                //$carouselItem.= '<h3>' . $carousel_title . '</h3>';
                $carouselItem.= '<h5>' . $feature['product_feature_carousel_subtitle'] . '</h5>';
                $carouselItem.= '<p>' . $feature['product_feature_carousel_desc'] . '</p></div></div>';
            } else if($i == 0) {
                //the first carousel which is active
                $carouselItem = '<div class="carousel-item active">';
                $carouselItem.= '<img src="' . $feature['product_feature_carousel_img'] . '" class="d-block w-100" alt="Carousel Image">';
                $carouselItem.= '<div class="carousel-caption d-none d-md-block">';
                //$carouselItem.= '<h3>' . $carousel_title . '</h3>';
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
        $product_kit_optional_item.= '<ul class="row ul-kit">';

        foreach($product_kit_optional as $optional_kit) {
            $product_kit_optional_item .= '<li class="col-6">' . $optional_kit['product_kit_optional_item_name'] . '</li>';
        }
        $product_kit_optional_item.= '</ul></div>';

        return $product_kit_optional_item;
    }

    function display_product_accessory($product_accessory) {
        $product_accessory_item = '';

        foreach($product_accessory as $accessory_item) {
            $product_accessory_item.= '<div class="col">';
            $product_accessory_item.= '<div class="card h-100">';
            $product_accessory_item.= '<img src="' . $accessory_item['product_accessory_item_img'] . '" class="card-img-top rounded-start p-accessory-img" alt="Accessory Image">';
            $product_accessory_item.= '<div class="card-body">';
            $product_accessory_item.= '<h5 class="card-title">' . $accessory_item['product_accessory_item_title'] . '</h5>';
            
            if(!($accessory_item['product_acc_desc'] == NULL)) {
                $product_accessory_item.= '<p class="card-text accessory-desc">' . $accessory_item['product_acc_desc'] . '</p>';
            }

            if(!($accessory_item['product_acc_desc_list'] == NULL)) {
                $product_accessory_item.= '<p class="card-text accessory-desc-list">' . $accessory_item['product_acc_desc_list'] . '</p>';
            }
            
            $product_accessory_item.= '</div>';
            $product_accessory_item.= '<div class="card-footer d-grid gap-0">';
            $product_accessory_item.= '<a type="button" href="page/contact-us.php" class="btn btn-primary">Get Yours Now!</a>';
            $product_accessory_item.= '</div></div></div>';
        }

        return $product_accessory_item;
    } 

    /* function display_product_accessory($product_accessory, $product_accessory_desc, $product_accessory_desc_list) {
        $product_accessory_item = '';

        foreach($product_accessory as $accessory_item) {
            $product_accessory_item.= '<div class="col">';
            $product_accessory_item.= '<div class="card h-100">';
            $product_accessory_item.= '<img src="' . $accessory_item['product_accessory_item_img'] . '" class="card-img-top rounded-start p-accessory-img" alt="Accessory Image">';
            $product_accessory_item.= '<div class="card-body">';
            $product_accessory_item.= '<h5 class="card-title">' . $accessory_item['product_accessory_item_title'] . '</h5>';
            
            if(!($product_accessory_desc == NULL)) {
                foreach($product_accessory_desc as $accessory_desc) {
                    if($accessory_item['product_accessory_item_id'] == $accessory_desc['fk_product_accessory_item_id']){
                        $product_accessory_item.= '<p class="card-text">' . $accessory_desc['product_accessory_item_desc'] . '</p>';
                    } else {
                        continue;
                    }
                }
            } else {
                goto proceed; //break loop if there is no description
            }

            proceed: 

            $product_accessory_item.= '<ul class="card-text">';

            if(!($product_accessory_desc_list == NULL)) {
                foreach($product_accessory_desc_list as $accessory_desc_list) {
                    if($accessory_item['product_accessory_item_id'] == $accessory_desc_list['fk_product_accessory_item_id']) {
                        $product_accessory_item.= '<li>' . $accessory_desc_list['product_accessory_item_desc_list_name'] . '</li>';
                    } else {
                        continue;
                    }
                }
            } else {
                goto done; //break loop if there is no description
            }

            done: 

            $product_accessory_item.= '</ul></div>';
            $product_accessory_item.= '<div class="card-footer d-grid gap-0">';
            $product_accessory_item.= '<a type="button" href="/greendenpeak/page/contact-us.php" class="btn btn-primary">Get Yours Now!</a>';
            $product_accessory_item.= '</div></div></div>';
        }

        return $product_accessory_item;
    } */
    
    function display_product_other_info_per_keyword($product_other_title, $product_other_info) {
        $product_other = '';

        foreach($product_other_title as $title) {
            $product_other .= '<div class="container col-xxl-8 ">';
            $product_other .= '<h1 class="display-5 fw-bold lh-1 mb-3 py-3">' . $title['product_other_info_title'] . '</h1>';

            if(!($product_other_info == NULL)) {
                foreach($product_other_info as $other_info) {
                    if($other_info['fk_other_info_item_id'] == $title['product_other_info_id']) {
                        $product_other .= '<div class="row flex-lg-row-reverse align-items-center g-5 py-5 div-other-info-container">';
                        $product_other .= '<div class="col-10 col-sm-8 col-lg-4">';
                        $product_other .= '<img src="' . $other_info['product_info_item_img'] . '" class="d-block mx-lg-auto img-fluid" alt="Other Information Image" width="700" height="500" loading="lazy">';
                        $product_other .= '</div>'; //end img div
                        $product_other .= '<div class="col-lg-8">';
                        $product_other .= '<h4 class="lh-1 mb-3">' . $other_info['product_info_item_title'] . '</h4>';
                        $product_other .= '<h6 class="lh-1 mb-3">' . $other_info['product_info_item_subtitle'] . '</h6>';
                        
                        if(!($other_info['product_other_info_desc'] == NULL)) {
                           $product_other .= '<p class="lead other-info-desc">' . $other_info['product_other_info_desc'] . '</p>';    
                        } 

                        if(!($other_info['product_other_info_desc_list'] == NULL)) {
                            $product_other .= '<div class="justify-content-md-start div-other-info-list">';
                            $product_other .= '<p class="other-info-desc-list">' . $other_info['product_other_info_desc_list'] . '</p></div>';
                        }

                        $product_other .= '</div>'; //end of title div
                        $product_other .= '</div>'; //end of keyword item div
                    } else {
                        continue;
                    }
                }
            } else {
                goto next;
            }

            next:
            
            $product_other .= '</div>'; //end of keyword component
            $product_other .= '<div class="b-example-divider"></div>';
        }   
        
        return $product_other;

    }

    /* function display_product_other_info_per_keyword($product_other_title, $product_other_info, $product_other_info_desc, $product_other_info_desc_list) {
        $product_other = '';

        foreach($product_other_title as $title) {
            $product_other .= '<div class="container col-xxl-8 ">';
            $product_other .= '<h1 class="display-5 fw-bold lh-1 mb-3 py-3">' . $title['product_other_info_title'] . '</h1>';

            if(!($product_other_info == NULL)) {
                foreach($product_other_info as $other_info) {
                    if($other_info['fk_other_info_item_id'] == $title['product_other_info_id']) {
                        $product_other .= '<div class="row flex-lg-row-reverse align-items-center g-5 py-5 div-other-info-container">';
                        $product_other .= '<div class="col-10 col-sm-8 col-lg-4">';
                        $product_other .= '<img src="' . $other_info['product_info_item_img'] . '" class="d-block mx-lg-auto img-fluid" alt="Other Information Image" width="700" height="500" loading="lazy">';
                        $product_other .= '</div>'; //end img div
                        $product_other .= '<div class="col-lg-8">';
                        $product_other .= '<h4 class="lh-1 mb-3">' . $other_info['product_info_item_title'] . '</h4>';
                        $product_other .= '<h6 class="lh-1 mb-3">' . $other_info['product_info_item_subtitle'] . '</h6>';
                        
                        if(!($product_other_info_desc == NULL)) {
                            foreach($product_other_info_desc as $other_info_desc) {
                                if($other_info['product_info_item_id'] == $other_info_desc['fk_product_info_item_id']) {
                                    $product_other .= '<p class="lead">' . $other_info_desc['product_info_desc'] . '</p>';
                                } else {
                                    continue;
                                }
                            }
                        } else {
                            goto proceed;
                        }

                        proceed:

                        $product_other .= '<div class="justify-content-md-start div-other-info-list">';
                        $product_other .= '<ul class="row">';

                        if(!($product_other_info_desc_list == NULL)) {
                            foreach($product_other_info_desc_list as $other_info_desc_list) {
                                if($other_info['product_info_item_id'] == $other_info_desc_list['fk_product_info_item_id']) {
                                    $product_other .= '<li>' . $other_info_desc_list['product_info_desc_list_item'] . '</li>';
                                } else {
                                    continue;
                                }
                            }
                        } else {
                            goto done;
                        }

                        done:

                        $product_other .= '</ul></div>'; //end of ul div
                        //$product_other .= '<div class="d-grid gap-2 d-md-flex justify-content-md-start py-3">';
                        //$product_other .= '<button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>';
                        //$product_other .= '<button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>';
                        //$product_other .= '</div>'; //end of button div
                        $product_other .= '</div>'; //end of title div
                        $product_other .= '</div>'; //end of keyword item div
                    } else {
                        continue;
                    }
                }
            } else {
                goto next;
            }

            next:
            
            $product_other .= '</div>'; //end of keyword component
        }   
        
        return $product_other;

    } */
?>