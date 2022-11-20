<?php
session_start();
    include "dao/pdo.php";
    include "dao/products.php";
    include "dao/bill.php";


    $products = loadallpd();

    // controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'product':
                include "site/products.php";
                break;
            case 'chitietsp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $pddetails = loadonepd($id);
                }
                include "site/chitietsp.php";
                break;
            case 'addtocart':
                if (isset($_POST['them'])) {
                    $id = $_POST['id'];
                    $pd_name = $_POST['pd_name'];
                    $price = $_POST['price'];
                    $img = $_POST['img'];
                    $size = $_POST['size'];
                    $color = $_POST['color'];

                    $spadd = [$id,$pd_name,$price,$img,$size,$color];
                    array_push($_SESSION['mycart'],$spadd);
                }
                include "site/cartdemo.php";
                break;
            case 'delcart':
                if (isset($_GET['id'])) {
                    $id = $_GET['id']-1;
                    array_splice($_SESSION['mycart'],$id,1);
                }else{
                    $_SESSION['mycart'] = [];
                }
                header('location:indexdemo.php?act=viewcart'); 
                break;
            case 'viewcart':
                include "site/cartdemo.php";
                break;
            default:
                include "site/products.php";
                break;
        }
    }else{
        include "site/products.php";
    }
    

?>