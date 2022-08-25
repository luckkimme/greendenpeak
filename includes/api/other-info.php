<?php
    require_once('../connection.php');
    require_once('../processor/admin-processor.php');

    $is_post_set = isset($_POST['method']);
    $is_get_set = isset($_GET['method']);
    $method = null;

    if($is_post_set) {
        $method = $_POST['method'];
    } elseif ($is_get_set) {
        $method = $_GET['method'];
    }

    if($method === 'create_category') {
        $product_id = $_POST['product_id'];
        $categ_name = $_POST['categ_name'];
        set_other_info_category($conn, $categ_name, $product_id);
    }

    elseif($method === 'delete_category') {
        $category_id = intval($_POST['category_id']);
        delete_other_info_category($conn, $category_id);
        exit(1);
    }

    elseif($method === 'edit') {

    }

    header("Location: /greendenpeak/page/admin/product-other-info-cms.php?product_id=$product_id");
    exit();
?>