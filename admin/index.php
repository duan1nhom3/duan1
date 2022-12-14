<?php

     include "header.php";
     include "../dao/bill.php";
     include "../dao/categories.php";
     include "../dao/products.php";
     include "../dao/comment.php";
     include "../dao/user.php";

     include "../dao/img.php";
     include "../dao/size.php";
     include "../dao/color.php";
     include "../dao/thongke.php";
     include "../dao/pdo.php";

     $thongke = pdtheocate();
     $spbanchay = loadsixpdbestsell();
     $categories = loadallcate();
     $listbill = loadtenlistbill();
    $products = loadallpd(0,'','');
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
                if(isset($_POST['submit'])&&($_POST['submit'])){
                    $cate_name = $_POST['cate_name'];
                    $error = [];
                    if ($cate_name == '') {
                        $error['pdname']= "Tên danh mục không được để trống";
                    }
                    if (!$error) {
                        categories_insert($cate_name);
                        $thongbao = "Thêm thành công";
                    }    
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
            case 'updatecategories' :
                if(isset($_POST['submit'])&&($_POST['submit'])){
                    $cate_name = $_POST['cate_name'];
                    $id = $_POST['id'];
                    $error = [];
                    if ($cate_name == '') {
                        $error['pdname']= "Tên danh mục không được để trống";
                    }
                    if (!$error) {
                        categories_update($cate_name,$id);
                        $thongbao = "Cập nhật thành công";
                    }    
                }
                $listdanhmuc=categories_sellectall();
                include "categories/list.php";
                break;
            case 'products':
                
                if (isset($_POST['search'])){
                    $kw = $_POST['keyword'];
                    $id_cate = $_POST['id_cate'];
                }else{
                    $kw = '';
                    $id_cate = 0;
                }
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }else{
                    $page = '';
                }
                
                $products_cate = loadallpd($id_cate,$kw,$page);
                $count = countsp();
                $pagenumber = ceil($count["countpd"]/9);
                $category = loadallcate();
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
                    $products = loadallpd(0,'','');
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
                header('location:index.php?act=products');
                // include "products/list.php";
                break;
            

// controller User
            case 'add_user':
                if (isset($_POST['submit'])) {
                    $fullname=$_POST['fullname'];                   
                    $email=$_POST['email'];                   
                    $password=$_POST['password'];                   
                    $address=$_POST['address'];                   
                    $phone_number=$_POST['phone_number'];
                    $role = $_POST['role'];
                    $img = $_FILES['img'];
                    $hinh = $img['name'];

                    $error = [];
                    if ($fullname == "") {
                        $error['fullname'] = "Họ tên không đưuọc để trống";
                    }
                    if ($email == "") {
                        $error['email'] = "Email không được để trống";
                    }
                    if ($password == "") {
                        $error['pass'] = "Mật khẩu không được bỏ trống";
                    }
                    if ($address == "") {
                        $error['address'] = "Địa chỉ không được bỏ trống";
                    }
                    if ($phone_number == "") {
                        $error['phone'] = "Số điện thoại không được bỏ trống";
                    }
                    if ($role == "0") {
                        $error['role'] = "Hãy chọn vai trò";
                    }
                    
                    if ($img['size'] <= 0) {
                        $error['img']= "Bạn chưa thêm ảnh";
                    }
                    if ($img['size'] > 0 ) {
                        $ext = pathinfo($hinh,PATHINFO_EXTENSION);
                        if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png') {
                            $error['img']= "File không phải là ảnh";
                        }elseif ($img['size'] >= 20000000) {
                            $error['img'] = "Ảnh phải dưới 2mb";
                        }
                    }
                    if (!$error) {
                        move_uploaded_file($img['tmp_name'],'../layout/img/product/'.$hinh);
                        add_user($fullname,$email,$password,$hinh,$address,$phone_number,$role);
                        $thongbao = "Thêm thành công";
                    }
                }
                $role = loadrole();
                include "user/add.php";

                break;
            case 'ds_user':
                $list_user = loadall_user();
                $role = loadrole();
                include "user/list.php";
                break;
            case 'delete_user':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_user($_GET['id']);
                }
                $list_user = loadall_user();
                include "user/list.php";
                break;
            case 'edit_user':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                $tk = loadone_user($_GET['id']);
                }
                $role = loadrole();
                include "user/edit.php";
                break;
            case 'update_user':
                if (isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $fullname=$_POST['fullname'];                   
                    $email=$_POST['email'];                   
                    $password=$_POST['password'];                   
                    $address=$_POST['address'];                   
                    $phone_number=$_POST['phone_number'];
                    $role = $_POST['role'];
                    $img = $_FILES['img'];
                    $hinh = $img['name'];
                    $anh = $_POST['hinh'];
                    $error = [];
        
                    if ($fullname == "") {
                        $error['fullname'] = "Họ tên không đưuọc để trống";
                    }
                    if ($email == "") {
                        $error['email'] = "Email không được để trống";
                    }
                    if ($password == "") {
                        $error['pass'] = "Mật khẩu không được bỏ trống";
                    }
                    if ($address == "") {
                        $error['address'] = "Địa chỉ không được bỏ trống";
                    }
                    if ($phone_number == "") {
                        $error['phone'] = "Số điện thoại không được bỏ trống";
                    }
                    if ($role == "0") {
                        $error['role'] = "Hãy chọn vai trò";
                    }
                    
                    if ($img['size'] <= 0) {
                        $hinh = $anh;
                    }
                    if ($img['size'] > 0 ) {
                        $ext = pathinfo($hinh,PATHINFO_EXTENSION);
                        if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png') {
                            $error['img']= "File không phải là ảnh";
                        }elseif ($img['size'] >= 20000000) {
                            $error['img'] = "Ảnh phải dưới 2mb";
                        }
                    }
                    if (!$error) {
                        move_uploaded_file($img['tmp_name'],'../layout/img/product/'.$hinh);
                        update_user($id,$fullname,$email,$password,$hinh,$address,$phone_number,$role);
                        $thongbao = "Cập nhật thành công";
                        // header('location: index.php?act=ds_user');
                    }
                }
                $role = loadrole();
                $list_user = loadall_user();
                include "user/list.php";

                break;
            case 'comment':
                $show_comment = comment();
                $user = loadall_user();
                $pd = loadpd();
                include "comment/list.php";
                break;
            case 'delcomment':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    deletecomment($_GET['id']);
                    }
                    $show_comment=comment();
                    $user = loadall_user();
                    $pd = loadpd();
                    include "comment/list.php";
                break;
            case 'bill':
                if (isset($_POST['search'])) {
                    $status = $_POST['status'];
                }else{
                    $status = '';
                }
                $bill = loadlistbill($status);
                include "cart/list.php";
                break;
            case 'edit_bill':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }

                $bill = loadonebill($id);
                $bill_details = loadonecart($id);;
                include "cart/editbill.php";
                break;
            case 'updatebill':
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $ttdh = $_POST['ttdh'];
                    updatebill($id,$ttdh);
                    $thongbao="Cập nhật thành công";
                }
                $bill = loadlistbill('');
                include "cart/list.php";
                break;
            case 'thongke':
                $thongke = pdtheocate();
                $spbanchay = loadsixpdbestsell();
                $categories = loadallcate();
                $listbill = loadtenlistbill();
                include "thongke/list.php";
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
