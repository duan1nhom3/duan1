<?php

    //  include "header.php";
     include "../dao/bill.php";
     include "../dao/categories.php";
     include "../dao/products.php";
     include "../dao/comment.php";
     include "../dao/user.php";

     include "../dao/img.php";
     include "../dao/size.php";
     include "../dao/color.php";

     include "../dao/pdo.php";

     
    $products = loadallpd(0,'');
    if (isset($_GET['act'])) {
        $act = $_GET['act'];

        switch ($act) {
            case 'home':
                include "home.php";
                break;
            case 'categories':
                $listdanhmuc=categories_sellectall();
                include "categories/list.php";
                break;
            case 'addcategories':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $ten_loai = $_POST['ten_loai'];
                    categories_insert($ten_loai);
                    $thongbao = "Thêm thành công";
                }
                include "categories/add.php";
                break;
            case 'deletecategories':
                
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    categories_delete($id);
                }
                $listdanhmuc=categories_sellectall();
                include "categories/list.php";
                break;
            case 'editcategories':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $danhmuc=load_one_categories($id);
                }
                $listdanhmuc=categories_sellectall();
                include "categories/update.php";
                break;
            case 'updatedanhmuc' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $ten_loai = $_POST['ten_loai'];
                    $id = $_POST['id'];
                    categories_update($ten_loai,$id);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc=categories_sellectall();
                include "categories/list.php";
                break;
            case 'products':
                
                include "products/list.php";
                break;
            case 'addproduct':
                if (isset($_POST['submit'])) {
                    $pdname = $_POST['pdname'];
                    $price = $_POST['price'];
                    $cate = $_POST['cate'];
                    $discount = $_POST['discount'];
                    $description = $_POST['description'];

                    $file = $_FILES['img'];
                    $img = $file['name'];

                    $error = [];
                    if ($pdname == "") {
                        $error['pdname'] = "Tên sản phẩm không đưuọc để trống";
                    }
                    if ($price == "") {
                        $error['price'] = "Gía sản phẩm không đưuọc để trống";
                    }
                    if ($price <= 0) {
                        $error['price'] = "Gía sản phẩm là số dương";
                    }
                    if ($cate == 0) {
                        $error['cate'] = "Bạn chưa chọn danh mục cho sản phẩm";
                    }
                    
                    if ($file['size'] <= 0) {
                        $error['img']= "Bạn chưa thêm ảnh";
                    }
                    if ($file['size'] > 0 ) {
                        $ext = pathinfo($img,PATHINFO_EXTENSION);
                        if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png') {
                            $error['img']= "File không phải là ảnh";
                        }elseif ($file['size'] >= 20000000) {
                            $error['img'] = "Ảnh phải dưới 2mb";
                        }
                    }
                    if (!$error) {
                        $idpd = insertpd($pdname,$price,$img,$cate,$discount,$description);
                        move_uploaded_file($file['tmp_name'],'../layout/img/product/'.$img);
                        $thongbao="Thêm thành công";
                    }    
                    
                    if (isset($_FILES['img_des'])&&isset($idpd)) {
                        $file = $_FILES['img_des'];
                        $img = $file['name'];
                        foreach($img as $key => $value){
                            insert_imgdes($value,$idpd);
                            move_uploaded_file($file['tmp_name'][$key],'../layout/img/product/'.$value);
                        }
                    }
                    if (isset($_POST['size'])&&isset($idpd)) {
                        $size = $_POST['size'];
                        foreach($size as $key => $value){
                            insert_size($value,$idpd);
                            
                        }
                    }
                    if (isset($_POST['color'])&&isset($idpd)) {
                        $color = $_POST['color'];
                        foreach($color as $key => $value){
                            insert_color($value,$idpd);
                            
                        }
                    }
                }
                $category = loadallcate();
                $color = color();
                $size = size();
                include "products/add.php";
                break;


            case 'delete_product':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $id = $_GET['id'];
                    delete_product($id);
                    $products = loadallpd(0,'');
                }
                include "products/list.php";
                break;
            case 'edit_product':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $product = loadonepd($id);
                    $img_des = load_imgdes($id);
                }
                $category = loadallcate();
                $color = color();
                $size = size();
                include "products/edit.php";
                break;
            case 'update_product':
                if (isset($_POST['submit'])) {
                    $idpd = $_POST['idpd'];
                    $pdname = $_POST['pdname'];
                    $price = $_POST['price'];
                    $cate = $_POST['cate'];
                    $discount = $_POST['discount'];
                    $description = $_POST['description'];
                    $imgold = $_POST['imgold'];
                    $file = $_FILES['img'];
                    $img = $file['name'];

                    $error = [];
                    if ($pdname == "") {
                        $error['pdname'] = "Tên sản phẩm không đưuọc để trống";
                    }
                    if ($price == "") {
                        $error['price'] = "Gía sản phẩm không đưuọc để trống";
                    }
                    if ($price <= 0) {
                        $error['price'] = "Gía sản phẩm là số dương";
                    }
                    if ($cate == 0) {
                        $error['cate'] = "Bạn chưa chọn danh mục cho sản phẩm";
                    }
                    
                    if ($file['size'] <= 0) {
                        $img = $imgold;
                    }
                    if ($file['size'] > 0 ) {
                        $ext = pathinfo($img,PATHINFO_EXTENSION);
                        if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png') {
                            $error['img']= "File không phải là ảnh";
                        }elseif ($file['size'] >= 20000000) {
                            $error['img'] = "Ảnh phải dưới 2mb";
                        }
                    }
                    if (!$error) {
                        updatepd($idpd,$pdname,$price,$img,$cate,$discount,$description);
                        move_uploaded_file($file['tmp_name'],'../layout/img/product/'.$img);
                        $thongbao="Sửa thành công";
                    }    
                    
                    if (isset($_FILES['img_des'])&&isset($idpd)) {
                        $file = $_FILES['img_des'];
                        $img = $file['name'];
                        // $img_desole = $_POST['img_desold'];
                        if (!empty($img[0])) {
                            delete_img_product($idpd);
                            foreach($img as $key => $value){
                            insert_imgdes($value,$idpd);
                            move_uploaded_file($file['tmp_name'][$key],'../layout/img/product/'.$value);
                            }
                            
                        }
                    }
                    if (isset($_POST['size'])&&isset($idpd)) {
                        delete_size_product($idpd);
                        $size = $_POST['size'];
                        foreach($size as $key => $value){
                            insert_size($value,$idpd);
                            
                        }
                    }
                    if (isset($_POST['color'])&&isset($idpd)) {
                        delete_color_product($idpd);
                        $color = $_POST['color'];
                        foreach($color as $key => $value){
                            insert_color($value,$idpd);
                            
                        }
                    }
                }
                $category = loadallcate();
                $color = color();
                $size = size();
                include "products/list.php";
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


        default:
            include "home.php";
            break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";
?>
