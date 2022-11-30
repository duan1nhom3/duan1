<?php
    include "dao/pdo.php";
    include "dao/products.php";
    include "dao/bill.php";
    include "header.php";

    $products = loadallpd();

    // controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                
                include "site/home.php";
                break;
            case 'products_details':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $pddetails = loadonepd($id);
                }
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