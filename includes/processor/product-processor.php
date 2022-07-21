<?php
    require_once __DIR__ . "/../function/query.php";
    require_once __DIR__ . "/../connection.php";

    function get_brand($conn){
        $query = 'SELECT * FROM brand';
        $brand = get_multiple_query($query, $conn);
        return $brand;
    }

    function get_product_name($conn){
        $product_name = '';
        $query = 'SELECT p.product_id, p.product_name, p.fk_brand_id FROM product p JOIN brand b ON p.fk_brand_id = b.brand_id';
        $product_name = get_multiple_query($query, $conn);
        return $product_name;
    }


?>