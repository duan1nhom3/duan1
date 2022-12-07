<!-- main-area -->
<main>
<?php extract($pddetails); $idpd=$id?>
<!-- breadcrumb-area -->
<div class="breadcrumb-area breadcrumb-style-two" data-background="layout/img/bg/s_breadcrumb_bg01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="previous-product">
                    <a href="index.php?act=product_details&id=<?=$id-1?>"><i class="fas fa-angle-left"></i> Sản phẩm trước</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="breadcrumb-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$product_name?></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="next-product">
                    <a href="index.php?act=product_details&id=<?=$id+1?>">Sản phẩm tiếp theo <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- shop-details-area -->
<section class="shop-details-area pt-100 pb-95">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="shop-details-flex-wrap">
                    <div class="shop-details-nav-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab" aria-controls="item-one" aria-selected="true"><img src="layout/img/product/<?=$img?>" alt="" width="100px"></a>
                                </li>
                            <?php $img_des = load_imgdes($id);$num = 2; ?>
                                <?php foreach($img_des as $imgdes):?>
                                    <?php 
                                        $number = convert_name($num);
                                        
                                        $num+=1;
                                        
                                    ?>
                                    
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-<?=$number?>-tab" data-toggle="tab" href="#item-<?=$number?>" role="tab" aria-controls="item-<?=$number?>" aria-selected="false"><img src="layout/img/product/<?=$imgdes['img_name']?>" alt="" width="100px"></a>
                                    </li>
                                <?php endforeach ?>
                            
                        </ul>
                    </div>
                    <div class="shop-details-img-wrap">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                <div class="shop-details-img">
                                    <img src="layout/img/product/<?= $img ?>" alt="" width="600px">
                                </div>
                            </div>
                            <?php $img_des = load_imgdes($id);$num = 2; ?>
                            <?php foreach($img_des as $imgdes):?>
                                <?php 
                                    
                                    $number = convert_name($num);
                                    
                                    $num+=1;
                                ?>
                            <div class="tab-pane fade" id="item-<?=$number?>" role="tabpanel" aria-labelledby="item-<?=$number?>-tab">
                                <div class="shop-details-img">
                                    <img src="layout/img/product/<?= $imgdes['img_name'] ?>" alt="" width="600px">
                                </div>
                            </div>
                            <?php endforeach ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="shop-details-content">
                    <a href="#" class="product-cat"><?= $product_name?></a>
                    <h3 class="title"><?= $product_name?></h3>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="style-name">Lượt mua : <?=$luotmua?></p>
                    <span><del>Giá gốc: <?=currency_format($discount)?></del></span>
                    <div class="price">Giá : <?=currency_format($price)?></div>
                    <form action="index.php?act=addcart" method="post">
                        <div class="product-details-info">
                            <div class="sidebar-product-size mb-30">
                                <h4 class="widget-title">Size</h4>
                                <div class="shop-size-list">
                                    <ul>
                                        <?php $pdsize = selectpd_size($id);?>
                                        <?php foreach($pdsize as $pd){
                                            $size = selectsize($pd['id_size']);
                                            echo '<input type="radio" name="size" value="0" hidden checked>';
                                            echo '<li class="text-center"><input type="radio" name="size" value="'.$size['id'].'" ><a href="#">'.$size['size'].'</a></li>';
                                            
                                        }?> 
                                        <span style="color: red;font-size:17px"><?= isset($_COOKIE['thongbaosize']) ? $_COOKIE['thongbaosize'] : '' ?></span>
                                        
                                    </ul>
    
                                    
                                </div>
                            </div>
                            <div class="sidebar-product-color">
                                <h4 class="widget-title">Màu sắc</h4>
                                <div class="shop-list-color">
                                    <ul>
                                        <?php $pdcolor = selectpd_color($id);$stt=1?>
                                        <?php foreach($pdcolor as $pd){
                                            $color_name = selectcolor($pd['id_color']);
                                            echo '<input type="radio" name="color" value="0" hidden checked>';
                                            echo '<div class="'.$color_name['color_name'].'"><input name="color"  type="radio" id="c'.$stt.'" value="'.$color_name['id'].'" ><label for="c'.$stt.'"><span></span></label></div>';
                                            $stt+=1;
                                        }?> 

                                    </ul>
                                        <span style="color: red;font-size:17px"><?= isset($_COOKIE['thongbaomau']) ? $_COOKIE['thongbaomau'] : '' ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="perched-info">
                            <div class="cart-plus-minu">
                                <div class="num-block">
                                    <input type="text" name="quantity" class="in-num" value="1" readonly="">
                                    <div class="qtybutton-box">
                                        <span class="plus"><img src="layout/img/icon/plus.png" alt=""></span>
                                        <span class="minus dis"><img src="layout/img/icon/minus.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                              <input type="hidden" name="id" value="<?=$id?>">
                              <input type="hidden" name="name" value="<?=$product_name?>">
                              <input type="hidden" name="img" value="<?=$img?>">
                              <input type="hidden" name="price" value="<?=$price?>">
                              <input type="hidden" name="discount" value="<?=$discount?>">
                              <input type="hidden" name="luotmua" value="<?=$luotmua?>">
                        
                            <a href="index.php?act=addcart" ><button class="btn"  type="submit" name="addtocart">Thêm vào giỏ hàng</button></a>
                            
                        </div>
                    </form>
                    <div class="product-details-share">
                        <ul>
                            <li>Mô tả :</li>
                            <li><?=$description?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-desc-wrap">
                    <ul class="nav nav-tabs" role="tablist">
                        <!-- <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description"
                                aria-selected="true">Description Guide</a>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        
                        <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-desc-title mb-30">
                                <h4 class="title">Bình luận của khách hàng  :</h4>
                            </div>
                            <?php foreach ($listbl as $bl) : ?>
                                <?php 
                                $iduser = $bl['id_user'];
                                $usercomment = loadusercomment($iduser);
                                if (is_array($usercomment)) {
                                    extract($usercomment);
                                }
                                ?>
                                <div class="mb-5 d-flex">
                                    <div class="ttkh mr-5">
                                        <img src="layout/img/product/<?=$img?>" alt="" width="30px"><p><?=$fullname?></p>
                                    </div>
                                    <div class="noidungbl">
                                        <p><b>Nội dung:  </b> <?=$bl['content']?></p>
                                        <p class="text text-secondary">Ngày bình luận: <?=$bl['date']?></p>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <form action="index.php?act=product_details&id=<?=$idpd?>" method="post" class="comment-form review-form">
                                <span>Nhận xét của bạn *</span>
                                <textarea name="message" id="comment-message" placeholder="Đánh giá sản phẩm"></textarea>
                                <?php if (isset($_SESSION['user'])) { ?>
                                    <input type="hidden" name="id_user" value="<?=$_SESSION['user']['id']?>">
                                    <input type="hidden" name="id_pd" value="<?=$idpd?>">
                                    <button type="submit" name="comment" class="btn">Gửi </button>
                                    
                                <?php }else{ ?>
                                    <span style="color: red;font-size:20px">Bạn cần đăng nhập để gửi bình luận</span>
                                
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="related-product-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="related-product-title">
                        <h4 class="title">Các sản phẩm liên quan</h4>
                    </div>
                </div>
            </div>
            <div class="row related-product-active">
                <?php $product_cate = loadpdfour_cate($id,$id_cate)?>
                <?php foreach($product_cate as $pd):?>
                <div class="col-xl-3">
                    <div class="new-arrival-item text-center">
                        <div class="thumb mb-25">
                            <a href="index.php?act=product_details&id=<?=$pd['id']?>"><img src="layout/img/product/<?=$pd['img']?>" alt=""></a>
                            <div class="product-overlay-action">
                                <ul>
                                    <li><a href="index.php?act=product_details&id=<?=$pd['id']?>"><i class="far fa-heart"></i></a></li>
                                    <li><a href="index.php?act=product_details&id=<?=$pd['id']?>"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h5><a href="shop-details.html"><?=$pd['product_name']?></a></h5>
                            <span><del><?=currency_format($pd['discount'])?></del></span>
                            <span class="price"><?=currency_format($pd['price'])?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                
            </div>
        </div>
    </div>
</section>
<!-- shop-details-area-end -->

</main>
<!-- main-area-end -->