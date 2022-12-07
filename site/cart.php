<main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="layout/img/bg/breadcrumb_bg03.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Trang giỏ hàng</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- cart-area -->
            <div class="cart-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-wrapper">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="product-stt">STT</th>
                                                <th class="product-thumbnail">Ảnh</th>
                                                <th class="product-name">Tên sản phẩm</th>
                                                <th class="product-price">Đơn giá</th>
                                                <th class="product-quantity">Số lưọng</th>
                                                <th class="product-size">Size</th>
                                                <th class="product-color">Màu sắc</th>
                                                <th class="product-subtotal">SUBTOTAL</th>
                                                <th class="product-delete"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $stt=1;$total=0;?>
                                            <?php foreach($_SESSION['addcart'] as $cart):?>
                                            <tr>
                                                <td class="product-stt"><?=$stt?></td>
                                                <td class="product-thumbnail"><a href="shop-details.html"><img src="layout/img/product/<?=$cart[3]?>" alt=""></a></td>
                                                <td class="product-name">
                                                    <h4><a href="shop-details.html"><?=$cart[1]?></a></h4>
                                                </td>
                                                <td class="product-price"><?=currency_format($cart[2])?></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <form action="#" class="num-block">
                                                            <input type="text" class="in-num" value="<?=$cart[6]?>" readonly="">
                                                            
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="product-size"><span><?= selectsize($cart[4])['size']?></span></td>
                                                <td class="product-color"><span><?= selectcolor($cart[5])['color_name']?></span></td>
                                                <td class="product-subtotal"><span><?=currency_format($cart[7])?></span></td>
                                                <td class="product-delete"><a href="index.php?act=delcart&id=<?=$stt?>"><i class="flaticon-trash"></i></a></td>
                                            </tr>
                                            <?php $stt+=1;$total+=$cart[7]?>
                                            <?php endforeach?>
                                            
                                            <tr>
                                                <td style="font-weight: bolder;font-size:20px;" colspan="7">Tổng đơn hàng</td>
                                                <td style="font-weight: bolder;font-size:20px;"><?=currency_format($total)?></td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                </div>
                                <div class="shop-cart-bottom mt-20">
                                    
                                    <div class="continue-shopping">
                                        <a href="index.php?act=productspage" class="btn">Mua thêm</a>
                                    </div>

                                    <div class="delallcart">
                                        <a href="index.php?act=delcart"><button class="btn">Xóa tất cả</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-total pt-95">
                                <h3 class="title">Giá trị đơn hàng</h3>
                                <div class="shop-cart-widget">
                                    <form action="#">
                                        <ul>
                                        
        
                                            <li class="cart-total-amount"><span>Tổng đơn hàng</span> <span class="amount"><?=currency_format($total)?></span></li>
                                        </ul>
                                        <?php if (isset($_SESSION['user'])) { ?>
                                        
                                            <a href="index.php?act=thanhtoan" class="btn">THANH TOÁN</a>
                                        <?php }else{ ?>
                                            <a href="index.php?act=login" class="btn">THANH TOÁN</a>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-area-end -->

        </main>