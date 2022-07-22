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
    
?>