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

    elseif($method === 'add_item') {
        $product_id = $_POST['product_id'];
        $category_id = intval($_POST['category_id']);
        $other_info_title = $_POST['other_info_title'];
        $other_info_subtitle = $_POST['other_info_subtitle'];
        $other_info_desc = $_POST['other_info_desc'];
        $other_info_desc_list = $_POST['other_info_desc_list'];
        $other_info_img = upload_file($_FILES['other_info_img']['name'], $_FILES['other_info_img']['tmp_name'], 'greendenpeak/asset/img/products');
        set_other_info_item($conn, $other_info_title, $other_info_subtitle, $other_info_desc, $other_info_desc_list, $other_info_img, $category_id);
    }

    elseif($method === 'edit_item') {
        $product_id = $_POST['product_id'];
        $item_id = intval($_POST['item_id']);
        $other_info_title = $_POST['other_info_title'];
        $other_info_subtitle = $_POST['other_info_subtitle'];
        $other_info_desc = $_POST['other_info_desc'];
        $other_info_desc_list = $_POST['other_info_desc_list'];
        $other_info_img = $_POST['other_info_img'];
        if($_FILES['other_info_img']['error'] !== 4) {
            $other_info_img = upload_file($_FILES['other_info_img']['name'], $_FILES['other_info_img']['tmp_name'], 'greendenpeak/asset/img/products');
        }
        update_other_info_item($conn, $other_info_title, $other_info_subtitle, $other_info_desc, $other_info_desc_list, $other_info_img, $item_id);
    }

    elseif($method === 'delete_item') {
        $product_id = $_POST['product_id'];
        $item_id = $_POST['item_id'];
        delete_other_info_item($conn, $item_id);
    }

    elseif($method === 'get_item') {
        $item_id = $_GET['item_id'];
        $item = get_other_info_item_by_id($conn, $item_id);
        exit(json_encode($item));
    }

    header("Location: /greendenpeak/page/admin/product-other-info-cms.php?product_id=$product_id");
    exit();
?>