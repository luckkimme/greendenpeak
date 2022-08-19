<?php
    require_once('../connection.php');
    require_once('../processor/admin-processor.php');
    require_once('../processor/upload-processor.php');

    $is_method_set = isset($_POST['method']);
    $method = null;

    if($is_method_set) {
        $method = $_POST['method'];
        $id = intval($_POST['product_id']);
    }

    if($method === 'edit_product_information') {
        $product_name = $_POST['product_name'];
        $product_desc = $_POST['product_desc'];
        $product_btn = $_POST['product_btn'];
        $product_img = $_POST['product_img'];
        if($_FILES['product_img']['error'] !== 4) {
            $product_img = upload_file($_FILES['product_img']['name'] , $_FILES['product_img']['tmp_name'], 'greendenpeak/asset/img/products');
        }
    }

    if($is_method_set && $method === 'edit_product_information') {
        update_product_information($conn, $id, $product_name, $product_desc, $product_img, $product_btn);
    } 

    header("Location: /greendenpeak/page/admin/product-details-cms.php?product_id=$id");
?>