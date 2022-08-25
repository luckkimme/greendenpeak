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

    if($method === 'add_img') {
        $product_id = intval($_POST['product_id']);
        $img_name = $_POST['img_name'];
        $img_src = upload_file($_FILES['img_src']['name'], $_FILES['img_src']['tmp_name'], 'greendenpeak/asset/img/products');
        set_product_img($conn, $img_name, $img_src, $product_id);
    } else if($method === 'edit_img') {
        $product_id = intval($_POST['product_id']);
        $img_id = intval($_POST['img_id']);
        $img_name = $_POST['img_name'];
        $img_src = $_POST['img_src'];   
        if($_FILES['img_src']['error'] !== 4) {
            $img_src = upload_file($_FILES['img_src']['name'], $_FILES['img_src']['tmp_name'], 'greendenpeak/asset/img/products');
        }
        
        update_product_img($conn, $img_name, $img_src, $img_id);
    } else if($method === 'delete_img') {
        $img_id = intval($_POST['img_id']);
        delete_product_img($conn, $img_id);
        exit(1);
    } else if($method === 'get_img') {
        $img_id = intval($_GET['img_id']);
        $img = get_img_by_id($conn, $img_id);
        exit(json_encode($img));
    } else if($method === 'add_vid') {
        $product_id = intval($_POST['product_id']);
        $vid_name = $_POST['vid_name'];
        $vid_src = $_POST['vid_src'];
        set_product_vid($conn, $vid_name, $vid_src, $product_id);
    } else if($method === 'edit_vid') {
         $product_id = intval($_POST['product_id']);
         $vid_id = intval($_POST['vid_id']);
         $vid_name = $_POST['vid_name'];
         $vid_src = $_POST['vid_src'];
        update_product_vid($conn, $vid_name, $vid_src, $vid_id);
    } else if($method === 'delete_vid') {
        $vid_id = intval($_POST['vid_id']);
        delete_product_vid($conn, $vid_id);
        exit(1);
    } else if($method === 'get_vid') {
        $vid_id = intval($_GET['vid_id']);
        $vid = get_vid_by_id($conn, $vid_id);
        exit(json_encode($vid));
    }

    header("Location: /greendenpeak/page/admin/product-gallery-cms.php?product_id=$product_id");
    exit();


?>