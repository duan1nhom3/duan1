
    <!doctype html>
    <html class="no-js" lang="">
        
    
    <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>MELIA-Cửa hàng thời trang nữ đa phong cách</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
            <!-- Place favicon.ico in the root directory -->
    
            <!-- CSS here -->
            <link rel="stylesheet" href="layout/css/bootstrap.min.css">
            <link rel="stylesheet" href="layout/css/animate.min.css">
            <link rel="stylesheet" href="layout/css/magnific-popup.css">
            <link rel="stylesheet" href="layout/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="layout/css/jquery.mCustomScrollbar.min.css">
            <link rel="stylesheet" href="layout/css/bootstrap-datepicker.min.css">
            <link rel="stylesheet" href="layout/css/swiper-bundle.min.css">
            <link rel="stylesheet" href="layout/css/jquery-ui.min.css">
            <link rel="stylesheet" href="layout/css/nice-select.css">
            <link rel="stylesheet" href="layout/css/jarallax.css">
            <link rel="stylesheet" href="layout/css/flaticon.css">
            <link rel="stylesheet" href="layout/css/slick.css">
            <link rel="stylesheet" href="layout/css/default.css">
            <link rel="stylesheet" href="layout/css/style.css">
            <link rel="stylesheet" href="layout/css/responsive.css">
            <link rel="stylesheet" href="layout/css/index.css">
        </head>
        <body>
    
    
            <!-- preloader  -->
            <!-- <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                    </div>
                    <div class="loader">
                        <div class="row">
                            <div class="col-3 loader-section section-left">
                                <div class="bg"></div>
                            </div>
                            <div class="col-3 loader-section section-left">
                                <div class="bg"></div>
                            </div>
                            <div class="col-3 loader-section section-right">
                                <div class="bg"></div>
                            </div>
                            <div class="col-3 loader-section section-right">
                                <div class="bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- preloader end -->
    
    
            <!-- Scroll-top -->
            <button class="scroll-top scroll-to-target" data-target="html">
                <i class="fas fa-angle-up"></i>
            </button>
            <!-- Scroll-top-end-->
            
            <!-- header-area -->
            <header>
                <div class="header-top-wrap">
                    <div class="container custom-container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                                <div class="logo">
                                    <a href="index.php?act=home"><img src="layout/img/logo/logoxoaphonghoanchinh.png" alt="" width="50%"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-6">
                                <div class="header-top-offer">
                                    <p>GIẢM GIÁ LÊN ĐẾN <span>70% .</span> MUA NGAY</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="header-top-action">
                                    <ul>
                                    <?php
                                        if (isset($_SESSION['user'])) {
                                        extract($_SESSION['user']);
                                    ?>
                                        <li class="dropdown text-end"> 
                                        
                                            <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton">
                                            <img src="layout/img/product/<?=$img?>" alt="mdo" width="32" height="32" class="rounded-circle">
                                            </a>
                                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" >Xin chào <?=$fullname?></a></li>
                                            <li><a class="dropdown-item" href="index.php?act=updateinfo">Cập nhật tài khoản</a></li>
                                            <li><a class="dropdown-item" href="index.php?act=infouser">Thông tin tài khoản</a></li>
                                            <li><a class="dropdown-item" href="index.php?act=doipass">Đổi mật khẩu</a></li>
                                            <li><a class="dropdown-item" href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a onclick="return confirm('Bạn có chắc muốn đăng xuất không')" class="dropdown-item" href="index.php?act=logout">Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                    <?php }else{ ?>
                                        <li class="sign-in"><a href="index.php?act=login">ĐĂNG NHẬP</a></li>
                                    <?php }?>
                                        <li class="wish-list"><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                        <li class="header-shop-cart"><a href="#"><i class="flaticon-shopping-bag"></i>
                                            <span>
                                                <?php if (isset($_SESSION['addcart'])) {
                                                    $a=count($_SESSION['addcart']);
                                                    echo $a;
                                                }?>
                                            </span></a>
                                            <ul class="minicart">
                                                <?php if (isset($_SESSION['addcart'])) { ?>
                                                
                                                <?php $tong = 0;$stt=1?>
                                                <?php foreach($_SESSION['addcart'] as $cart):?>
                                                
                                                <li class="d-flex align-items-start">
                                                    <div class="cart-img">
                                                        <a href="index.php?act=product_details&id=<?=$cart[0]?>"><img src="layout/img/product/<?=$cart[3]?>" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h4><a href="index.php?act=product_details&id=<?=$cart[0]?>"><?=$cart[1]?></a></h4>
                                                        <div class="cart-price">
                                                            <span><del><?=currency_format($cart[8])?></del></span>
                                                            <span class="new"><?=currency_format($cart[2])?></span> <br>
                                                            
                                                            <span>Số lượng: <?=$cart[6]?></span>
                                                        </div>
                                                    </div>
                                                    
                                                </li>
                                                <?php $tong += $cart[7];$stt++?>
                                                <?php endforeach ?>
                                                
                                                
                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Total:</span>
                                                        <span class="f-right"><?=currency_format($tong)?></span>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="index.php?act=cart">Giỏ hàng</a>
                                                        <a class="black-color" href="index.php?act=cart">Thanh toán ngay</a>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky-header" class="main-header menu-area black-bg">
                    <div class="container custom-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                <div class="menu-wrap">
                                    <nav class="menu-nav show">
                                        <div class="logo d-block d-lg-none">
                                            <a href="index.html" class="main-logo"><img src="layout/img/logo/w_logo.png" alt="Logo"></a>
                                            <a href="index.html" class="sticky-logo"><img src="layout/img/logo/logo.png" alt="Logo"></a>
                                        </div>
                                       
                                        <div class="navbar-wrap main-menu d-none d-lg-flex">
                                            <ul class="navigation">
                                                <li class="active menu-item-has-children has--mega--menu"><a href="index.php?act=home">Trang chủ</a></li>     

                                                <li class="has--mega--menu"><a href="index.php?act=productspage">Sản phẩm</a></li>
                                                
                                                <li><a href="index.php?act=productspage&id=3">VÁY</a></li>
                                                
                                                <li><a href="index.php?act=productspage&id=5">TÚI</a></li>
                                                
                                                <li><a href="index.php?act=productspage&id=4">GIÀY</a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="header-action d-none d-md-block">
                                            <ul>
                                                <li class="shipping-offer">Miễn phí vận chuyển cho đơn hàng từ <span>199.000VNĐ</span></li>
                                                <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal">
                                                    
                                                    
                                                        <i class="flaticon-search-interface-symbol"></i>
                                                    </a>
                                                </li>
                                                <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><img src="layout/img/logo/logoxoaphong.png" width="34px" height="34px" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <!-- Mobile Menu  -->
                                <div class="mobile-menu">
                                    <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                    <nav class="menu-box">
                                        <div class="nav-logo"><a href="index.html"><img src="layout/img/logo/logo.png" alt="" title=""></a>
                                        </div>
                                        <div class="menu-outer">
                                            <ul class="navigation">
                                                <li class="active menu-item-has-children"><a href="#">Trang chủ</a>
                                                    
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Sản phẩm</a>
                                                    
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="social-links">
                                            <ul class="clearfix">
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div class="menu-backdrop"></div>
                                <!-- End Mobile Menu -->
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Modal Search -->
                <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="index.php?act=productspage" method="post">
                                <input type="text" name="keyword" placeholder="Search here...">
                                <button type="submit" name="search"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Search-end -->
    
                <!-- off-canvas-start -->
                <div class="sidebar-off-canvas info-group">
                    <div class="off-canvas-overlay"></div>
                    <div class="off-canvas-widget scroll">
                        <div class="sidebar-widget-container">
                            <div class="off-canvas-heading">
                                <a href="#" class="close-side-widget">
                                    <span class="flaticon-targeting-cross"></span>
                                </a>
                            </div>
                            <div class="sidebar-textwidget">
                                <div class="sidebar-info-contents">
                                    <div class="content-inner">
                                        <div class="logo mb-30">
                                            <a href="index.html"><img src="layout/img/logo/logoxoaphonghoanchinh.png" alt="" width="40%"></a>
                                        </div>
                    
                                        <div class="contact-info">
                                            <h4 class="title">LIÊN HỆ VỚI CHÚNG TÔI</h4>
                                            <ul>
                                                <li><span class="flaticon-phone-call"></span><a href="#">0123456789</a></li>
                                                <li><span class="flaticon-email"></span><a href="#">melia@fpt.edu.vn</a></li>
                                                <li><span class="flaticon-place"></span>Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội.</li>
                                            </ul>
                                        </div>
                                        <div class="oc-newsletter">
                                            <h4 class="title">BẢN TIN</h4>
                                            <p>Điền email của bạn vào đây để nhận thông báo từ chúng tôi</p>
                                            <form action="#">
                                                <input type="email" placeholder="Email...">
                                                <button class="btn">Gửi</button>
                                            </form>
                                        </div>
                                        <div class="oc-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- off-canvas-end -->
    
            </header>
            <!-- header-area-end -->

