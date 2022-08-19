<?php
    require_once __DIR__ . '/../function/query.php';

    function get_all_brands(mysqli $conn) {
        $query = 'SELECT * FROM `brand` WHERE `is_shown` = 1';
        return get_multiple_query($query, $conn);
    }

    function get_brand_name_by_id(mysqli $conn, int $brand_id) {
        $query = "SELECT `brand_name` FROM `brand` WHERE `brand_id` = $brand_id LIMIT 1";
        return get_single_query($query, $conn);
    }

    function set_brand(mysqli $conn, string $brand_name) {
        $brand_name = $conn->real_escape_string($brand_name);
        $query = "INSERT INTO `brand`(`brand_name`) VALUES ('$brand_name')";
        return post_query($query, $conn);
    }

    function update_brand(mysqli $conn, int $brandID, string $brand_name) {
        $brand_name = $conn->real_escape_string($brand_name);
        $query = "UPDATE `brand` SET `brand_name`='$brand_name' WHERE `brand_id` = $brandID";
        return post_query($query, $conn);
    }

    function delete_brand(mysqli $conn, int $id) {
        $query = "UPDATE `brand` SET `is_shown` = 0 WHERE `brand_id` = $id";
        return post_query($query, $conn);
    }

    function get_products_by_brand(mysqli $conn, int $brand_id) {
        $query = "SELECT `product_id`, `product_name` FROM `product` WHERE `fk_brand_id`= $brand_id AND `isShown` = 1";
        return get_multiple_query($query, $conn);
    }

    function get_product_by_id(mysqli $conn, int $product_id) {
        $query = "SELECT * FROM `product` WHERE `product_id`= $product_id AND `isShown` = 1 LIMIT 1";
        return get_single_query($query, $conn);
    }

    function set_product(mysqli $conn, string $product_name, int $brand_id) {
        $product_name = $conn->real_escape_string($product_name);
        $query = "INSERT INTO `product`(`product_name`, `fk_brand_id`) VALUES('$product_name', $brand_id)";
        return post_query($query, $conn);
    }

    function update_product_information(mysqli $conn, int $productID, string $product_name, string $product_desc, string $product_img, string $product_btn) {
        $product_name = $conn->real_escape_string($product_name);
        $product_desc = $conn->real_escape_string($product_desc);
        $product_img = $conn->real_escape_string($product_img);
        $product_btn = $conn->real_escape_string($product_btn);
        $query = "UPDATE `product` SET `product_name`='{$product_name}',`product_desc`='{$product_desc}',`product_img`='{$product_img}',`product_purchase_btn_name`='{$product_btn}' WHERE `product_id` = {$productID}";
        return post_query($query, $conn);
    }

    function delete_product(mysqli $conn, int $productID) {
        $query = "UPDATE `product` SET `isShown` = 0 WHERE `product_id` = $productID";
        return post_query($query, $conn);
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

    function update_product_kit($conn, $kit_title, $kit_subtitle, $kit_standard_title, $kit_optional_title, $kit_img, $isShown, $productID) {
        $query = "INSERT INTO `product_kit`(`product_kit_title`, `product_kit_subtitle`, `product_kit_standard_title`, `product_kit_optional_title`, `product_kit_img`, `fk_product_id`) VALUES ('{$kit_title}', {$kit_subtitle}', {$kit_standard_title}','{$kit_optional_title}','{$kit_img}','{$productID}')";
        $product_kit = post_query($query, $conn);
        return $product_kit;
    }
    
?>