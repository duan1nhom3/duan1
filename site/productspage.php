<main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Shop</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-area -->
            <section class="shop-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="shop-top-meta mb-35">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="shop-top-left">
                                            <ul>
                                                <li><a href="#"><i class="flaticon-menu"></i> FILTER</a></li>
                                                <li>Hiển thị 1-9</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="shop-top-right">
                                            <form action="#">
                                                <select name="select">
                                                    <option value="">Sắp xếp</option>
                                                    <option>Sản phẩm mới</option>
                                                    <option>Theo giá tiền</option>
                                                    <option>Theo bảng chữ cái</option>
                                                    
                                                </select>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <?php foreach($products_cate as $pd):?>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="new-arrival-item text-center mb-50">
                                        <div class="thumb mb-25">
                                            <a href="index.php?act=product_details&id=<?=$pd['id']?>"><img src="layout/img/product/<?=$pd['img']?>" alt="" width="330px" height="440px"></a>
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
                            <?php endforeach?>
                                
                            </div>
                            <?php if (isset($_GET['id'])&&($_GET['id'] != 0)) {?>
                                
                            <?php }else{ ?>
                            <div class="pagination-wrap">
                                <ul>
                                    <?php for ($i=1; $i <= $pagenumber; $i++) { ?>
                                        <li <?php if ($i == $page) {
                                            echo 'style="background-color:red"' ;
                                        }?> ><a href="index.php?act=productspage&page=<?=$i?>"> <?=$i?> </a></li>
                                    <?php }?>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <aside class="shop-sidebar">
                                <div class="widget side-search-bar">
                                    <form action="index.php?act=productspage" method="post">
                                        <input type="text" name="keyword">
                                        <button type="submit" name="search"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Danh mục sản phẩm</h4>
                                    <div class="shop-cat-list">
                                        <ul>
                                            <li><a href="index.php?act=productspage&id=0">Tất cả</a></li>
                                            <?php foreach($cate as $cate):?>
                                            <li><a href="index.php?act=productspage&id=<?=$cate['id']?>"><?=$cate['cate_name']?></a><span>(<?=$cate['countpd']?>)</span></li>
                                            <?php endforeach?>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                                <div class="widget">
                                    <h4 class="widget-title">New Items</h4>
                                    <div class="sidebar-product-list">
                                        <ul>
                                            <?php $threepd = loadthreepdnew();?>
                                            <?php foreach($threepd as $pro):?>
                                            <li>
                                                <div class="sidebar-product-thumb">
                                                    <a href="index.php?act=product_details&id=<?=$pro['id']?>"><img src="layout/img/product/<?=$pro['img']?>" alt="" width="70px"></a>
                                                </div>
                                                <div class="sidebar-product-content">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <h5><a href="index.php?act=product_details&id=<?=$pro['id']?>"><?=$pro['product_name']?></a></h5>
                                                    <span><del><?=currency_format($pro['discount'])?></del></span>
                                                    <span class="price"><?=currency_format($pro['price'])?></span>
                                                </div>
                                            </li>
                                            <?php endforeach ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

        </main>