<?php
session_start();
    include "dao/pdo.php";
    include "dao/products.php";
    include "dao/bill.php";


    $products = loadallpd();
    if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] =[];
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
                    $size = size();
                    $color = color();
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

                    $selectcolor = selectcolor($color);
                    $selectsize = selectsize($size);
                    $spadd = [$id,$pd_name,$price,$img,$selectsize['size'],$selectcolor['color_name'],$size,$color];
                    array_push($_SESSION['mycart'],$spadd);
                    foreach($_SESSION['mycart'] as $cart){var_dump($cart[7]);};
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
            case 'thanhtoan':
                include "site/checkout.php";
                break;
            case 'addbill':
                if (isset($_POST['addbill'])) {
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $pttt = $_POST['pttt'];
                    $total = $_POST['tongtien'];

                    $idbill=insertbill($hoten,$diachi,$sdt,$email,$pttt,$total);
                    foreach($_SESSION['mycart'] as $cart){
                        insertbill_details($idbill,$cart[1],$cart[2],$cart[3],$cart[6],$cart[7],$total,);
                    }
                    $_SESSION['mycart'] = [];
                }
                $bill = loadonebill($idbill);
                $bill_details = loadonecart($idbill);
                include "site/bill.php";
                break;
            default:
                include "site/products.php";
                break;
        }
    }else{
        include "site/products.php";
    }
    

?>