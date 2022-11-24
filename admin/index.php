<?php
    include "header.php";
     include "../dao/bill.php";
     include "../dao/categories.php";
     include "../dao/products.php";
     include "../dao/comment.php";
     include "../dao/user.php";
     

    if (isset($_GET['act'])) {
        $act = $_GET['act'];

        switch ($act) {
            case 'home':
                include "home.php";
                break;
            case 'categories':
                include "home.php";
                break;
            case 'addcategories':
                include "home.php";
                break;
            case 'deletecategories':
                include "home.php";
                break;
            case 'editcategories':
                include "home.php";
                break;
            case 'products':
                include "home.php";
                break;



            default:
            include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";
?>