<?php
    ob_start();
    session_start();
    
    include "dao/pdo.php";
    include "dao/bill.php";
    include "dao/categories.php";
    include "dao/products.php";
    include "dao/comment.php";
    include "dao/user.php";
    include "dao/img.php";
    include "dao/size.php";
    include "dao/color.php";
    include "dao/thongke.php";
    include "header.php";

    function convert_name($str) {
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(A|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
		$str = preg_replace("/(E|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
		$str = preg_replace("/(I|Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
		$str = preg_replace("/(O|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
		$str = preg_replace("/(U|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
		$str = preg_replace("/(Y|Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
        $str = preg_replace("/(W)/", 'w', $str);
		$str = preg_replace("/(Đ)/", 'd', $str);
        $str = preg_replace("/(Q)/", 'q', $str);
        $str = preg_replace("/(G)/", 'g', $str);
        $str = preg_replace("/(V)/", 'v', $str);
        $str = preg_replace("/(T)/", 't', $str);
        $str = preg_replace("/(1)/", 'one', $str);
        $str = preg_replace("/(2)/", 'two', $str);
        $str = preg_replace("/(3)/", 'three', $str);

		$str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
		$str = preg_replace("/( )/", '-', $str);
		return $str;
	}
    $products = loadallpd(0,'','');
    $cate = loadallcate();
    $pdnew = loadpdnew();
    $pdsale = loadpdsale();
    $pdsell = loadpdbestsell();

    if (!isset($_SESSION['addcart'])) $_SESSION['addcart'] =[];
    // controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                
                include "site/home.php";
                break;

            case 'productspage':
                if (isset($_GET['id'])) {
                    $id_cate = $_GET['id'];  
                }else{
                    $id_cate = 0;
                }
                if (isset($_POST['search'])){
                    $kw = $_POST['keyword'];
                }else{
                    $kw = '';
                }
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }else{
                    $page = '';
                }
                
                $products_cate = loadallpd($id_cate,$kw,$page);
                $count = countsp();
                $pagenumber = ceil($count["countpd"]/9);
                include "site/productspage.php";
                break;


            case 'product_details':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $pddetails = loadonepd($id);
                    $listbl = loadblpd($id);
                }
                if (isset($_POST['comment'])) {
                    $content = $_POST['message'];
                    $id_user = $_POST['id_user'];
                    $id_pd = $_POST['id_pd'];
                    insertcomment($content,$id_user,$id_pd);
                    header('location: index.php?act=product_details&id='.$id.'');
                }
                include "site/products_details.php";
                break;
            case 'login':
                if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $checkdn = checklogin($email,$pass);
                    if (is_array($checkdn)) {
                        $_SESSION['user'] = $checkdn;
                        if ($_SESSION['user']['role_id'] == 1) {
                            header('location: index.php');
                        }else{
                            header('location: admin/index.php');
                        }
                        
                    }else{
                        $thongbao = "Email hoặc mật khẩu không chính xác vui lòng thử lại !";
                    }
                }
                include "site/login.php";
                break;
            case 'signup':
                if (isset($_POST['signup'])) {
                    $fullname = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $repass = $_POST['repass'];
                    $role = 1;
                    $file = $_FILES['img'];
                    $img = $file['name'];
                    $error = [];


                    $checkemail = checkemail($email);
                    
                    if ($fullname == "") {
                        $error['name'] = "Họ và tên không được bỏ trống";
                    }
                    if ($email == "") {
                        $error['email'] = "Email không được bỏ trống";
                    }
                    
                    if (is_array($checkemail)) {
                        if ($email==$checkemail['email']) {
                        $error['email'] = "Email này đã được đăng ký vui lòng nhập một email mới";
                        }
                    }
                    
                    if ($pass == "") {
                        $error['pass'] = "Mật khẩu không được bỏ trống";
                    }
                    if ($repass == "") {
                        $error['repass'] = "Nhập lại mật khẩu không được bỏ trống";
                    }
                    if ($repass != $pass) {
                        $error['repass'] = "Mật khẩu nhập lại không chính xác"; 
                    }

                    if ($file['size'] <= 0) {
                        $img = "anhmacdinh.jpg";
                    }
                    if ($file['size'] > 0) {
                        $ext = pathinfo($img,PATHINFO_EXTENSION);
                        if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                            $error['img'] = "File không phải là ảnh vui lòng chọn file khác";
                        }elseif ($file['size'] >= 20000000) {
                            $error['img'] = "Ảnh phải dưới 2mb";
                        }
                    }
                    if (!$error) {
                        signup($fullname,$email,$pass,$img,$role);
                        move_uploaded_file($file['tmp_name'],'layout/img/product/'.$img);
                        $thongbao="Đăng ký thành công đăng nhập để sử dụng các chức năng";
                    }
                }
                include "site/signup.php";
                break;
            
            case 'forgotpass':
                if (isset($_POST['forgot'])) {
                    $email = $_POST['email'];
                    $fullname = $_POST['name'];
                    $forgotpass = forgotpass($email,$fullname);
                    if (is_array($forgotpass)) {
                        $thongbao = "Mật khẩu của bạn là:" .$forgotpass['password'];
                    }else{
                        $thongbao = "Email hoặc Họ tên không chính xác vui lòng thử lại !";
                    }
                }
                include "site/forgotpass.php";
                break;
            case 'infouser':
                include "site/infouser.php";
                break;
            
            case 'updateinfo':
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $fullname=$_POST['fullname'];                   
                    $email=$_POST['email'];                                  
                    $address=$_POST['address'];
                    $password = $_POST['password'];                  
                    $phone_number=$_POST['phone_number'];


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
                    
                    if ($address == "") {
                        $error['address'] = "Địa chỉ không được bỏ trống";
                    }
                    if ($phone_number == "") {
                        $error['phone'] = "Số điện thoại không được bỏ trống";
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
                        move_uploaded_file($img['tmp_name'],'layout/img/product/'.$hinh);
                        update_info($id,$fullname,$email,$hinh,$address,$phone_number);
                        $thongbao = "Cập nhật thành công";
                        $_SESSION['user'] = checklogin($email,$password);
                        // header('location: index.php?act=ds_user');
                    }
                }
                include "site/updateinfo.php";
                break;
            case 'doipass':
                if (isset($_POST['doipass'])) {
                    $emailss = $_SESSION['user']['email'];
                    $email = $_POST['email'];
                    $id = $_SESSION['user']['id'];
                    $pass = $_SESSION['user']['password'];
                    $passcu = $_POST['passcu'];
                    $passmoi = $_POST['passmoi'];
                    $xacnhan = $_POST['repass'];
                    $error = [];
    
                    if ($passcu == "") {
                        $error['passcu'] = "Mật khẩu cũ không được bỏ trống";
                    }
                    if ($passcu!==$pass) {
                        $error['passcu'] = "Mật khẩu cũ không chính xác";
                    }
                    if ($email != $emailss) {
                        $error['email'] = "Email không chính xác !";
                    }
                    if ($passmoi == "") {
                        $error['passmoi'] = "Mật khẩu mới không được bỏ trống";
                    }
                    if ($xacnhan == "") {
                        $error['repass'] = "Xác nhận mật khẩu mới không được bỏ trống";
                    }
                    if ($xacnhan != $passmoi) {
                        $error['repass'] = "Xác nhận mật khẩu và mật khẩu mới không giống nhau !";
                    }
                    if (!$error) {
                        doipass($id,$passmoi);
                        $thongbao = "Đổi mật khẩu thành công";
                        
                    } 
                }
                include 'site/doipass.php';
                break;
            case 'logout':
                session_unset();
                header('location:index.php');
                break;
            case 'addcart':
                if (isset($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $color = $_POST['color'];
                    $size = $_POST['size'];
                    $quantity = $_POST['quantity'];
                    $discount = $_POST['discount'];
                    $luotmua = $_POST['luotmua'];
                    $subtotal = $price*$quantity;
                    $i = 0;
                    $kt=0;
                    $error = [];
                    if ($size == 0) {
                        $error['size'] = "Bạn chưa chọn size";
                    }
                    if ($color == 0) {
                        $error['color'] = "Bạn chưa chọn màu";
                    }
                    if (!$error) {
                        if (isset($_SESSION['addcart'])&&(count($_SESSION['addcart'])>0)) {
                            foreach($_SESSION['addcart'] as $pd){
                                if ($pd[0] = $id && $pd[4] == $size && $pd[5] == $color) {
                                    $quantity+=$pd[6];
                                    $subtotal = $price*$quantity;
                                    $kt=1;

                                    $_SESSION['addcart'][$i][6] = $quantity;
                                    $_SESSION['addcart'][$i][7] = $subtotal;
                                    break;
                                }
                                $i++;
                            }
                        }
                        
                        if ($kt==0) {
                            $spadd = [$id,$name,$price,$img,$size,$color,$quantity,$subtotal,$discount,$luotmua];
                            array_push($_SESSION['addcart'],$spadd);
                        }

                        header('location:index.php?act=cart'); 
                    }else {
                    setcookie("thongbaosize",''.$error['size'],time()+1);
                    setcookie("thongbaomau",''.$error['color'],time()+1);
                    header('location:index.php?act=product_details&id='.$id);
                }
                    
                    
                }
                // include "site/products_details.php";
                break;
            
            case 'delcart':
                if (isset($_GET['id'])) {
                    $id = $_GET['id']-1;
                    array_splice($_SESSION['addcart'],$id,1);
                }else{
                    $_SESSION['addcart'] = [];
                }
                header('location:index.php?act=cart'); 
                break;
            
            case 'cart':
                include "site/cart.php";
                break;
            case 'thanhtoan':
                include "site/checkout.php";
                break;
            case 'add_bill':
                if (isset($_POST['addbill'])) {
                    $id = $_POST['id'];
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $pttt = $_POST['pttt'];
                    $total = $_POST['tongtien'];
                    $status = "Đang xử lí";
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $time = date('d/m/Y - H:i:s');
                    
                    $idbill=insertbill($id,$hoten,$diachi,$sdt,$email,$pttt,$total,$status,$time);
                    
                    foreach($_SESSION['addcart'] as $cart){
                        insertbill_details($idbill,$cart[1],$cart[2],$cart[3],$cart[4],$cart[5],$cart[6],$total);
                        luotmua($cart[0],$cart[6],$cart[9]);
                    }
                    $_SESSION['addcart'] = [];
                }
                $bill = loadonebill($idbill);
                $bill_details = loadonecart($idbill);
                include "site/bill.php";
                break;
            case 'mybill':
                if (isset($_POST['doitt'])) {
                    $id = $_POST['id_bill'];
                    $ttdh = $_POST['status'];
                    updatebill($id,$ttdh);
                    header("location: index.php?act=mybill");
                }
                $id = $_SESSION['user']['id'];
                $bill = loadallbill($id);
                
                    include "site/mybill.php";
                break;
            case 'bill_details':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }

                $bill = loadonebill($id);
                $bill_details = loadonecart($id);
                include "site/billdetails.php";
                break;

            default:
                include "site/home.php";
                break;
        }
    }else{
        include "site/home.php";
    }
    
    include "footer.php";
    ob_end_flush();
?>