<?php
    require_once __DIR__ . "/../function/query.php";
    require_once __DIR__ . "/../connection.php";

    function get_brand($conn){
        $query = 'SELECT * FROM brand';
        $brand = get_multiple_query($query, $conn);
        return $brand;
    }

    function get_product_name($conn){
        $product_name = '';
        $query = 'SELECT p.product_id, p.product_name, p.fk_brand_id FROM product p JOIN brand b ON p.fk_brand_id = b.brand_id';
        $product_name = get_multiple_query($query, $conn);
        return $product_name;
    }

    function get_product_info($conn, $productID){
        $query = "SELECT p.product_id, p.product_name, p.product_desc, p.product_img, p.product_purchase_btn_name, p.product_feature_carousel_title, b.brand_name   
                  FROM `product` p JOIN `brand` b ON p.fk_brand_id = b.brand_id 
                  WHERE product_id = " . $productID;
        $productInfo = get_single_query($query, $conn);
        return $productInfo;
    }

    function get_product_info_desc_list($conn, $productID){
        $query = "SELECT pl.product_desc_list_item_name AS li
                  FROM `product_desc_list` pl
                  LEFT JOIN `product` p ON pl.fk_product_id = p.product_id WHERE pl.isShown = 1 AND p.product_id =" . $productID;
        $productInfoDesc = get_multiple_query($query, $conn);
        return $productInfoDesc;
    }

    function get_product_feature($conn, $productID){
        $query = "SELECT pf.product_feature_main_title, pf.product_feature_main_img, pf.product_feature_carousel_title, pfs.product_feature_subtitle, pfs.product_feature_subtitle_desc 
                  FROM `product_feature` pf
                  LEFT JOIN `product` p ON pf.fk_product_id = p.product_id 
                  JOIN `product_feature_subtitle` pfs ON pfs.fk_product_feature_id = pf.product_feature_id
                  WHERE pf.isShown = 1 AND pfs.isShown = 1 AND p.product_id =" . $productID;
        $productFeature = get_single_query($query, $conn);
        return $productFeature;
    }

    function get_product_feature_carousel($conn, $productID){
        $query = "SELECT pfc.product_feature_carousel_item_id, pfc.product_feature_carousel_subtitle, pfc.product_feature_carousel_desc, pfc.product_feature_carousel_img
                  FROM `product_feature_carousel` pfc
                  LEFT JOIN `product` p ON pfc.fk_product_id = p.product_id 
                  WHERE pfc.isShown = 1 AND p.product_id =" . $productID;
        $productFeatureCarousel = get_multiple_query($query, $conn);
        return $productFeatureCarousel;
    }
    
    function count_product_feature_carousel_item($conn, $productID) {
        $query = "SELECT COUNT(*) AS count
                  FROM `product_feature_carousel` pfc
                  LEFT JOIN `product` p ON pfc.fk_product_id = p.product_id 
                  WHERE pfc.isShown = 1 AND p.product_id =" . $productID;
        $productFeatureCarousel = get_single_query($query, $conn);
        return $productFeatureCarousel;
    }
?>