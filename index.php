<?php
    include "dao/pdo.php";
    include "dao/products.php";
    include "dao/bill.php";
    include "header.php";



    // controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                include "site/home.php";
                break;
            case 'product_details':
                include "site/products_details.php";
                break;
            case 'cart':
                include "site/cart.php";
                break;
            default:
                include "site/home.php";
                break;
        }
    }else{
        include "site/home.php";
    }
    
    include "footer.php";
?>