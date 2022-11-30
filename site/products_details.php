<!-- main-area -->
<main>

<!-- breadcrumb-area -->
<div class="breadcrumb-area breadcrumb-style-two" data-background="layout/img/bg/s_breadcrumb_bg01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="previous-product">
                    <a href="shop-details.html"><i class="fas fa-angle-left"></i> previous product</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="breadcrumb-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop.html">Winter 20</a></li>
                            <li class="breadcrumb-item"><a href="shop.html">Women</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tracker Jacket</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="next-product">
                    <a href="shop-details.html">Next product <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- shop-details-area -->
<section class="shop-details-area pt-100 pb-95">
    <?php extract($pddetails); $idpd=$id?>
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
                                        // if ($number=="one") {
                                        //     $atv = 'active';
                                        //     $acs = 'true';
                                        // }else{
                                        //     $atv = '';
                                        //     $acs = 'false';
                                        // }
                                        $num+=1;
                                        
                                    ?>
                                    
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-<?=$number?>-tab" data-toggle="tab" href="#item-<?=$number?>" role="tab" aria-controls="item-<?=$number?>" aria-selected="false"><img src="layout/img/product/<?=$imgdes['img_name']?>" alt="" width="100px"></a>
                                    </li>
                                <?php endforeach ?>
                            <!-- <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab" aria-controls="item-one" aria-selected="true"><img src="layout/img/product/sd_nav_img01.jpg" alt=""></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab" aria-controls="item-two" aria-selected="false"><img src="layout/img/product/sd_nav_img02.jpg" alt=""></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three" role="tab" aria-controls="item-three" aria-selected="false"><img src="layout/img/product/sd_nav_img03.jpg" alt=""></a>
                            </li> -->
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
                                    // if ($number=="one") {
                                    //     $atv = 'show active';
                                    // }else{
                                    //     $atv = '';
                                    // }
                                    $num+=1;
                                ?>
                            <div class="tab-pane fade" id="item-<?=$number?>" role="tabpanel" aria-labelledby="item-<?=$number?>-tab">
                                <div class="shop-details-img">
                                    <img src="layout/img/product/<?= $imgdes['img_name'] ?>" alt="" width="600px">
                                </div>
                            </div>
                            <?php endforeach ?>
                            <!-- <div class="tab-pane fade" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                <div class="shop-details-img">
                                    <img src="layout/img/product/shop_details_img02.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="item-three" role="tabpanel" aria-labelledby="item-three-tab">
                                <div class="shop-details-img">
                                    <img src="layout/img/product/shop_details_img03.jpg" alt="">
                                </div>
                            </div> -->
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
                    <p class="style-name">Style Name : TN-WI56-OMTJ-CqTKJ-09#</p>
                    <div class="price">Giá : <?=$price?>.000 VNĐ</div>
                    <form action="index.php?act=addcart" method="post">
                        <div class="product-details-info">
                            <div class="sidebar-product-size mb-30">
                                <h4 class="widget-title">Size</h4>
                                <div class="shop-size-list">
                                    <ul>
                                        <?php $pdsize = selectpd_size($id);?>
                                        <?php foreach($pdsize as $pd){
                                            $size = selectsize($pd['id_size']);
                                            
                                            echo '<li class="text-center"><input type="radio" name="size" value="'.$size['size'].'" checked><a href="#">'.$size['size'].'</a></li>';
                                            
                                        }?> 
                                        <!-- <li class="text-center"><input type="radio" name="size" value="S"><a href="#">S</a></li>
                                        <li class="text-center"><input type="radio" name="size" value="M"><a href="#">M</a></li>
                                        <li class="text-center"><input type="radio" name="size" value="L"><a href="#">L</a></li>
                                        <li class="text-center"><input type="radio" name="size" value="XL"><a href="#">XL</a></li>
                                        <li class="text-center"><input type="radio" name="size" value="XXL"><a href="#">XXL</a></li> -->
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
                                            // echo '<li class="'.$color_name['color_name'].'"></li>';
                                            echo '<div class="'.$color_name['color_name'].'"><input name="color"  type="radio" id="c'.$stt.'" value="'.$color_name['color_name'].'" checked><label for="c'.$stt.'"><span></span></label></div>';
                                            $stt+=1;
                                        }?> 
                                    </ul>
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
                            <a href="index.php?act=addcart" ><button class="btn"  type="submit" name="addtocart">Thêm vào giỏ hàng</button></a>
                            
                        </div>
                    </form>
                    <div class="product-details-share">
                        <ul>
                            <li>Share :</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
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
                        <!-- <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-desc-title mb-30">
                                <h4 class="title">Additional information :</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't
                            distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very
                            useful when the focus is meant to be on design, not content.</p>
                            <div class="color-size-info">
                                <ul>
                                    <li><span>COLOR :</span> Black, Gray</li>
                                    <li><span>SIZE :</span> XS, S, M, L</li>
                                </ul>
                            </div>
                            <div class="additional-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Size Name</th>
                                                <td>28</td>
                                                <td>49</td>
                                                <td>36</td>
                                                <td>55</td>
                                                <td>44</td>
                                                <td>34</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Waist Stretch</th>
                                                <td>19</td>
                                                <td>38</td>
                                                <td>31</td>
                                                <td>55</td>
                                                <td>44</td>
                                                <td>34</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Hip (7½” below from waist)</th>
                                                <td>11</td>
                                                <td>18</td>
                                                <td>21</td>
                                                <td>55</td>
                                                <td>44</td>
                                                <td>34</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">length (Out seam)</th>
                                                <td>28</td>
                                                <td>31</td>
                                                <td>19</td>
                                                <td>55</td>
                                                <td>44</td>
                                                <td>34</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't
                            distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very
                            useful when the focus is meant to be on design, not content.</p>
                        </div> -->
                        <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-desc-title mb-30">
                                <h4 class="title">Nhận xét của khách hàng (0) :</h4>
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
                                <input type="hidden" name="id_user" value="<?=$_SESSION['user']['id']?>">
                                <input type="hidden" name="id_pd" value="<?=$idpd?>">
                                <button type="submit" name="comment" class="btn">Gửi </button>
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
                            <span class="price"><?=$pd['price']?>.000 VNĐ</span>
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