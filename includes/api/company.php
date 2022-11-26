<?php
    require_once('../connection.php');
    require_once('../processor/index-processor.php');
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

    if($method === 'edit_company_information') {
        $id = intval($_POST['company_id']);
        $company_name = $_POST['company_name'];
        $comp_logo = $_POST['comp_logo'];
        $company_email = $_POST['company_email'];
        $company_tele = $_POST['company_tele'];
        $company_phone = $_POST['company_phone'];
        $company_address = $_POST['company_address'];
        $company_vision = $_POST['company_vision'];
        $company_mission = $_POST['company_mission'];
        $company_slogan = $_POST['company_slogan'];
        $company_history = $_POST['company_history'];
        $comp_history_img = $_POST['comp_history_img'];
        $company_core_values = $_POST['company_core_values'];
        $company_founder = $_POST['company_founder'];
        if($_FILES['comp_logo_file']['error'] !== 4) {
            $comp_logo = upload_file($_FILES['comp_logo_file']['name'] , $_FILES['comp_logo_file']['tmp_name'], 'greendenpeak/asset/img/logo');
        }
        echo $comp_logo;
        if($_FILES['comp_history_img']['error'] !== 4) {
            $comp_history_img = upload_file($_FILES['comp_history_img']['name'] , $_FILES['comp_history_img']['tmp_name'], 'greendenpeak/asset/img/about-us');
        } 

        update_company_information($conn, $id, $company_name, $comp_logo, $company_email, $company_tele, $company_phone, $company_address, $company_vision, $company_mission, $company_slogan, $company_history, $comp_history_img, $company_core_values, $company_founder);
    }

    else if($method === 'get_socmed') {
        $socmed_id = intval($_GET['socmed_id']);
        $socmed_item = get_socmed_item_by_id($conn, $socmed_id);
        exit(json_encode($socmed_item));
    } 

    else if ($method === 'edit_socmed') {
        $socmed_id = $_POST['socmed_id'];
        $socmed_link = $_POST['socmed_link'];
        edit_socmed_link($conn, $socmed_id, $socmed_link);
    }

    else if ($method === 'add_img') {
        $img_name = $_POST['img_name'];
        $img_src = upload_file($_FILES['img_src']['name'], $_FILES['img_src']['tmp_name'], 'greendenpeak/asset/img/index');
        set_carousel_img($conn, $img_name, $img_src);
    } else if($method === 'edit_img') {
        $img_id = intval($_POST['img_id']);
        $img_name = $_POST['img_name'];
        $img_src = $_POST['img_src'];   
        if($_FILES['img_src']['error'] !== 4) {
            $img_src = upload_file($_FILES['img_src']['name'], $_FILES['img_src']['tmp_name'], 'greendenpeak/asset/img/index');
        }
        update_carousel_img($conn, $img_name, $img_src, $img_id);
    } else if($method === 'delete_img') {
        $img_id = intval($_POST['img_id']);
        delete_carousel_img($conn, $img_id);
    } else if($method === 'get_img') {
        echo '<script>alert("test");</script>';
        $img_id = intval($_GET['img_id']);
        $img = get_carousel_img_by_id($conn, $img_id);
        exit(json_encode($img));
    }

    
    header("Location: /greendenpeak/page/admin/aboutus-cms.php");
    exit(); 
?>