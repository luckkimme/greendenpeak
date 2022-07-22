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
        $query = "SELECT product_id, product_name, product_desc, product_img, product_purchase_btn_name, product_feature_carousel_title    
                  FROM `product` 
                  WHERE product_id = " . $productID;
        $productInfo = get_single_query($query, $conn);
        return $productInfo;
    }

    function get_product_info_desc_list($conn, $productID) {
        $query = "SELECT pl.product_desc_list_item_name AS li
                  FROM `product_desc_list` pl
                  LEFT JOIN `product`p ON pl.fk_product_id =p.product_id WHERE pl.isShown = 1 AND p.product_id =" . $productID;
        $productInfo = get_multiple_query($query, $conn);
        return $productInfo;
    }

?>