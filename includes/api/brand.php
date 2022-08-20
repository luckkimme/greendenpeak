<?php 
    require_once('../connection.php');
    require_once('../processor/admin-processor.php');

    $is_method_set = isset($_POST['method']);
    $method = null;
    
    if($is_method_set) {
        $method = $_POST['method'];
    }

    // Get necessary data for specific method
    // Create and edit need all the input fields
    // Delete only needs the id
    if($method === 'delete' || $method === 'edit') {
        $id = intval($_POST['brand_id'])   ;
    } 
    
    if($method === 'create' || $method === 'edit') {
        $brand_name = $_POST['brand_name'];
    }


    if($method === 'create') {
        set_brand($conn, $brand_name);
    } else if ($method === 'edit') {
        update_brand($conn, $id, $brand_name);
    } else if ($method === 'delete') {
        delete_brand($conn, $id);
    }

    header('Location: /greendenpeak/page/admin/brand-cms.php');
    exit();
?>