<?php
    require_once __DIR__ . '/../function/query.php';

    function get_all_brands(mysqli $conn) {
        $query = 'SELECT * FROM `brand` WHERE `isShown` = 1';
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

    function get_product_feature_by_id(mysqli $conn, int $product_id) {
        $query = "SELECT * FROM `product_feature` WHERE `fk_product_id` = $product_id AND isShown = 1";
        return get_multiple_query($query, $conn);
    }

    function set_product_feature(mysqli $conn, string $feature_title, string $feature_desc, string $feature_img, int $productID) {
        $feature_title = $conn->real_escape_string($feature_title);
        $feature_desc = $conn->real_escape_string($feature_desc);
        $feature_img = $conn->real_escape_string($feature_img);
        $query = "INSERT INTO `product_feature`(`product_feature_main_title`, `product_feature_description`, `product_feature_main_img`, `fk_product_id`) VALUES ('$feature_title', '$feature_desc', '$feature_img','$productID')";
        $feature = post_query($query, $conn);
        return $feature;
    }

    function update_product_feature(mysqli $conn, string $feature_title, string $feature_desc, string $feature_img, int $productID) {
        $feature_title = $conn->real_escape_string($feature_title);
        $feature_desc = $conn->real_escape_string($feature_desc);
        $feature_img = $conn->real_escape_string($feature_img);
        $query = "UPDATE `product_feature` SET `product_feature_main_title`='{$feature_title}', `product_feature_description` = '$feature_desc',`product_feature_main_img`='{$feature_img}' WHERE `fk_product_id` = {$productID}";
        $feature = post_query($query, $conn);
        return $feature;
    }

    function get_product_carousel_by_id(mysqli $conn, int $product_id) {
        $query = "SELECT * FROM `product_feature_carousel` WHERE `fk_product_id` = $product_id AND isShown = 1";
        return get_multiple_query($query, $conn);
    }

    function update_carousel_title(mysqli $conn, int $product_id, string $carousel_title) {
        $carousel_title = $conn->real_escape_string($carousel_title);
        $query = "UPDATE `product` SET `product_feature_carousel_title` = '$carousel_title' WHERE product_id = $product_id";
        return post_query($query, $conn);
    }

    function set_feature_carousel(mysqli $conn, array $carousel_item_subtitle, array $carousel_item_desc, array $carousel_item_img, int $productID) {
        $query = '';
        for($index = 0; $index < count($carousel_item_subtitle); $index++) {
            $current_subtitle = $conn->real_escape_string($carousel_item_subtitle[$index]);
            $current_desc = $conn->real_escape_string($carousel_item_desc[$index]);
            $current_img = $conn->real_escape_string($carousel_item_img[$index]);
            $query .= "INSERT INTO `product_feature_carousel`(`product_feature_carousel_subtitle`, `product_feature_carousel_desc`, `product_feature_carousel_img`, `fk_product_id`) VALUES ('$current_subtitle','$current_desc','$current_img', $productID); ";
        }
        return post_query($query, $conn);
    }

    function update_feature_carousel($conn, $carousel_item_subtitle, $carousel_item_desc, $carousel_item_img, $isShown, $productID){
        $query = "UPDATE `product_feature_carousel` SET `product_feature_carousel_subtitle`='{$carousel_item_subtitle}',`product_feature_carousel_desc`='{$carousel_item_desc}',`product_feature_carousel_img`='{$carousel_item_img}',`isShown`='{$isShown}' WHERE `fk_product_id` = {$productID}";
        $feature_carousel = post_query($query, $conn);
        return $feature_carousel;
    }

    function delete_feature_carousel(mysqli $conn, int $carousel_id) {
        $query = "UPDATE `product_feature_carousel` SET `isShown`='0' WHERE `product_feature_carousel_item_id` = $carousel_id";
        return post_query($query, $conn);
    }

    function get_product_kit_by_id(mysqli $conn, int $product_id) {
        $query = "SELECT * FROM `product_kit` WHERE `fk_product_id` = $product_id";
        return get_multiple_query($query, $conn);
    }

    function set_product_kit(mysqli $conn, string $kit_title, string $kit_subtitle, string $kit_standard_title, string $kit_standard_desc, string $kit_optional_title, string $kit_optional_desc, string $kit_img, int $productID) {
        $kit_subtitle = $conn->real_escape_string($kit_subtitle);
        $kit_standard_title = $conn->real_escape_string($kit_standard_title);
        $kit_standard_desc = $conn->real_escape_string($kit_standard_desc);
        $kit_optional_title = $conn->real_escape_string($kit_optional_title);
        $kit_optional_desc = $conn->real_escape_string($kit_optional_desc);
        $kit_img = $conn->real_escape_string($kit_img);
        $query = "INSERT INTO `product_kit` (`product_kit_title`, `product_kit_subtitle`, `product_kit_standard_title`, `product_kit_standard_desc`, `product_kit_optional_title`, `product_kit_optional_desc`, `product_kit_img`, `fk_product_id`) VALUES ('$kit_title', '$kit_subtitle', '$kit_standard_title', '$kit_standard_desc', '$kit_optional_title', '$kit_optional_desc', '$kit_img', $productID)";
        return post_query($query, $conn);
    }

    function update_product_kit(mysqli $conn, string $kit_title, string $kit_subtitle, string $kit_standard_title, string $kit_standard_desc, string $kit_optional_title, string $kit_optional_desc, string $kit_img, int $productID) {
        $kit_title = $conn->real_escape_string($kit_title);
        $kit_subtitle = $conn->real_escape_string($kit_subtitle);
        $kit_standard_title = $conn->real_escape_string($kit_standard_title);
        $kit_standard_desc = $conn->real_escape_string($kit_standard_desc);
        $kit_optional_title = $conn->real_escape_string($kit_optional_title);
        $kit_optional_desc = $conn->real_escape_string($kit_optional_desc);
        $kit_img = $conn->real_escape_string($kit_img);
        $query = "UPDATE `product_kit` SET `product_kit_title` = '$kit_title', `product_kit_subtitle` = '$kit_subtitle', `product_kit_standard_title` = '$kit_standard_title', `product_kit_standard_desc` = '$kit_standard_desc', `product_kit_optional_title` = '$kit_optional_title', `product_kit_optional_desc` = '$kit_optional_desc', `product_kit_img` = '$kit_img' WHERE `fk_product_id` = $productID";
        return post_query($query, $conn);
    }

    function get_product_accessories_details_by_id(mysqli $conn, int $product_id){
        $query = "SELECT * FROM `product_accessory` WHERE `fk_product_id` = $product_id";
        return get_single_query($query, $conn);
    }

    function get_product_accessories_items_by_id(mysqli $conn, int $product_id){
        $query = "SELECT * FROM `product_accessory_item` WHERE `fk_product_accessory_id` = $product_id AND `isShown` = 1";
        return get_multiple_query($query, $conn);
    }

    function set_product_accessory(mysqli $conn, string $accessory_title, string $accessory_subtitle,  int $product_id) {
        $accessory_title = $conn->real_escape_string($accessory_title);
        $accessory_subtitle = $conn->real_escape_string($accessory_subtitle);
        $query = "INSERT INTO `product_accessory`(`product_accessory_title`, `product_accessory_subtitle`, `fk_product_id`) VALUES ('$accessory_title', '$accessory_subtitle', $product_id)";
        return post_query($query, $conn);
    } 

    function update_product_accessory(mysqli $conn, string $accessory_title, string $accessory_subtitle, int $accessory_id) {
        $accessory_title = $conn->real_escape_string($accessory_title);
        $accessory_subtitle = $conn->real_escape_string($accessory_subtitle);
        $query = "UPDATE `product_accessory` SET `product_accessory_title` = '$accessory_title', `product_accessory_subtitle` = '$accessory_subtitle' WHERE product_accessory_id = $accessory_id";
        return post_query($query, $conn);
    } 

    function set_accessory_items(mysqli $conn, array $accessory_titles, array $accessory_subtitle, array $accessory_img, int $accessory_id) {
        $query = '';
        for($index = 0; $index < count($accessory_titles); $index++) {
            $current_title = $conn->real_escape_string($accessory_titles[$index]);
            $current_subtitle = $conn->real_escape_string($accessory_subtitle[$index]);
            $current_img = $conn->real_escape_string($accessory_img[$index]);
            $query .= "INSERT INTO `product_accessory_item` (`product_accessory_item_title`, `product_acc_desc`, `product_accessory_item_img`, `fk_product_accessory_id`) VALUES ('$current_title', '$current_subtitle', '$current_img', $accessory_id);";
        }   
        return post_query($query, $conn);
    }

    function delete_accessory_item_by_id(mysqli $conn, int $accessory_id){
        $query = "UPDATE `product_accessory_item` SET `isShown` = 0 WHERE `product_accessory_item_id` = $accessory_id";
        return post_query($query, $conn);
    }

    function set_product_manual(mysqli $conn, string $manual_name, string $manual_file, int $product_id) {
        $manual_name = $conn->real_escape_string($manual_name);
        $manual_file = $conn->real_escape_string($manual_file);
        $query = "INSERT INTO `product_user_manual`(`product_manual_name`, `product_manual_src`, `fk_product_id`) VALUES('$manual_name', '$manual_file', $product_id)";
        return post_query($query, $conn);
    }

    function edit_product_manual(mysqli $conn, string $manual_name, string $manual_file, int $manual_id) {
        $manual_name = $conn->real_escape_string($manual_name);
        $manual_file = $conn->real_escape_string($manual_file);
        $query = "UPDATE `product_user_manual` SET `product_manual_name` = '$manual_name', `product_manual_src` = '$manual_file' WHERE `product_manual_id` = $manual_id";
        return post_query($query, $conn);
    }

    function get_product_user_manual_by_id(mysqli $conn, int $accessory_id) {
        $query = "SELECT * FROM `product_user_manual` WHERE `fk_product_id` = $accessory_id";
        return get_multiple_query($query, $conn);
    }

    function get_manual_item_by_id(mysqli $conn, int $manual_id) {
        $query = "SELECT * FROM `product_user_manual` WHERE `product_manual_id` = $manual_id";
        return get_single_query($query, $conn);
    }

    function delete_product_manual(mysqli $conn, int $manual_id) {
        $query = "DELETE FROM `product_user_manual` WHERE `product_manual_id` = $manual_id";
        return post_query($query, $conn);
    }

    function get_other_info_by_id(mysqli $conn, int $product_id) {
        $query = "SELECT * FROM `product_other_info` WHERE `fk_product_id` = $product_id AND `isShown` = 1";
        return get_multiple_query($query, $conn);
    }

    function get_other_info_items_by_ids(mysqli $conn, string $other_info_ids) {
        $query = "SELECT * FROM `product_other_info_item` WHERE `fk_other_info_item_id` IN ($other_info_ids) AND `isShown` = 1";
        return get_multiple_query($query, $conn);
    }

    function get_other_info_item_by_id(mysqli $conn, int $item_id) {
        $query = "SELECT * FROM `product_other_info_item` WHERE `product_info_item_id` = $item_id AND `isShown` = 1";
        return get_single_query($query, $conn);
    }

    function set_other_info_category(mysqli $conn, string $categ_name, int $product_id) {
        $categ_name = $conn->real_escape_string($categ_name);
        $query = "INSERT INTO `product_other_info`(`product_other_info_title`, `fk_product_id`) VALUES('$categ_name', $product_id)";
        return post_query($query, $conn);
    }

    function set_other_info_item(mysqli $conn, string $other_info_title, string $other_info_subtitle, string $other_info_desc, string $other_info_desc_list, string $other_info_img, int $category_id) {
        $other_info_title = $conn->real_escape_string($other_info_title);
        $other_info_subtitle = $conn->real_escape_string($other_info_subtitle);
        $other_info_desc = $conn->real_escape_string($other_info_desc);
        $other_info_desc_list = $conn->real_escape_string($other_info_desc_list);
        $other_info_img = $conn->real_escape_string($other_info_img);
        $query = "INSERT INTO `product_other_info_item`(`product_info_item_title`, `product_info_item_subtitle`, `product_other_info_desc`, `product_other_info_desc_list`, `product_info_item_img`, `fk_other_info_item_id`) VALUES('$other_info_title', '$other_info_subtitle', '$other_info_desc', '$other_info_desc_list', '$other_info_img', $category_id)";
        return post_query($query, $conn);
    }

    function update_other_info_item(mysqli $conn, string $other_info_title, string $other_info_subtitle, string $other_info_desc, string $other_info_desc_list, string $other_info_img, int $item_id) {
        $other_info_title = $conn->real_escape_string($other_info_title);
        $other_info_subtitle = $conn->real_escape_string($other_info_subtitle);
        $other_info_desc = $conn->real_escape_string($other_info_desc);
        $other_info_desc_list = $conn->real_escape_string($other_info_desc_list);
        $other_info_img = $conn->real_escape_string($other_info_img);
        $query = "UPDATE `product_other_info_item` SET `product_info_item_title` = '$other_info_title', `product_info_item_subtitle` = '$other_info_subtitle', `product_other_info_desc`= '$other_info_desc', `product_other_info_desc_list` = '$other_info_desc_list', `product_info_item_img` = '$other_info_img' WHERE `product_info_item_id` = $item_id";
        return post_query($query, $conn);
    }

    function delete_other_info_item(mysqli $conn, int $item_id) {
        $query = "UPDATE `product_other_info_item` SET `isShown` = 0 WHERE `product_info_item_id` = $item_id"; 
        return post_query($query, $conn);
    }

    function delete_other_info_category(mysqli $conn, int $category_id) {
        $query = "UPDATE `product_other_info` SET `isShown` = 0 WHERE `product_other_info_id` = $category_id";
        return post_query($query, $conn);
    }

    function check_fk_exist(mysqli $conn, int $id, string $table, string $column) {
        return get_single_query("SELECT * FROM `$table` WHERE `$column` = $id ", $conn);
    }

    function set_product_img(mysqli $conn, string $img_name,  string $img_desc, string $img_src, int $product_id) {
        $img_name = $conn->real_escape_string($img_name);
        $img_src = $conn->real_escape_string($img_src);
        $query = "INSERT INTO `product_img`(`img_name`, `img_desc`, `img_src`, `fk_product_id`) VALUES('$img_name', '$img_desc', '$img_src', $product_id)";
        return post_query($query, $conn);
    }

    function update_product_img(mysqli $conn, string $img_name, string $img_desc, string $img_src, int $img_id) {
        $img_name = $conn->real_escape_string($img_name);
        $img_src = $conn->real_escape_string($img_src);
        $query = "UPDATE `product_img` SET `img_name` = '$img_name', `img_desc` = '$img_desc', `img_src` = '$img_src' WHERE `id` = $img_id";
        return post_query($query, $conn);
    }

    function delete_product_img(mysqli $conn, int $img_id) {
        $query = "UPDATE `product_img` SET `isShown` = 0 WHERE `id` = $img_id";
        return post_query($query, $conn);
    }

    function get_img_by_id(mysqli $conn, int $img_id) {
        $query = "SELECT * FROM `product_img` WHERE `id` = $img_id AND `isShown` = 1";
        return get_single_query($query, $conn);
    }

    function get_all_img(mysqli $conn, int $product_id) {
        $query = "SELECT * FROM `product_img` WHERE `fk_product_id` = $product_id AND `isShown` = 1";
        return get_multiple_query($query, $conn);
    }

    function set_product_vid(mysqli $conn, string $vid_name, string $vid_desc, string $vid_src, int $product_id) {
        $vid_name = $conn->real_escape_string($vid_name);
        $vid_desc = $conn->real_escape_string($vid_desc);
        $vid_src = $conn->real_escape_string($vid_src);
        $query = "INSERT INTO `product_video`(`product_vid_name`, `product_vid_desc`, `product_vid_src`, `fk_product_id`) VALUES('$vid_name', '$vid_desc', '$vid_src', $product_id)";
        return post_query($query, $conn);
    }

    function update_product_vid(mysqli $conn, string $vid_name, string $vid_desc,  string $vid_src, int $vid_id) {
        $vid_name = $conn->real_escape_string($vid_name);
        $vid_src = $conn->real_escape_string($vid_src);
        $query = "UPDATE `product_video` SET `product_vid_name` = '$vid_name', `product_vid_desc` = '$vid_desc',  `product_vid_src` = '$vid_src' WHERE `product_vid_id` = $vid_id";
        return post_query($query, $conn);
    }

    function delete_product_vid(mysqli $conn, int $vid_id) {
        $query = "UPDATE `product_video` SET `isShown` = 0 WHERE `product_vid_id` = $vid_id";
        return post_query($query, $conn);
    }

    function get_vid_by_id(mysqli $conn, int $vid_id){
        $query = "SELECT * FROM `product_video` WHERE `product_vid_id` = $vid_id AND `isShown` = 1";
        return get_single_query($query, $conn);
    }

    function get_all_vid(mysqli $conn, int $product_id) {
        $query = "SELECT * FROM `product_video` WHERE `fk_product_id` = $product_id AND `isShown` = 1";
        return get_multiple_query($query, $conn);
    }



    
?>