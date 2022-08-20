<?php
    require_once('../connection.php');
    require_once('../processor/admin-processor.php');

    $is_method_set = isset($_POST['method']);
    $method = null;

    if($is_method_set) {
        $method = $_POST['method'];
    }


    if($method === 'delete' || $method === 'create') {
        $id = intval($_POST['product_id']);
        $brand_id = intval($_POST['brand_id']);
    } 

    if($method === 'create') {
        $product_name = $_POST['product_name'];
    }


    if($method === 'create') {
        set_product($conn, $product_name, $brand_id);
    } else if ($method === 'delete') {
        delete_product($conn, $id);
    }

    header("Location: /greendenpeak/page/admin/product-cms.php?brand_id=$brand_id");
    exit();
?>