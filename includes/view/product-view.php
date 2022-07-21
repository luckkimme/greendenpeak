<?php

    //require_once __DIR__ . '/../processor/product-processor.php';

    function display_brand_products($brand, $product_name) {
        $productBrand = '';
        $productName = '';
        $productID = '';
        $currBrand = '';
        /* $test = get_product_name($conn, $brand['brand_id']);
        foreach($test as $t){
            echo $t;
        }  */
        foreach($brand as $pBrand) {
            $currBrand = $pBrand['brand_id'];
            
            $productBrand = '<li class="dropdown">';
            $productBrand .='<a tabindex="0" class="dropdown-item dropdown-toggle" role="button"';
            $productBrand .='data-bs-toggle="dropdown" data-bs-trigger="focus" title="Click to view ' . $pBrand['brand_name'] . '">';
            $productBrand .= $pBrand['brand_name'] . '</a>';
            $productBrand .='<ul class="dropdown-menu">';
            
            foreach($product_name as $pName) {
                if($currBrand == $pName['fk_brand_id']) {
                    $productBrand .= '<li><a class="dropdown-item" href="/greendenpeak/page/product.php?productID=' . $pName['product_id'] .'">';
                    $productBrand .= $pName['product_name'] . '</a></li>';
                }
            } 
            $productBrand .='</ul></li>';
            
            echo $productBrand;
        }
        return 0;
    }
    
?>