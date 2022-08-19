<?php
    require_once __DIR__ . "/../function/query.php";
    require_once __DIR__ . "/../connection.php";

    function get_brand($conn) {
        $query = 'SELECT * FROM brand';
        $brand = get_multiple_query($query, $conn);
        return $brand;
    }

    function get_products($conn) {
        $product_name = '';
        $query = 'SELECT p.product_id, p.product_name, p.product_desc, p.product_img, p.fk_brand_id FROM product p JOIN brand b ON p.fk_brand_id = b.brand_id';
        $product_name = get_multiple_query($query, $conn);
        return $product_name;
    }

    function get_product_info($conn, $productID) {
        $query = "SELECT p.product_id, p.product_name, p.product_desc, p.product_desc_list, p.product_img, p.product_purchase_btn_name, p.product_feature_carousel_title, b.brand_name   
                  FROM `product` p JOIN `brand` b ON p.fk_brand_id = b.brand_id 
                  WHERE product_id = " . $productID;
        $productInfo = get_single_query($query, $conn);
        return $productInfo;
    }

    function get_product_info_desc_list($conn, $productID) {
        $query = "SELECT pl.product_desc_list_item_name AS li
                  FROM `product_desc_list` pl
                  LEFT JOIN `product` p ON pl.fk_product_id = p.product_id WHERE pl.isShown = 1 AND p.product_id =" . $productID;
        $productInfoDesc = get_multiple_query($query, $conn);
        return $productInfoDesc;
    }

    function get_product_feature($conn, $productID) {
        $query = "SELECT pf.product_feature_main_title, pf.product_feature_main_img, pf.product_feature_description
                  FROM `product_feature` pf
                  LEFT JOIN `product` p ON pf.fk_product_id = p.product_id 
                  WHERE pf.isShown = 1 AND p.product_id =" . $productID;
        $productFeature = get_single_query($query, $conn);
        return $productFeature;
    }

    function get_product_feature_carousel($conn, $productID) {
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

    function get_product_kit($conn, $productID) {
        $query = "SELECT pk.product_kit_id, pk.product_kit_title, pk.product_kit_subtitle, pk.product_kit_standard_title, pk.product_kit_standard_desc, pk.product_kit_optional_title, pk.product_kit_optional_desc, pk.product_kit_img
                  FROM `product_kit` pk
                  LEFT JOIN `product` p ON pk.fk_product_id = p.product_id 
                  WHERE p.product_id =" . $productID;
        $productKit = get_single_query($query, $conn);
        return $productKit;
    }

    function get_product_kit_standard($conn, $productID) {
        $query = "SELECT pks.product_kit_standard_id, pks.product_kit_standard_item_name
                  FROM `product_kit_standard` pks
                  LEFT JOIN `product_kit` pk ON pks.fk_product_kit_id = pk.product_kit_id 
                  LEFT JOIN `product` p ON pk.fk_product_id = p.product_id
                  WHERE pks.isShown = 1 AND p.product_id =" . $productID;
        $productKitStandard = get_multiple_query($query, $conn);
        return $productKitStandard;
    }

    function get_product_kit_optional($conn, $productID) {
        $query = "SELECT pko.product_kit_optional_id, pko.product_kit_optional_item_name
                  FROM `product_kit_optional` pko
                  LEFT JOIN `product_kit` pk ON pko.fk_product_kit_id = pk.product_kit_id 
                  LEFT JOIN `product` p ON pk.fk_product_id = p.product_id
                  WHERE pko.isShown = 1 AND p.product_id =" . $productID;
        $productKitOptional = get_multiple_query($query, $conn);
        return $productKitOptional;
    }

    function get_accessories($conn, $productID) {
        $query = "SELECT pa.product_accessory_id, pa.product_accessory_title, pa.product_accessory_subtitle
                  FROM `product_accessory` pa 
                  LEFT JOIN `product` p ON pa.fk_product_id = p.product_id
                  WHERE p.product_id = " . $productID;
        $productAccessoryTitle = get_single_query($query, $conn);
        return $productAccessoryTitle;
    }

    function get_accessory_item($conn, $productID) {
        $query = "SELECT pai.product_accessory_item_id, pai.product_accessory_item_title, pai.product_acc_desc, pai.product_acc_desc_list, pai.product_accessory_item_img, pai.isShown
                  FROM `product_accessory_item` pai 
                  LEFT JOIN `product_accessory` pa ON pai.fk_product_accessory_id = pa.product_accessory_id
                  LEFT JOIN `product` p ON pa.fk_product_id = p.product_id
                  WHERE pai.isShown = 1 AND p.product_id = " . $productID;
        $productAccessoryItem = get_multiple_query($query, $conn);
        return $productAccessoryItem;
    }

    function get_accessory_item_desc($conn, $productID) {
        $query = "SELECT paid.product_accessory_item_desc_id, paid.product_accessory_item_desc, paid.fk_product_accessory_item_id, paid.isShown
                  FROM `product_accessory_item_desc` paid 
                  LEFT JOIN `product_accessory_item` pai ON paid.fk_product_accessory_item_id = pai.product_accessory_item_id
                  LEFT JOIN `product_accessory` pa ON pai.fk_product_accessory_id = pa.product_accessory_id
                  LEFT JOIN `product` p ON pa.fk_product_id = p.product_id
                  WHERE paid.isShown = 1 AND p.product_id = " . $productID;
        $productAccessoryItemDesc = get_multiple_query($query, $conn);
        return $productAccessoryItemDesc;
    }

    function get_accessory_item_desc_list($conn, $productID) {
        $query = "SELECT paidl.product_accessory_item_desc_list_id, paidl.product_accessory_item_desc_list_name, paidl.fk_product_accessory_item_id, paidl.isShown
                  FROM `product_accessory_item_desc_list` paidl 
                  LEFT JOIN `product_accessory_item` pai ON paidl.fk_product_accessory_item_id = pai.product_accessory_item_id
                  LEFT JOIN `product_accessory` pa ON pai.fk_product_accessory_id = pa.product_accessory_id
                  LEFT JOIN `product` p ON pa.fk_product_id = p.product_id
                  WHERE paidl.isShown = 1 AND p.product_id = " . $productID;
        $productAccessoryItemDescList = get_multiple_query($query, $conn);
        return $productAccessoryItemDescList;
    }

    function get_other_info_keyword($conn, $productID) {
        $query = "SELECT DISTINCT poi.keyword AS info_keyword
                  FROM `product_other_info` poi 
                  LEFT JOIN `product` p ON poi.fk_product_id = p.product_id 
                  WHERE p.product_id = " . $productID;
        $productOtherInfoKeyword = get_multiple_query($query, $conn);
        return $productOtherInfoKeyword;
    }

    function get_other_info($conn, $productID) {
        $query = "SELECT poi.product_other_info_id, poi.product_other_info_title
                  FROM `product_other_info` poi 
                  LEFT JOIN `product` p ON poi.fk_product_id = p.product_id 
                  WHERE poi.isShown = 1 AND p.product_id = " . $productID;
        $productOtherInfo = get_multiple_query($query, $conn);
        return $productOtherInfo;
    }

    function get_other_info_item($conn, $productID) {
        $query = "SELECT pitem.product_info_item_id, pitem.product_info_item_title, pitem.product_other_info_desc, pitem.product_other_info_desc_list, pitem.product_info_item_img, pitem.product_info_item_subtitle, pitem.fk_other_info_item_id
                  FROM `product_other_info_item` pitem 
                  LEFT JOIN `product_other_info` poi ON pitem.fk_other_info_item_id = poi.product_other_info_id 
                  LEFT JOIN `product` p ON poi.fk_product_id = p.product_id
                  WHERE pitem.isShown = 1 AND p.product_id = " . $productID;
        $productOtherInfoItem = get_multiple_query($query, $conn);
        return $productOtherInfoItem;
    }

    function get_other_info_item_desc($conn, $productID) {
        $query = "SELECT pid.product_info_desc_id, pid.product_info_desc, pid.isShown, pid.fk_product_info_item_id
                  FROM `product_other_info_item_desc` pid 
                  LEFT JOIN `product_other_info_item` poii ON pid.fk_product_info_item_id = poii.product_info_item_id
                  LEFT JOIN `product_other_info` poi ON poii.fk_other_info_item_id = poi.product_other_info_id
                  LEFT JOIN `product` p ON poi.fk_product_id = p.product_id 
                  WHERE pid.isShown AND p.product_id = " . $productID;
        $productOtherInfoDesc = get_multiple_query($query, $conn);
        return $productOtherInfoDesc;
    }

    function get_other_info_item_desc_list($conn, $productID) {
        $query = "SELECT pidl.product_info_desc_list_item_id, pidl.product_info_desc_list_item, pidl.isShown, pidl.fk_product_info_item_id
                  FROM `product_other_info_item_desc_list` pidl 
                  LEFT JOIN `product_other_info_item` poii ON pidl.fk_product_info_item_id = poii.product_info_item_id
                  LEFT JOIN `product_other_info` poi ON poii.fk_other_info_item_id = poi.product_other_info_id
                  LEFT JOIN `product` p ON poi.fk_product_id = p.product_id 
                  WHERE pidl.isShown AND p.product_id = " . $productID;
        $productOtherInfoDescList = get_multiple_query($query, $conn);
        return $productOtherInfoDescList;          
    }
?>