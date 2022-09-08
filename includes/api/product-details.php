<?php
    require_once('../connection.php');
    require_once('../processor/admin-processor.php');
    require_once('../processor/upload-processor.php');

    $is_post_set = isset($_POST['method']);
    $is_get_set = isset($_GET['method']);
    $method = null;

    if($is_post_set) {
        $method = $_POST['method'];
    } elseif ($is_get_set) {
        $method = $_GET['method'];
    }

    if($method === 'edit_product_information') {

        $id = intval($_POST['product_id']);
        $product_name = $_POST['product_name'];
        $product_desc = $_POST['product_desc'];
        $product_desc_list = $_POST['product_desc_list'];
        $product_btn = $_POST['product_btn'];
        $product_img = $_POST['product_img'];
        if($_FILES['product_img']['error'] !== 4) {
            $product_img = upload_file($_FILES['product_img']['name'] , $_FILES['product_img']['tmp_name'], 'greendenpeak/asset/img/products');
        }

        update_product_information($conn, $id, $product_name, $product_desc, $product_desc_list, $product_img, $product_btn);
    } 
    
    else if($method === 'delete_carousel') {
        $carousel_id = intval($_POST['carousel_id']);
        delete_feature_carousel($conn, $carousel_id);
        exit(1);
    } 
    
    else if($method === 'edit_features') {

        $id = intval($_POST['product_id']);
        $features_title = $_POST['product_feature_main_title'];
        $features_desc = $_POST['product_feature_description'];
        $carousel_title = $_POST['product_feature_carousel_title'];
        $features_img = $_POST['product_feature_main_img'];
        if($_FILES['product_feature_main_img']['error'] !== 4) {
            $features_img = upload_file($_FILES['product_feature_main_img']['name'] , $_FILES['product_feature_main_img']['tmp_name'], 'greendenpeak/asset/img/products');
        }

        $is_carousel_set = isset($_POST['carousel_title']);

        if($is_carousel_set) {
            $carousel_subtitles = $_POST['carousel_title'];
            $carousel_desc = $_POST['carousel_desc'];
            for($index = 0; $index < count($carousel_subtitles); $index++) {
                $carousel_img[] = upload_file($_FILES['carousel_img']['name'][$index], $_FILES['carousel_img']['tmp_name'][$index], 'greendenpeak/asset/img/products');
            }
        }

        update_carousel_title($conn, $id, $carousel_title);
        if(check_fk_exist($conn, $id, 'product_feature', 'fk_product_id')) {
            update_product_feature($conn, $features_title, $features_desc, $features_img, $id);
        } else {
            set_product_feature($conn, $features_title, $features_desc, $features_img, $id);
        }

        if($is_carousel_set) set_feature_carousel($conn, $carousel_subtitles, $carousel_desc, $carousel_img, $id);
    }

    else if($method === 'edit_kit') {

        $id = intval($_POST['product_id']);
        $kit_title = $_POST['product_kit_title'];
        $kit_subtitle = $_POST['product_kit_subtitle'];
        $kit_standard_title = $_POST['product_kit_standard_title'];
        $kit_standard_desc = $_POST['product_kit_standard_desc'];
        $kit_optional_title = $_POST['product_kit_optional_title'];
        $kit_optional_desc = $_POST['product_kit_optional_desc'];
        $kit_img = $_POST['product_kit_img'];
        if($_FILES['product_kit_img']['error'] !== 4) {
            $kit_img = upload_file($_FILES['product_kit_img']['name'] , $_FILES['product_kit_img']['tmp_name'], 'greendenpeak/asset/img/products');
        }

        if(check_fk_exist($conn, $id, 'product_kit', 'fk_product_id')) {
            update_product_kit($conn, $kit_title, $kit_subtitle, $kit_standard_title, $kit_standard_desc, $kit_optional_title, $kit_optional_desc, $kit_img, $id);
        } else {
            set_product_kit($conn, $kit_title, $kit_subtitle, $kit_standard_title, $kit_standard_desc, $kit_optional_title, $kit_optional_desc, $kit_img, $id);
        }
    }

    else if($method === 'delete_accessory') {
        $accessory_item_id = $_POST['accessory_id'];
        delete_accessory_item_by_id($conn, $accessory_item_id);
        exit(1);
    }

    else if($method === 'edit_accessory') {

        $id = intval($_POST['product_id']);
        $accessory_id = $_POST['accessory_id'] ? intval($_POST['accessory_id']) : null;
        $accessory_title = $_POST['product_accessory_title'];
        $accessory_desc = $_POST['product_accessory_subtitle'];

        if(isset($_POST['accessory_title'])) {
            $accessory_item_titles = $_POST['accessory_title'];
            $accessory_item_desc = $_POST['accessory_desc'];
            for($index = 0; $index < count($accessory_item_desc); $index++) {
                $accessory_img[] = upload_file($_FILES['accessory_img']['name'][$index], $_FILES['accessory_img']['tmp_name'][$index], 'greendenpeak/asset/img/products');
            }
            $is_accessory_item_set = true;
        }

        if(check_fk_exist($conn, $id, 'product_accessory', 'fk_product_id')) {
            update_product_accessory($conn, $accessory_title, $accessory_desc, $accessory_id);
        } else {
            $accessory_id = set_product_accessory($conn, $accessory_title, $accessory_desc, $id);
        }

        if(isset($is_accessory_item_set)) {
            set_accessory_items($conn, $accessory_item_titles, $accessory_item_desc, $accessory_img, $accessory_id);
        }
    }

    else if($method === 'get_manual') {
        $manual_id = intval($_GET['manual_id']);
        $manual_item = get_manual_item_by_id($conn, $manual_id);
        exit(json_encode($manual_item));
    } 

    else if($method === 'add_manual') {
        $id = $_POST['product_id'];
        $manual_name = $_POST['manual_name'];
        $manual_file = upload_file($_FILES['manual_file']['name'], $_FILES['manual_file']['tmp_name'], 'greendenpeak/asset/img/products');
        set_product_manual($conn, $manual_name, $manual_file, $id);
    }

    else if($method === 'edit_manual') {
        $id = $_POST['product_id'];
        $manual_id = $_POST['manual_id'];
        $manual_name = $_POST['manual_name'];
        $manual_file = $_FILES['manual_file']['error'] === 4 ? $_POST['manual_file'] : upload_file($_FILES['manual_file']['name'], $_FILES['manual_file']['tmp_name'], 'greendenpeak/asset/img/products');
        edit_product_manual($conn, $manual_name, $manual_file, $manual_id);
    }

    else if($method === 'delete_manual') {
        $id = $_POST['product_id'];
        $manual_id = $_POST['manual_id'];
        delete_product_manual($conn, $manual_id);
    }

    header("Location: /greendenpeak/page/admin/product-details-cms.php?product_id=$id");
    exit();
?>