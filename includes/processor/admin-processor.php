<?php

    require_once __DIR__ . '/../connection.php';
    require_once __DIR__ . '/../function/query.php';

    function set_brand($conn, $brand_name) {
        $query = "INSERT INTO `brand`(`brand_name`) VALUES ('{$brand_name}')";
        $brand = post_query($query, $conn);
        return $brand;
    }

    function update_brand($conn, $brandID, $brand_name) {
        $query = "UPDATE `brand` SET `brand_name`='{$brand_name}' WHERE `brand_id` = {$brandID}";
        $brand = post_query($query, $conn);
        return $brand;
    }

    function set_product($conn, $product_name, $product_desc, $product_img, $product_btn, $brandID) {
        $query = "INSERT INTO `product`(`product_name`, `product_desc`, `product_img`, `product_purchase_btn_name`, `fk_brand_id`) VALUES ('{$product_name}','{$product_desc}','{$product_img}','{$product_btn}',{$brandID})";
        $product = post_query($query, $conn);
        return $product;
    }

    function update_product($conn, $productID, $product_name, $product_desc, $product_img, $product_btn, $carousel_title, $isShown, $brandID) {
        $query = "UPDATE `product` SET `product_name`='{$product_name}',`product_desc`='{$product_desc}',`product_img`='{$product_img}',`product_purchase_btn_name`='{$product_btn}',`product_feature_carousel_title`='{$carousel_title}',`isShown`='{$isShown}',`fk_brand_id`='{$brandID}' WHERE `product_id` = {$productID}";
        $product = post_query($query, $conn);
        return $product;
    }

    function set_product_feature($conn, $feature_title, $feature_img, $productID) {
        $query = "INSERT INTO `product_feature`(`product_feature_main_title`, `product_feature_main_img`, `fk_product_id`) VALUES ('{$feature_title}','{$feature_img}','{$productID}')";
        $feature = post_query($query, $conn);
        return $feature;
    }

    function update_product_feature($conn, $feature_title, $feature_img, $isShown, $productID) {
        $query = "UPDATE `product_feature` SET `product_feature_main_title`='{$feature_title}',`product_feature_main_img`='{$feature_img}',`isShown`='{$isShown}' WHERE `fk_product_id` = {$productID}";
        $feature = post_query($query, $conn);
        return $feature;
    }

    function set_feature_description($conn, $subtitle, $description, $featureID) {
        $query = "INSERT INTO `product_feature_subtitle`(`product_feature_subtitle`, `product_feature_subtitle_desc`, `fk_product_feature_id`) VALUES ('{$subtitle}','{$description}','{$featureID}')";
        $feature_desc = post_query($query, $conn);
        return $feature_desc;
    }

    function update_feature_description($conn, $subtitle, $description, $isShown, $featureID) {
        $query = "UPDATE `product_feature_subtitle` SET `product_feature_subtitle`='{$subtitle}',`product_feature_subtitle_desc`='{$description}',`isShown`='{$isShown}' WHERE `fk_product_feature_id` = {$featureID}";
        $feature_desc = post_query($query, $conn);
        return $feature_desc;
    }

    function set_feature_carousel($conn, $carousel_item_subtitle, $carousel_item_desc, $carousel_item_img, $productID) {
        $query = "INSERT INTO `product_feature_carousel`(`product_feature_carousel_subtitle`, `product_feature_carousel_desc`, `product_feature_carousel_img`, `fk_product_id`) VALUES ('{$carousel_item_subtitle}','{$carousel_item_desc}','{$carousel_item_img}','{$productID}')";
        $feature_carousel = post_query($query, $conn);
        return $feature_carousel;
    }

    function update_feature_carousel($conn, $carousel_item_subtitle, $carousel_item_desc, $carousel_item_img, $isShown, $productID){
        $query = "UPDATE `product_feature_carousel` SET `product_feature_carousel_subtitle`='{$carousel_item_subtitle}',`product_feature_carousel_desc`='{$carousel_item_desc}',`product_feature_carousel_img`='{$carousel_item_img}',`isShown`='{$isShown}' WHERE `fk_product_id` = {$productID}";
        $feature_carousel = post_query($query, $conn);
        return $feature_carousel;
    }

    function set_product_kit($conn, $kit_title, $kit_subtitle, $kit_standard_title, $kit_optional_title, $kit_img, $productID) {
        $query = "INSERT INTO `product_kit`(`product_kit_title`, `product_kit_subtitle`, `product_kit_standard_title`, `product_kit_optional_title`, `product_kit_img`, `fk_product_id`) VALUES ('{$kit_title}', {$kit_subtitle}', {$kit_standard_title}','{$kit_optional_title}','{$kit_img}','{$productID}')";
        $product_kit = post_query($query, $conn);
        return $product_kit;
    }
    
?>