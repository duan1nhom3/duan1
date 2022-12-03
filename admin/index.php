<?php
     include "header.php";
     include "dao/bill.php";
     include "dao/categories.php";
     include "dao/products.php";
     include "dao/comment.php";
     include "dao/user.php";
     include "dao/pdo.php";
     

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
// controller User
            case 'add_user':
                if (isset($_POST['themmoi'])) {
                    $fullname=$_POST['fullname'];                   
                    $email=$_POST['email'];                   
                    $password=$_POST['password'];                   
                    $address=$_POST['address'];                   
                    $phone_number=$_POST['phone_number'];
                    $img = $_FILES['img'];
                    $hinh = $img['name'];
                    var_dump($hinh);
                    move_uploaded_file($img['tmp_name'],'../layout/img/product/'.$hinh);
                    add_user($fullname,$email,$password,$hinh,$address,$phone_number);
                }
                include "user/add.php";
                break;
            case 'ds_user':
                $list_user = loadall_user();
                include "user/list.php";
                break;
            case 'xoa_user':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_user($_GET['id']);
                }
                $list_user = loadall_user();
                include "user/list.php";
                break;
            case 'sua_user':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                $tk = loadone_user($_GET['id']);
                }
                include "user/edit.php";
                break;
            case 'update_user':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {               
                $fullname=$_POST['fullname'];                   
                $email=$_POST['email'];                   
                $password=$_POST['password'];                   
                $address=$_POST['address'];                   
                $phone_number=$_POST['phone_number'];                   
                $id=$_POST['id'];   
                $img = $_FILES['img'];
                $hinh = $img['name'];
                move_uploaded_file($img['tmp_name'],'../layout/img/product/'.$hinh);
                update_user($id,$fullname,$password,$hinh,$email,$address,$phone_number);                  
                }
                $list_user = loadall_user();
                include "user/list.php";
                break;
            case 'comment': 
                $show_comment=comment();
                include "comment/list.php";
                break;
            case 'delcomment':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                deletecomment($_GET['id']);
                }
                $show_comment=comment();
                include "comment/list.php";
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
