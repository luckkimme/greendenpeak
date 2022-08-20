<?php
    require_once('../connection.php');
    require_once('../processor/admin-processor.php');
    require_once('../processor/upload-processor.php');

    $is_method_set = isset($_POST['method']);
    $method = null;

    if($is_method_set) {
        $method = $_POST['method'];
    }

    if($method === 'delete_carousel') {
        $carousel_id = intval($_POST['carousel_id']);
    }

    if($method === 'edit_product_information') {
        $id = intval($_POST['product_id']);
        $product_name = $_POST['product_name'];
        $product_desc = $_POST['product_desc'];
        $product_btn = $_POST['product_btn'];
        $product_img = $_POST['product_img'];
        if($_FILES['product_img']['error'] !== 4) {
            $product_img = upload_file($_FILES['product_img']['name'] , $_FILES['product_img']['tmp_name'], 'greendenpeak/asset/img/products');
        }
    }

    if($method === 'edit_features') {
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
        
    }

    if($method === 'edit_kit') {
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
    }

    if($method === 'edit_product_information') {
        update_product_information($conn, $id, $product_name, $product_desc, $product_img, $product_btn);
    } 
    
    else if($method === 'delete_carousel') {
        delete_feature_carousel($conn, $carousel_id);
        exit(1);
    } 
    
    else if($method === 'edit_features') {
        update_carousel_title($conn, $id, $carousel_title);
        if(check_fk_exist($conn, $id, 'product_feature', 'fk_product_id')) {
            update_product_feature($conn, $features_title, $features_desc, $features_img, $id);
        } else {
            set_product_feature($conn, $features_title, $features_desc, $features_img, $id);
        }

        if($is_carousel_set) set_feature_carousel($conn, $carousel_subtitles, $carousel_desc, $carousel_img, $id);
    }

    else if($method ==='edit_kit') {
        if(check_fk_exist($conn, $id, 'product_kit', 'fk_product_id')) {
            update_product_kit($conn, $kit_title, $kit_subtitle, $kit_standard_title, $kit_standard_desc, $kit_optional_title, $kit_optional_desc, $kit_img, $id);
        } else {
            set_product_kit($conn, $kit_title, $kit_subtitle, $kit_standard_title, $kit_standard_desc, $kit_optional_title, $kit_optional_desc, $kit_img, $id);
        }
    }

    header("Location: /greendenpeak/page/admin/product-details-cms.php?product_id=$id");
    exit();
?>