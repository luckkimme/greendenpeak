<?php

    require_once __DIR__ . '/../connection.php';
    require_once __DIR__ . '/../function/query.php';

    function get_index_carousel($conn) {
        $query = 'SELECT * FROM `index_carousel` WHERE `isShown` = 1';
        $carousel = get_multiple_query($query, $conn);
        return $carousel;
    }

    function get_carousel_count($conn) {
        $query = 'SELECT COUNT(*) AS count FROM `index_carousel` WHERE `isShown` = 1';
        $carousel_count = get_single_query($query, $conn);
        return $carousel_count;
    }

    function get_faq($conn) {
        $query = 'SELECT * FROM `faq`';
        $faq = get_multiple_query($query, $conn);
        return $faq;
    }

    function get_company_info($conn) {
        $query = 'SELECT * FROM `company`';
        $company = get_single_query($query, $conn);
        return $company;
    }

?>