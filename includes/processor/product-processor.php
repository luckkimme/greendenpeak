<?php
    require_once __DIR__ . "/../function/query.php";
    require_once __DIR__ . "/../connection.php";

    function get_available($conn) {
        $query = 'SELECT * FROM `brand` b
                  LEFT JOIN `product` p ON b.brand_id = p.fk_brand_id
                  WHERE p.isShown = 1 AND p.fk_brand_id = b.brand_id';
        $x = get_multiple_query($query, $conn);
        return $x;
    }

    function get_brand($conn) {
        $query = 'SELECT * FROM brand WHERE isShown = 1';
        $brand = get_multiple_query($query, $conn);
        return $brand;
    }

    function get_products($conn) {
        $product_name = '';
        $query = 'SELECT * FROM product p JOIN brand b ON p.fk_brand_id = b.brand_id
                  WHERE p.isShown = 1';
        $product_name = get_multiple_query($query, $conn);
        return $product_name;
    }

    function get_product_info($conn, $productID) {
        $query = "SELECT * FROM `product` p JOIN `brand` b ON p.fk_brand_id = b.brand_id 
                  WHERE product_id = " . $productID;
        $productInfo = get_single_query($query, $conn);
        return $productInfo;
    }

    function get_product_feature($conn, $productID) {
        $query = "SELECT * FROM `product_feature` pf
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
        $query = "SELECT * FROM `product_kit` pk
                  LEFT JOIN `product` p ON pk.fk_product_id = p.product_id 
                  WHERE p.product_id =" . $productID;
        $productKit = get_single_query($query, $conn);
        return $productKit;
    }

    function get_accessories($conn, $productID) {
        $query = "SELECT * FROM `product_accessory` pa 
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
        $query = "SELECT * FROM `product_other_info_item` pitem 
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

    function get_product_img($conn, $productID) {
        $query = "SELECT * FROM `product_img` pimg 
                  LEFT JOIN `product` p ON pimg.fk_product_id = p.product_id
                  WHERE pimg.isShown = 1 AND p.product_id = " . $productID;
        $productIMG = get_multiple_query($query, $conn);
        return $productIMG;
    }

    function get_product_vid($conn, $productID) {
        $query = "SELECT * FROM `product_video` pv
                  LEFT JOIN `product` p ON pv.fk_product_id = p.product_id
                  WHERE pv.isShown = 1 AND p.product_id = " . $productID;
        $productVid = get_multiple_query($query, $conn);
        return $productVid;
    }

    function get_user_manual($conn, $productID) {
        $query = "SELECT * FROM `product_user_manual` pum 
                  LEFT JOIN `product` p ON pum.fk_product_id = p.product_id
                  WHERE p.product_id = " . $productID;
        $productUserManual = get_multiple_query($query, $conn);
        return $productUserManual;
    }
?>