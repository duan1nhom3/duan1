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
    $products = loadallpd(0,'');
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
                $products_cate = loadallpd($id_cate,$kw);
                
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
                        header('location: index.php');
                    }else{
                        $thongbao = "Email hoặc mật khẩu không chính xác vui lòng thử lại !";
                    }
                }
                include "site/login.php";
                break;

                case 'register':
                    if (isset($_POST['register'])) {
                        $hoten = $_POST['hoten'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $checkdn = register($hoten,$email,$pass);
                        header("location: index.php?act=login");
                    }
                    include "site/register.php";
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
                    $subtotal = $price*$quantity;
                    $spadd = [$id,$name,$price,$img,$size,$color,$quantity,$subtotal];
                    array_push($_SESSION['addcart'],$spadd);
                }
                header('location:index.php?act=cart'); 
                // include "site/cart.php";
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